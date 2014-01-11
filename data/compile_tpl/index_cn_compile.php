<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo webinfo('web_description');?>">
<meta name="keywords" content="<?php echo webinfo('web_keywords');?>">
<title><?php if(webinfo('web_index_name')){?><?php echo 	webinfo('web_index_name');?><?php }else{?><?php echo webinfo('web_name');?><?php }?></title>
<link href="<?php cmspath('template');?>/images/style.css" rel="stylesheet"
	type="text/css">
<link href="<?php cmspath('template');?>/images/main.css" rel="stylesheet"
	type="text/css">
<script type="text/javascript" src="<?php cmspath('template');?>/images/jquery.js"></script>
<script type="text/javascript" src="<?php cmspath('template');?>/images/nav.js"></script>
<script type="text/javascript" src="<?php cmspath('template');?>/images/pic_go.js"></script>
</head>
<script type="text/javascript">
	$(document).ready(
			function() {
				$('#code').click(
						function() {
							$(this).attr(
									'src',
									'<?php cmspath('includes');?>/code.php?tag='
											+ new Date().getTime());
						});
				$.ajax({
					type : "POST",
					url : "<?php cmspath('member');?>/member.php",
					data : "action=is_ajax_login&lang="
							+ "<?php echo get_web_param('lang');?>",
					dataType : "json",
					success : function(data) {
						if (data.login == 1) {
							$('#ajx_area').html(data.info);
						}
					}
				});
				$('#ajax_login').click(
						function() {
							$.ajax({
								type : "POST",
								url : "<?php cmspath('member');?>/member.php",
								data : "action=ajax_login&lang="
										+ $('#ajax_lang').val() + "&password="
										+ $('#ajax_password').val() + "&user="
										+ $('#ajax_user').val() + "&code="
										+ $('#ajax_code').val(),
								dataType : "json",
								success : function(data) {
									if (data.login == 1) {
										$('#ajx_area').html(data.info);
									} else {
										//alert(data.info);
									}
								}
							});
						});

			});

	function doSearch() {
		var rdo = document.getElementsByName("rad");
		for ( var i = 0; i < rdo.length; i++) {
			if (i == 0 && rdo[i].checked == true) {
				document.searchform.action = "<?php cmspath('search');?>";
				document.searchform.submit();
			} else if (i == 1 && rdo[i].checked == true) {
				//document.searchform.method = "get";
				//document.searchform.enctype="text/plain";
				document.searchform.tn.value = "baidu"
				document.searchform.action = "http://www.baidu.com/baidu";
				document.searchform.submit();
			}
		}
		return false;
	}
</script>
<body>
	<?php $this->display('head2',1,1);?>
	<div class="mainPageStyle">
		<!-- search area -->
		<div id="search">
			<!-- <form  name="form1" action="<?php cmspath('search');?>" method="post" style="margin-top: 5px;"> -->
			<form name="searchform" target="blank" onsubmit="return doSearch()"
				style="margin-top: 5px;">
				<label> <input name=tn type="hidden" /> <input type="text"
					name="word" id="textfield" /> <input type="radio" name="rad"
					value="local" id="RadioGroup1_0" checked="true" /> 站内搜索 <input
					type="radio" name="rad" value="baidu" id="RadioGroup1_1" /> 百度搜索 
					<input type="submit" value="确定" name="submit"
					style="background: #40b15f; color: #FFFFFF; margin-left: 5px; padding: 2px 0;" />
				</label>
			</form>
		</div>
		<!-- recommend and login -->
		<div id="recommendAndLogin">
			<div id="recommendAndLogin_t">
				<?php $top_one=get_top_content($limit='0,1',$order_type='updatetime',$filter='',$pic='no',$order='desc',$lang='');?>
				<div id="recommendAndLogin_r_Imgs">
					<a title="<?php echo $top_one[0]['title'];?>"
						href="<?php echo $top_one[0]['url'];?>"> <img
						src="<?php cmspath('upload');?>/<?php echo $top_one[0]['tbpic'];?>"
						alt="Top News Img" />
					</a>
				</div>

				<div id="recommendAndLogin_r_Top5">

					<!-- 置顶头条 -->

					<?php if($top_one){?>
					<p>
						<a title="<?php echo $top_one[0]['title'];?>"
							href="<?php echo $top_one[0]['url'];?>"
							style="float: left; font-size: 14px; text-align: center; color: #57952c; width: 460px;">
							<?php echo $top_one[0]['title'];?> </a>
					</p>
					<?php }else{?>
					<p>&nbsp;</p>
					<?php }?>
					<p>&nbsp;</p>
					<!-- 分类头条 -->
					<?php 
 $fun_return=top_article(5);if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav_child){?>
					<p>
						<b><span
							style="font-size: 12px; width: 20%; margin-top: 2px; text-align: center; display: block; float: left"><?php echo 								$nav_child['cate_name'];?>:</span></b> <?php $hot_arc=get_else_content($cate_id=$nav_child['id'],$limit='0,1',$order_type='updatetime',$filter='',$pic='no',$order='desc',$lang='');?> <?php if($hot_arc){?> <a
							title="<?php echo $hot_arc[0]['title'];?>"
							href="<?php echo $hot_arc[0]['url'];?>"> <span
							style="width: 80%; text-align: left; margin-top: 2px; display: block; float: left"><?php echo 								cn_substr($hot_arc[0]['title'],60);?></span>
						</a> <?php }?>
					</p>
					<p
						style="font-size: 9px; color: #c9c9c9; text-align: left; display: block; float: left;">－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－－</p>
					<?php 
}
}?>
				</div>
			</div>

			<div id="recommendAndLogin_login">
				<form name="form1" action="<?php cmspath('cms');?>member.php" method="post">
					<div style="width: 300px; height:40px;">
						<p style="margin-left: 90px;">
							<img src="<?php cmspath('template');?>/images/user_login.png"
								alt="user login Img" />
						</p>
					</div>

					<div id="ajx_area" style="margin-top:4px; height:100px;">
						<div style="margin-top:4px;">
							<span style="font-size: 12px; font-weight:700">帐 号：</span>
							<input type="text" id="ajax_user" name="user"
								style="height: 24px; width:220px;" />
						</div>
						
						<div style="margin-top:4px;">
							<span style="font-size: 12px; font-weight:700">密 码：</span>
							<input type="password" id="ajax_password"
								name="password" style="height: 24px; width:220px;" />
						</div>

							<!-- <p1 style="text-align:left">验证码：</p1>
					<p2>
						<input type="text" name="code" id="ajax_code"
							style="width:60px; margin-top: 6px;" />
						<img src="<?php cmspath('includes');?>/code.php" name="code" id="code"
							style="cursor: pointer; display: inline;width:50%;" />
					</p2>
					</p> -->
					
						<div style="margin-left:50px; margin-top:8px; width:260px; float:center;">
							<input type="hidden" id="ajax_lang"
								value="<?php echo get_web_param('lang');?>" name="lang" /> 
							<input
								type="button"
								style="border: 0; background:#189840; color:#000000; padding: 0"
								value="登 陆"  name="go"
								id="ajax_login" /> 
							<a href="<?php cmspath('member');?>/member.php?action=regist&lang=<?php echo get_web_param('lang');?>">注册</a>
							<a href="#">忘记密码</a>
						</div>
					</div>
					
					<div  style="width: 300px; height:5px;">
						<span style="height:5px;">－－－－－－－－－－－－－－－－－－－－－－－</span>
					</div>
					
					<div style="width: 300px; float:left; margin-top:8px;">
					&nbsp;
					 	<img src="<?php cmspath('template');?>/images/web_map.png" alt="map" /><a href="#">网站地图&nbsp;&nbsp;&nbsp;&nbsp;</a>
					 	<img src="<?php cmspath('template');?>/images/service_icon.png" alt="service" /><a href="#">客户服务&nbsp;&nbsp;&nbsp;&nbsp;</a>
						<img src="<?php cmspath('template');?>/images/ad_icon.png" alt="ads" /><a href="#">广告服务</a>
					</div>
				</form>
				<div class="clear"></div>
			</div>
		</div>

		<!-- middle banner -->
		<div id="middleBanner">
			<img src="<?php cmspath('template');?>/images/middle_banner.jpg" alt="banner Img" />
		</div>

		<!--category article list -->
		<div id="mainContent">
			<div id="mainContent_cate">
				<?php 
 $fun_return=category_article();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav_child){?>
				<div id="mainContent_cate_list">
					<div id="mainContent_cate_list_title">
						<p>
							<img style="margin-top: 8px; height: 16px"
								src="<?php cmspath('template');?>/images/article_title_circle.png"
								alt="banner Img" /> <?php echo $nav_child['cate_name'];?>
							<!-- <a href="<?php echo $nav_child['url'];?>"<?php echo $nav_child['target'];?>><span><?php echo 									$nav_child['cate_name'];?></span></a> -->
						<p style="float: right; margin-right: 10px; margin-top: 6px;">
							<a href="<?php echo $nav_child['url'];?>"<?php echo $nav_child['target'];?>><img
								src="<?php cmspath('template');?>/images/more_article.gif" alt="banner Img" /></a>
						</p>
						</p>
					</div>
					<div id="mainContent_cate_list_content">
						<?php $hot_arc=get_else_content($cate_id=$nav_child['id'],$limit='0,7',$order_type='hits',$filter='',$pic='no',$order='desc',$lang='');?> <?php if($hot_arc){?> <?php 
 $fun_return=$hot_arc;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
						<p>
							<img src="<?php cmspath('template');?>/images/article_triangle_tip.png"
								alt="banner Img" /> <a title="<?php echo $v['title'];?>"
								href="<?php echo $v['url'];?>"
								<?php echo $v['target'];?> <?php if($v['style']){?> style="<?php echo $v['style'];?>"<?php }?>>
								<?php echo cn_substr($v['title'],60);?> </a> <span
								style="float: right; margin-right: 10px"><?php echo 								date('y-m-d',$v['updatetime']);?></span>
						</p>
						<?php 
}
}?> <?php }?>
					</div>
				</div>
				<?php 
}
}?>

			</div>

			<div id="mainContent_r">
				<div id="mainContent_r_grid"><?php echo right_ad('1');?></div>
				<div id="mainContent_r_grid"><?php echo right_ad('2');?></div>
				<div id="mainContent_r_grid"><?php echo right_ad('3');?></div>
			</div>
			<div class="clear"></div>
		</div>

	</div>

	<?php $this->display('foot',1,1);?>

</body>
</html>