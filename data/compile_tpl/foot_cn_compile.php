<div>
</div>
<!--
  <div class="foot"> <div class="foot_left"></div> <div class="foot_right"> <div class="foot_nav"> <?php 
 $fun_return=nav_bottom();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?> <a href="<?php echo $v['url'];?>" title="<?php echo $v['cate_name'];?>"><?php echo $v['cate_name'];?></a> <?php if(  !$v['last']){?>|<?php }?> <?php 
}
}?> </div> <?php $mail=webinfo('web_mail');?> <p><?php echo   webinfo('web_powerby');?></p> <p> Copyright ⓒ 2007 BAINFO.COM Inc. All Rights Reserved <a
  href="http://www.bainfo.com" target="_blank">百川资讯</a> 版权所有 </p> </div> <div class="clear"></div>
  </div>
-->

<div style="margin: 0px auto; width: 1000px; background:#e8f4f8; height:100px; margin-top:30px;margin-bottom:30px;">
  <div style="width:180px;margin-top:36px; text-align:right; display:inline; vertical-align:middle; float:left;">
    <span style="font-size:22px; font-style:italic;color:#b1c9d4; margin-right:10px;">
      中国氟化工网
    </span>
  </div>

  <div 
      style="width:600px; margin-top:30px; text-align:center;display: inline; vertical-align:middle;float:left;">

    <?php $mail=webinfo('web_mail');?>
    <span>
      <?php echo webinfo('web_powerby');?>
    </span>
    <br>
    <span style="text-align:center;">
      Copyright ⓒ 2007 BAINFO.COM Inc. All Rights Reserved
      <a href="http://www.bainfo.com" target="_blank">
        百川资讯
      </a>
      版权所有
    </sapn>
  </div>

  <div 
      style="width:200px;margin-top:36px; margin-right:10px; text-align:right;display: table-cell; vertical-align:middle;float:right;">

    <form name="footSearchform" target="blank" action="<?php cmspath('search');?>" method="post">
      <input 
          type="submit"
          value="站内搜索"
          name="footSubmit"
          style="width:60px;height:20px;background: #40b15f; color: #FFFFFF; margin-left: 5px; padding: 2px 0;"
      />
      <input type="text" name="word" id="textfield" style="width:80px; height:20px;"/>
    </form>
  </div>
</div>
