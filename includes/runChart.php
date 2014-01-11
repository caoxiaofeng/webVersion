<?php
define('CMS', true);
require_once ('init.php');

include (JG_PATH . 'src/jpgraph.php');
include (JG_PATH . 'src/jpgraph_line.php');

function get_products_for_price()
{
    $lang = 'cn';
    $cage_sql = "select c.id,c.list_num,c.cate_pic1,c.cate_pic2,c.cate_pic3,c.cate_content,c.temp_id,c.cate_channel,c.is_content,c.cate_url,c.cate_is_open,c.cate_html,c.cate_nav,c.cate_fold_name,c.cate_order,c.cate_hide,c.cate_tpl,c.cate_name,c.lang,c.cate_parent,COUNT(s.id) as haschild from " . DB_PRE . "category as c left join " . DB_PRE . "category as s on c.id=s.cate_parent where c.lang='" . $lang . "' and c.cate_parent != 0 group by c.id order by c.cate_order,c.id desc";
    $category = $GLOBALS['mysql']->fetch_asc($cage_sql);
    return $category;
}

function generateChart($product_id)
{
    //$p_id = intval($product_id);
    if($product_id ==''){
        return;
    }
    $p_id = $product_id;
    $price_sql = "select * from " . DB_PRE . "product_price where product_id=$p_id order by price_date";
    $product_price = $GLOBALS['mysql']->fetch_asc($price_sql);
    
    $priceDate = array();
    $rmb = array();
    $dollar = array();
    $jpy  = array();
    
    foreach ($product_price as $k=>$v){
        $priceDate[$k] = $v['price_date'];
        $rmb[$k] = $v['rmb_price'];
        $dollar[$k] = $v['dollar_price'];
        $jpy[$k] = $v['JPY_price'];
    }
    if (! is_array($product_price)) {
        return;
    }
    
    // Setup the graph
    $graph = new Graph(600, 500, "auto");
    $graph->SetScale("textlin");
    
    $theme_class = new UniversalTheme();
    
    $graph->title->SetFont(FF_SIMSUN,FS_BOLD,11);
    $title = '价格趋势';
//     $title = mb_convert_encoding($title, "html-entities","utf-8" );
    $title = iconv("UTF-8", "GB2312//IGNORE", $title);
    
    $graph->SetTheme($theme_class);
    $graph->img->SetAntiAliasing(false);
    $graph->title->Set($title);
    $graph->SetBox(false);
    
    $graph->img->SetAntiAliasing();
    
    $graph->yaxis->HideZeroLabel();
    $graph->yaxis->HideLine(false);
    $graph->yaxis->HideTicks(false, false);
    
    $graph->xgrid->Show();
    $graph->xgrid->SetLineStyle("solid");
    $graph->xaxis->SetTickLabels($priceDate);
    $graph->xgrid->SetColor('#E3E3E3');
    
    // Create the first line
    $p1 = new LinePlot($rmb);
    $graph->Add($p1);
    $p1->SetColor("#6495ED");
    $p1->SetLegend('RMB');
    
    // Create the second line
    $p2 = new LinePlot($dollar);
    $graph->Add($p2);
    $p2->SetColor("#B22222");
    $p2->SetLegend('美元');
    
    // Create the third line
    $p3 = new LinePlot($jpy);
    $graph->Add($p3);
    $p3->SetColor("#FF1493");
    $p3->SetLegend('日元');
    
    $graph->legend->SetFrameWeight(1);
    
    // Output line
    //$graph->Stroke();
    
    $graph->Stroke();
//     $fileName = "../data/cache/price".$product_id.".jpg";
//     $graph->Stroke($fileName);
}
?>