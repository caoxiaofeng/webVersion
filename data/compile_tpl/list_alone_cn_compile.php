<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo content('info');?>">
<meta name="keywords" content="<?php echo content('keywords');?>">
<title><?php echo content('title');?>_<?php echo webinfo('web_name');?></title>
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
			<?php $tree=get_tpl_list_nav();?> <?php if($tree){?>
			<div id="subCategory">

				<?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?> <a class="<?php echo $nav['class'];?>"
					href="<?php echo $nav['url'];?>"
					<?php echo $nav['target'];?> 
                    	title="<?php echo $nav['cate_name'];?>">
					<?php echo $nav['cate_name'];?> </a> <?php 
}
}?>

			</div>
			<?php }?>

			<!-- 当前位置 -->
			<div id="position">
				<span>当前位置:<?php position(); ?> > 内容列表</span>
			</div>
			<div class="clear"></div>

			<!-- 当前分类所有文章及右侧广告 -->
			<div id="mainContent">
			<?php $selProd=$_POST['product_id'];?>
				<div class="order_contain">
					<form name="maininfo" method="post" enctype="multipart/form-data"
						action="<?php cmspath('alone');?>/alone.php" class="form">
						<div class="order_main">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr>
										<td style="width: 40%; text-align: center" class="w1">选择产品（间隔30秒可重新获取价格图表）：
											<p style="color: #999999; font-weight: normal"></p>
										</td>
										<td style="width: 20%">
											<select name="product_id">
												<?php $category=get_products_for_price();?>
												<?php if(empty($category)){?>
												   <option value="">no item</option>
												<?php }else{?>
													<?php 
 $fun_return=$category;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
													<option value=<?php echo $v['id'];?>  <?php if($selProd==$v['id']){?> <?php echo 'selected="selected"';?> <?php }?>><?php echo $v['cate_name'];?></option>
													<?php 
}
}?>
												<?php }?>

											</select>
										</td>
										<td style="width: 40%" >
										<!-- <input type="hidden" name="action" value="add_data" /> -->
										 <input type="submit" value="确定" name="submit" />
										 <input type="reset" style="margin: 0 10px;" value="重置" name="reset" />
								</td>
									</tr>
									
								
								</tbody>
							</table>
						</div>
						
					</form>
				</div>

				<!-- 当前分类所有文章 -->
				<div id="mainContent_article_list">
					<div>
						<img src="<?php cmspath('includes');?>/price_gd.php?product_id=<?php echo $selProd;?>" />
					</div>

<!-- 					<div class="list_page">
						<div class="page_fy"><?php echo list_page();?></div>
					</div>
					<div class="clear"></div> -->
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
	
	
</body>
</html>