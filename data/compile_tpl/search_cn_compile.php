<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="search">
<meta name="keywords" content="search">
<title>search_<?php echo webinfo('web_name');?></title>
<link href="<?php cmspath('template');?>/images/style.css" rel="stylesheet"
	type="text/css">
<link href="<?php cmspath('template');?>/images/main.css" rel="stylesheet"
	type="text/css">
<script type="text/javascript" src="<?php cmspath('template');?>/images/jquery.js"></script>
<script type="text/javascript" src="<?php cmspath('template');?>/images/nav.js"></script>
</head>
<body>
	<?php $this->display('head2',1,1);?>
	<div class="contain">
		<div class="search_title">
			搜索<span style="color: red; font-weight: bold"><?php echo 
				get_web_param('key');?></span>的结果如下<a href="<?php cmspath('index');?>">返回首页</a>
		</div>
		<?php if(!get_search()){?>
		<div class="search_content">
			<h2>没有相关内容</h2>
		</div>
		<?php }else{?> <?php 
 $fun_return=get_search();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
		<div class="search_content">
			<?php if($v['is_pic']){?>
			<div style="padding: 8px 10px 8px 0">
				<a href="<?php echo $v['url'];?>" target="_blank"><img
					src="<?php echo $v['thumb_pic'];?>" border="0" width="150" height="150" /></a>
			</div>
			<?php }?>
			<h2>
				<a href="<?php echo $v['url'];?>" target="_blank"><?php echo 
					$v['title'];?></a>
			</h2>
			<p><?php echo $v['info'];?></p>
			<div class="clear"></div>
		</div>
		<!--搜索内容-->
		<?php 
}
}?> <?php }?>
		<div class="page_fy"><?php echo get_search_page();?></div>
		<!--分页-->
	</div>
	<?php $this->display('foot',1,1);?>
</body>
</html>