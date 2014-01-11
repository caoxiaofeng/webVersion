<div class="foot">
	<div class="foot_left"></div>
	<!--left-->
	<div class="foot_right">
		<div class="foot_nav">
			<?php 
 $fun_return=nav_bottom();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?> <a href="<?php echo $v['url'];?>"
				title="<?php echo $v['cate_name'];?>"><?php echo $v['cate_name'];?></a><?php if(			!$v['last']){?>|<?php }?> <?php 
}
}?>
		</div>
		<?php $mail=webinfo('web_mail');?>
		<p><?php echo webinfo('web_powerby');?></p>
		<p>
			Copyright ⓒ 2007 BAINFO.COM Inc. All Rights Reserved <a
				href="http://www.bainfo.com" target="_blank">百川资讯</a>
			版权所有
		</p>
	</div>
	<div class="clear"></div>
</div>
<!--页脚-->
<?php echo webinfo('web_yinxiao');?> <!-- <?php $this->display('kefu',1,1);?> -->

