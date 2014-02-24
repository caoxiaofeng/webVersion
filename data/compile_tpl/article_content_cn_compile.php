<!DOCTYPE 
    HTML
    PUBLIC
    "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">




<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="<?php echo content('info');?>">
    <meta name="keywords" content="<?php echo content('keywords');?>">
    <title>
      <?php echo content('title');?><?php echo cateinfo('cate_title_seo');?>_<?php echo webinfo('web_name');?>
    </title>
    <link href="<?php cmspath('template');?>/images/style.css" rel="stylesheet" type="text/css">
    <link href="<?php cmspath('template');?>/images/main.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php cmspath('template');?>/images/jquery.js">
    </script>
    <script type="text/javascript" src="<?php cmspath('template');?>/images/nav.js">
    </script>
  </head>
  <body>
    <?php $this->display('head2',1,1);?>
    <div class="mainPageStyle">
      <div id="container">

        <!-- 二级分类 -->
        <?php $tree=get_tpl_list_nav();?> <?php if($tree){?>
        <ul>
          <div id="subCategory">
            <?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?>
            <li style="display: block; height: 45px; line-height: 45px; padding: 0 13px; float: left; display: inline">
            <a 
                class="<?php echo $nav['class'];?>"
                href="<?php echo $nav['url'];?>"
                <?php echo                 $nav['target'];?>
                title="<?php echo $nav['cate_name'];?>">




              <?php echo $nav['cate_name'];?>
            </a>
          </li>
          <?php 
}
}?>
        </div>
      </ul>

      <?php }?>
      <!-- 当前位置 -->
      <div id="position">
        <span>
          当前位置:<?php position(); ?> > 内容列表
        </span>
      </div>
      <div class="clear">
      </div>



      <div id="mainContent">
        <div id="mainContent_article_list">
          <div class="box_in">
            <p class="title" style="">
              <?php echo content('title');?>
            </p>
            <p class="info">
              <span>
                点击次数:
                <script language="javascript" src="<?php cmspath('includes');?>/hits.php?id=<?php echo content('id');?>">
                </script>
              </span>
              <span>
                更新时间:<?php echo date('Y-m-d H:m:s',content('updatetime'));?>
              </span>
              <span>
                <a href="javascript:window.print()">
                  【打印】
                </a>
              </span>
              <span>
                <a href="javascript:self.close()">
                  【关闭】
                </a>
              </span>
            </p>
            <div class="arc_info">
              <?php echo content('info');?>
            </div>
            <!--摘要-->
            <div class="arc_body">
              <table width='100%'>
                <tr>
                  <td>
                    <?php echo content('content');?>
                  </td>
                </tr>
              </table>
            </div>
            <div class="page_fy" style="float: none; margin-left: 300px;">
              <?php echo body_pages();?>
            </div>
            <?php $bq=get_content_key();?> <?php if($bq){?>
            <div class="bq">
              相关标签：<?php 
 $fun_return=$bq;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
              <a href="<?php echo $v['url'];?>" target="_blank">
                <?php echo $v['name'];?>
              </a>
              <?php 
}
}?>
            </div>
            <?php }?>
            <!--
              <div class="arc_link" style="clear: both"> <span><?php echo content('prev');?></span><span><?php echo               content('next');?>}</span </div>
            -->
          </div>
          <div>
            <p style="font-size:15px;font-weight: bold; font-color:#097391;float:right; margin-right:10px;">
              <span>
                <a href="javascript:window.print()" style="color:#097391;">
                  【打印】
                </a>
              </span>
              <span>
                <a href="javascript:self.close()" style="color:#097391;">
                  【关闭】
                </a>
              </span>
            </p>
          </div>
          <div class="clear">
          </div>

          <div>
            <?php $hot_arc=get_else_content($cate_id=$nav_child['id'],$limit='0,5',$order_type='updatetime',$filter='',$pic='no',$order='desc',$lang='');?> <?php if($hot_arc){?>
            <ul style="border-bottom: 1px solid #7096cc;">
              <li 
                  style="font-size: 14px; background:#f7fafe; height:28px;line-height:28px; border-top:1px solid #7096cc; border-bottom: 1px solid #e4e4e4;">


              相关信息
            </li>
            <?php 
 $fun_return=$hot_arc;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
            <li style="font-size: 14px; height:40px;height:28px;line-height:28px;border-bottom: 1px solid #e4e4e4;">
            <a 
                title="<?php echo $v['title'];?>"
                href="<?php echo $v['url'];?>"
                <?php echo                 $v['target'];?>
                <?php if(                $v['style']){?>
                style="<?php echo $v['style'];?>"
                <?php }?>>
              <?php echo cn_substr($v['title'],50);?>
            </a>
          </li>
          <?php 
}
}?>
         
        </ul>
        <?php }?>
        
      </div>
    </div>

    <!-- 右侧广告 -->
    <div id="mainContent_r">
      <div id="mainContent_r_grid">
        <?php echo right_ad('1');?>
      </div>
      <div id="mainContent_r_grid">
        <?php echo right_ad('2');?>
      </div>
      <div id="mainContent_r_grid">
        <?php echo right_ad('3');?>
      </div>
    </div>
    <div class="clear">
    </div>

  </div>
</div>
</div>

<?php $this->display('foot',1,1);?>
</body>
</html>
