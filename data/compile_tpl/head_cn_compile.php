<div class="head_contain">
	<div class="login_contain">
		<div class="head_login" id="user_login">
			<form name="form1" action="<?php cmspath('cms');?>member.php" method="post">
				<label>用户名:</label><input type="text" id="ajax_user" name="user"
					style="width: 100px" /> <label>登陆密码:</label><input type="password"
					id="ajax_password" name="password" style="width: 100px" /> <label>验证码:</label><input
					type="text" name="code" id="ajax_code" style="width: 50px" /> <img
					src="<?php cmspath('includes');?>/code.php" name="code" border="0" id="code"
					style="display: block; float: left; cursor: pointer; margin-left: 5px; display: inline" />
				<input type="hidden" id="ajax_lang"
					value="<?php echo get_web_param('lang');?>" name="lang" /> <input
					type="button"
					style="border: 0; margin-left: 5px; display: inline; padding: 0"
					src="<?php cmspath('template');?>/images/login_input2.gif" name="go"
					id="ajax_login" /> <label><a
					href="<?php cmspath('member');?>/member.php?action=regist&lang=<?php echo get_web_param('lang');?>">注册会员</a></label>
			</form>
			<div class="clear"></div>
		</div>
		<!--登录-->
	</div>
	<script type="text/javascript">
$(document).ready(function(){
	$('#code').click(function(){
	$(this).attr('src','<?php cmspath('includes');?>/code.php?tag='+new Date().getTime());
	});
	$.ajax({
			type:"POST",
			url:"<?php cmspath('member');?>/member.php",
			data:"action=is_ajax_login&lang="+"<?php echo get_web_param('lang');?>",
			dataType:"json",
			success:function(data){
				if(data.login==1){
					$('#user_login').html(data.info);
				}
			}	
	});
	$('#ajax_login').click(function(){
		$.ajax({
			type:"POST",
			url:"<?php cmspath('member');?>/member.php",
			data:"action=ajax_login&lang="+$('#ajax_lang').val()+"&password="+$('#ajax_password').val()+"&user="+$('#ajax_user').val()+"&code="+$('#ajax_code').val(),
			dataType:"json",
			success:function(data){
				if(data.login==1){
					$('#user_login').html(data.info);
				}else{
					alert(data.info);
				}
			}
		});
	});
	
});
</script>

	<div class="head">
		<div class="head_left">
			<div class="logo">
				<a href="<?php cmspath('index');?>"><img
					src="<?php cmspath('cms');?>upload/<?php echo webinfo('web_logo');?>" border="0" /></a>
			</div>
		</div>
		<div class="sousuo">
			<form name="form1" action="<?php cmspath('search');?>">
				<div class="s_margin">
					<input name="key"
						style="width: 250px; display: block; float: left; height: 30px; line-height: 30px;"
						type="text" /><input type="image"
						src="<?php cmspath('template');?>/images/search_btn.gif" class="find" /><input
						type="hidden" value="<?php echo get_web_param('lang');?>" name="lang" />
					<div class="clear"></div>
				</div>
				<div class="s_margin">
					<span>热门搜索：</span> <?php 
 $fun_return=get_hot_words();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?> <a
						href="<?php echo $v['url'];?>"><?php echo $v['name'];?></a> <?php 
}
}?>
				</div>
			</form>
		</div>
		<!--搜索-->
		<div class="head_right">
			<a href="#"
				onclick="javascript:window.external.AddFavorite('http://www.bainfo.com','<?php echo webinfo('web_name');?>')"
				title="收藏本站到你的收藏夹">加入收藏</a> <?php 
 $fun_return=lang();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?> <a
				href="<?php echo $v['url'];?>"<?php echo $v['class'];?> <?php echo $v['target'];?>><?php echo 
				$v['lang_name'];?></a> <?php 
}
}?>
		</div>
		<div class="clear"></div>
	</div>
</div>

<div style="clear: both"></div>

<div class="head_nav">
	<div class="nav_left">
		<div class="nav_right">
			<ul>
				<li class="<?php echo get_web_param('index_focus');?>"><a
					href="<?php cmspath('index');?>"><span>首页</span></a></li> <?php 
 $fun_return=nav_middle();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav_child){?>
				<li class="<?php echo $nav_child['class'];?>"><a
					href="<?php echo $nav_child['url'];?>"<?php echo $nav_child['target'];?>><span><?php echo 
							$nav_child['cate_name'];?></span></a></li> <?php 
}
}?>
			</ul>
		</div>
	</div>
</div>
<!--主导航-->
<div class="div_margin"></div>
<div class="flash"><?php echo flash_ad('');?></div>
<!--幻灯-->