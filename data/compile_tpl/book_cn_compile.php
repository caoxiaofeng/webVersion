<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo weblangs('book');?>">
<meta name="keywords" content="<?php echo weblangs('book');?>">
<title><?php echo weblangs('book');?>_<?php echo webinfo('web_name');?></title>
<link href="<?php cmspath('template');?>/images/style.css" rel="stylesheet"
	type="text/css">
<script type="text/javascript" src="<?php cmspath('template');?>/images/jquery.js"></script>
<script type="text/javascript" src="<?php cmspath('template');?>/images/nav.js"></script>
</head>
<body>
	<?php $this->display('head',1,1);?>
	<div class="div_margin"></div>
	<div class="contain">
		<div class="box_title" style="background: none">
			<h2 class="position">
				<span>当前位置:<?php position(); ?> 留言本</span>
			</h2>
		</div>
		<div class="book_contain">
			<h2>留言本：</h2>
			<?php 
 $fun_return=$book;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
			<div class="book">
				<div class="book_head">
					[<?php echo $v['book_type'];?>]:<?php echo $v['book_name'];?>&nbsp;<span
						class="title"><?php echo $v['book_title'];?></span><span
						style="color: #0000FF">&nbsp;<?php echo $v['pr_title'];?></span><span
						class="time"><?php echo date('Y-m-d H:m:s',$v['addtime']);?></span>
				</div>
				<div class="book_content"><?php echo $v['book_content'];?></div>
				<?php if($v['reply']){?>
				<div class="book_reply">回复：<?php echo $v['reply'];?></div>
				<?php }?>
			</div>
			<!--列表-->
			<?php 
}
}?>
			<div class="page_fy"><?php echo $page;?></div>
		</div>
		<div class="book_contain" style="margin-top: 10px;">
			<div class="book_form">
				<form action="?action=add&lang=<?php echo $lang;?>" method="post"
					name="form">
					<?php if($title){?>
					<p>
						<label>产品名称:</label><?php echo $title;?>
					</p>
					<?php }?>
					<p>
						<label>留言名：</label><input name="book_name"
							style="width: 200px; padding: 2px 0" />
					</p>
					<p>
						<label>电子邮箱:</label><input name="mail"
							style="width: 200px; padding: 2px 0" />
					</p>
					<p>
						<label>类型：</label><input type="radio" name="book_type" value="0"
							checked="checked" style="margin: 0 5px;" />留言<input type="radio"
							name="book_type" value="1" style="margin: 0 5px;" />投诉<input
							type="radio" name="book_type" value="2" style="margin: 0 5px;" />询问<input
							type="radio" name="book_type" value="3" style="margin: 0 5px;" />售后
					</p>
					<p>
						<label>留言标题：</label><input name="book_title"
							style="width: 400px; padding: 2px 0" />
					</p>
					<p style="height: 100px;">
						<label>留言内容：</label>
						<textarea name="book_content"
							style="width: 400px; height: 100px; border: 1px solid #E3E3E3;"></textarea>
					</p>
					<p>
						<label>验证码：</label><input name="book_code" value=""
							style="width: 50px; height: 20px; line-height: 20px; display: block; float: left; margin-right: 3px; display: inline" /><img
							src="<?php cmspath('includes');?>/code.php" name="code" border="0" id="code"
							style="display: block; float: left; cursor: pointer" />
					</p>
					<p>
						<input type="hidden" name="pr_id" value="<?php echo $pr_id;?>" /><input
							style="margin-left: 80px;" type="submit" name="submit" value="确定" />
					</p>
				</form>
			</div>
		</div>
	</div>
	<?php $this->display('foot',1,1);?>
</body>
</html>