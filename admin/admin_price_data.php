<?php

define('IN_CMS', 'true');
include ('init.php');
$action = isset($_REQUEST['action']) ? fl_html(fl_value($_REQUEST['action'])) : 'flash_ad';
$lang = isset($_REQUEST['lang']) ? fl_html(fl_value($_REQUEST['lang'])) : get_lang_main();

// 添加产品价格
if ($action == 'add') {
    $sql = "select c.id,c.list_num,c.cate_pic1,c.cate_pic2,c.cate_pic3,c.cate_content,c.temp_id,c.cate_channel,c.is_content,c.cate_url,c.cate_is_open,c.cate_html,c.cate_nav,c.cate_fold_name,c.cate_order,c.cate_hide,c.cate_tpl,c.cate_name,c.lang,c.cate_parent,COUNT(s.id) as haschild from " . DB_PRE . "category as c left join " . DB_PRE . "category as s on c.id=s.cate_parent where c.lang='" . $lang . "' and c.cate_parent != 0 group by c.id order by c.cate_order,c.id desc";
    $category = $GLOBALS['mysql']->fetch_asc($sql);
    include ('template/admin_price_add.html');
} // 管理产品价格
elseif ($action == 'admin') {
    $sql = "select c.id,c.list_num,c.cate_pic1,c.cate_pic2,c.cate_pic3,c.cate_content,c.temp_id,c.cate_channel,c.is_content,c.cate_url,c.cate_is_open,c.cate_html,c.cate_nav,c.cate_fold_name,c.cate_order,c.cate_hide,c.cate_tpl,c.cate_name,c.lang,c.cate_parent,COUNT(s.id) as haschild from " . DB_PRE . "category as c left join " . DB_PRE . "category as s on c.id=s.cate_parent where c.lang='" . $lang . "' and c.cate_parent != 0 group by c.id order by c.cate_order,c.id desc";
    $category = $GLOBALS['mysql']->fetch_asc($sql);
    include ('template/admin_price_edit.html');
}
elseif($action == 'add_data'){
    $price_date = $_POST['price_date'];
    $product_id = $_POST['product_id'];
    $rmb_price = $_POST['rmb_price'];
    $dollar_price = $_POST['dollar_price'];
    $JPY_price = $_POST['JPY_price'];
    $product_category = $_POST['product_category'];
    
    if(!check_str($price_date, '/^(?:(?:19|[2-9][0-9])[0-9]{2}([-.]?)(?:(?:0?[1-9]|1[0-2])\1(?:0?[1-9]|1[0-9]|2[0-8])|(?:0?[13-9]|1[0-2])\1(?:29|30)|(?:0?[13578]|1[02])\1(?:31))|(?:(?:1[6-9]|[2-9][0-9])(?:0[48]|[2468][048]|[13579][26])|(?:16|[2468][048]|[3579][26])00)([-.]?)0?2\2(?:29))$/')){
        msg('<span style="color:red">请输入合法日期</span>');
    }
    
    if (! check_str($product_id, '/^[0-9][0-9]*$/')) {
        msg('<span style="color:red">产品名称不能为空</span>');
    }
    if (! check_str($rmb_price, '/^[0-9][0-9]*$/')) {
        msg('<span style="color:red">人民币价格必须填写数字</span>');
    }
    if (! check_str($dollar_price, '/^[0-9][0-9]*$/')) {
        msg('<span style="color:red">美元价格必须填写数字</span>');
    }
    if (! check_str($JPY_price, '/^[0-9][0-9]*$/')) {
        msg('<span style="color:red">日元价格必须填写数字</span>');
    }
//     if (strlen($product_category) < 1) {
//         msg('<span style="color:red">分类不能为空</span>');
//     }
    
    $table = DB_PRE . "product_price";
    $sql = "insert into {$table} (product_id,rmb_price,dollar_price,JPY_price,product_category,price_date) values ('{$product_id}','{$rmb_price}','{$dollar_price}',$JPY_price,'{$product_category}','{$price_date}')";
    $GLOBALS['mysql']->query($sql);
    
    //echo "<script>alert($product_n . '价格' . '添加成功')</script>";
    
    msg($product_n . '价格' . '添加成功');

}
elseif($action == 'search_product'){
    $product_id = $_POST['product_id'];
    
    $cage_sql = "select c.id,c.list_num,c.cate_pic1,c.cate_pic2,c.cate_pic3,c.cate_content,c.temp_id,c.cate_channel,c.is_content,c.cate_url,c.cate_is_open,c.cate_html,c.cate_nav,c.cate_fold_name,c.cate_order,c.cate_hide,c.cate_tpl,c.cate_name,c.lang,c.cate_parent,COUNT(s.id) as haschild from " . DB_PRE . "category as c left join " . DB_PRE . "category as s on c.id=s.cate_parent where c.lang='" . $lang . "' and c.cate_parent != 0 group by c.id order by c.cate_order,c.id desc";
    $category = $GLOBALS['mysql']->fetch_asc($cage_sql);
    
    $price_sql = "select * from " . DB_PRE . "product_price where product_id=$product_id order by price_date";
    $product_price = $GLOBALS['mysql']->fetch_asc($price_sql);
    
    include ('template/admin_price_edit.html');

}