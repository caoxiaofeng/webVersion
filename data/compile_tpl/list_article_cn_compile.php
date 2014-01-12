<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo cateinfo('cate_info_seo');?>">
<meta name="keywords" content="<?php echo cateinfo('cate_key_seo');?>">
<title><?php echo cateinfo('cate_title_seo');?>_<?php echo 	webinfo('web_name');?></title>
<link href="<?php cmspath('template');?>/images/style.css" rel="stylesheet"
	type="text/css">
<link href="<?php cmspath('template');?>/images/main.css" rel="stylesheet"
	type="text/css">
<script type="text/javascript" src="<?php cmspath('template');?>/images/jquery.js"></script>
<script type="text/javascript" src="<?php cmspath('template');?>/images/nav.js"></script>
</head>
<body>
	<?php $this->display('head2',1,1);?>
	<div class="mainPageStyle">
		<div id="container">

			<!-- 二级分类 -->
			
			<?php $tree=get_tpl_list_nav();?> 
			<?php if($tree){?>
			<ul>
				<div id="subCategory">
				<?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?> 
					<li style="display: block; height: 45px; line-height: 45px; padding: 0 13px; float: left; display: inline">
					<a class="<?php echo $nav['class'];?>" href="<?php echo $nav['url'];?>"  <?php echo $nav['target'];?>  title="<?php echo $nav['cate_name'];?>">
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
				<span>当前位置:<?php position(); ?> > 内容列表</span>
			</div>
			<div class="clear"></div>

			<!-- 当前分类所有文章及右侧广告 -->
			<div id="mainContent">
				<!-- 当前分类所有文章 -->
				<div id="mainContent_article_list">
				
					<ul class="ul_list_article">
						<?php 
 $fun_return=list_article();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
						<li>
							<b><a href="<?php echo $v['url'];?>"  style=""><?php echo $v['title'];?> </a></b>
							<!-- <span class="time"><?php echo date('Y-m-d H:m:s',$v['updatetime']);?></span> -->
							<p>&nbsp</p>
							<span style="	float: left; text-align: left; display: block;"><?php echo $v['info'];?></span>
						</li>
						
						<?php 
}
}?>
					</ul>
					
					<div class="list_page">
						<div class="page_fy"><?php echo list_page();?></div>
					</div>
					<div class="clear"></div>

				</div>

				<!-- 右侧广告 -->
				<div id="mainContent_r">
					<div id="mainContent_r_grid"><?php echo right_ad('1');?></div>
					<div id="mainContent_r_grid"><?php echo right_ad('2');?></div>
					<div id="mainContent_r_grid"><?php echo right_ad('3');?></div>
				</div>
				<div class="clear"></div>

			</div>
		</div>
	</div>
	<?php $this->display('foot',1,1);?>


	</div>

</body>
</html>