
<script>
  function bookmark(){
    var title=document.title
    var url=document.location.href
    if (window.sidebar) window.sidebar.addPanel(title, url,"");
    else if( window.opera && window.print ){
      var mbm = document.createElement('a');
      mbm.setAttribute('rel','sidebar');
      mbm.setAttribute('href',url);
      mbm.setAttribute('title',title);
    mbm.click();}
    else if( document.all ) window.external.AddFavorite( url, title);
  }

  function setHomepage() {　 // 设为首页
  　　　 if (document.all) {
    　　　　　　　 document.body.style.behavior = 'url(#default#homepage)';
    　　　　　　　 document.body.setHomePage('http://www.bainfo.com');　　　　　　　　　　　
  }
  　　　 else if (window.sidebar) {
    　　　　　　　 if (window.netscape) {
      　　　　　　　　　　　 try {
        　　　　　　　　　　　　　　　 netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
      　　　　　　　　　　　 }
      　　　　　　　　　　　 catch (e) {
        　　　　　　　　　　　　　　　 alert("该操作被浏览器拒绝，假如想启用该功能，请在地址栏内输入 about:config,然后将项 signed.applets.codebase_principal_support 值该为true");
      　　　　　　　　　　　 }
    　　　　　　　 }
    　　　　　　　 var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
    　　　　　　　 prefs.setCharPref('browser.startup.homepage','http://www.bainfo.com');
    　　　 }　　　　　　　
  }
</script>

<link href="images/main.css" rel="stylesheet" type="text/css" />

<div class="mainPageStyle">
  <!-- 顶部图片，设置首页与收藏按钮 -->
  <div id="headView">
    <button id="headView_default" onclick=setHomepage()>
    </button>
    <button id="headView_bookmark" onclick=bookmark()>
    </button>
    <!-- <input type="button" name="bookmark" id="headView_bookmark" onclick=bookmark() /> -->
    <?php echo flash_ad('');?>
    <!--<img src="<?php cmspath('template');?>/images/main_top_head.jpg" alt="headImg" />-->

  </div>

  <!-- 多语言链接 -->
  <!--
    <div> <?php 
 $fun_return=lang();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?> <a href="<?php echo $v['url'];?>"<?php echo $v['class'];?> <?php echo $v['target'];?>> <?php echo     $v['lang_name'];?> </a> <?php 
}
}?> </div>
  -->

  <div id="category">
    <div class="head_nav">
      <div class="nav_left">

        <ul>
          <li class="<?php echo get_web_param('index_focus');?>">
          <a href="<?php cmspath('index');?>">
            <span style="color:#177b32;background-image:url(../../<?php cmspath('template');?>/images/nav_index_bg.png);background-position: center;">
              首页
            </span>
          </a>
        </li>
        <?php 
 $fun_return=nav_middle();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav_child){?>
        <li class="<?php echo $nav_child['class'];?>">
        <a href="<?php echo $nav_child['url'];?>"<?php echo $nav_child['target'];?>>
          <span>
            <?php echo $nav_child['cate_name'];?>
          </span>
        </a>
        <span style="float:left; width:1px">|</span>
      </li>
      <?php 
}
}?>
    </ul>

  </div>
</div>
</div>
</div>
