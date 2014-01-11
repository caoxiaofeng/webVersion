<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo weblangs('sitemap');?>">
<meta name="keywords" content="<?php echo weblangs('sitemap');?>">
<title><?php echo weblangs('sitemap');?>_<?php echo webinfo('web_name');?></title>
<link href="<?php cmspath('template');?>/images/style.css" rel="stylesheet"
	type="text/css">
<script type="text/javascript" src="<?php cmspath('template');?>/images/jquery.js"></script>
<script type="text/javascript" src="<?php cmspath('template');?>/images/nav.js"></script>
</head>
<body>
	<?php $this->display('head',1,1);?>
	<div class="div_margin"></div>
	<div class="contain">
		<div class="sitemap">
			<div class="sitemap_box">
				<?php 
 $fun_return=get_sitemap();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $child){?>
				<h2>
					<a href="<?php echo $child['url'];?>" title="<?php echo $child['name'];?>"><?php echo 
						$child['name'];?></a>
				</h2>
				<?php if($child['child']){?>
				<ul>
					<?php 
 $fun_return=$child['child'];if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $child2){?>
					<li><a href="<?php echo $child2['url'];?>"
						title="<?php echo $child2['name'];?>"><?php echo $child2['name'];?></a></li>
					<?php 
 $fun_return=$child2['child'];if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<li><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>"><?php echo 
							$v['name'];?></a></li> <?php 
}
}?> <?php 
}
}?>
				</ul>
				<?php }?>
				<div class="clear"></div>
				<?php 
}
}?>
			</div>
		</div>
		<!--网站地图-->
	</div>
	<?php $this->display('foot',1,1);?>
</body>
</html>