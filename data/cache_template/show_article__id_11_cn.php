<!DOCTYPE 
    HTML
    PUBLIC
    "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="                              ">
    <meta name="keywords" content="">
    <title>
      vip测试_中国氟化工网    </title>
    <link href="/template/default/images/style.css" rel="stylesheet" type="text/css">
    <link href="/template/default/images/main.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/template/default/images/jquery.js">
    </script>
    <script type="text/javascript" src="/template/default/images/nav.js">
    </script>
  </head>
  <body>
    
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
    <script language='javascript'>
linkarr = new Array();
picarr = new Array();
textarr = new Array();
var swf_width=1000;
var swf_height=200;
var text_height=0;
var files = "";
var links = "";
var texts = "";
//这里设置调用标记
linkarr[1] = "http://www.sina.com";
picarr[1]  = "/upload/img/main_top_head.jpg";
for(i=1;i<picarr.length;i++){
  if(files=="") files = picarr[i];
  else files += "|"+picarr[i];
}
for(i=1;i<linkarr.length;i++){
  if(links=="") links = linkarr[i];
  else links += "|"+linkarr[i];
}
for(i=1;i<textarr.length;i++){
  if(texts=="") texts = textarr[i];
  else texts += "|"+textarr[i];
}
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="/data/flash_ad/ad_2/bcastr.swf"><param name="quality" value="high">');
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="pics='+files+'&links='+links+'&texts='+texts+'&borderwidth='+swf_width+'&borderheight='+swf_height+'&textheight='+text_height+'">');
document.write('<embed src="/data/flash_ad/ad_2/bcastr.swf" wmode="opaque" FlashVars="pics='+files+'&links='+links+'&texts='+texts+'&borderwidth='+swf_width+'&borderheight='+swf_height+'&textheight='+text_height+'" menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); 
document.write('</object>'); 
</script>    <!--<img src="/template/default/images/main_top_head.jpg" alt="headImg" />-->

  </div>

  <!-- 多语言链接 -->
  <!--
    <div>  <a href="/"class="focus" > 简体中文 </a>  <a href="/index.php?lang=en" > English </a>  </div>
  -->

  <div id="category">
    <div class="head_nav">
      <div class="nav_left">

        <ul>
          <li class="">
          <a href="/">
            <span style="color:#177b32;background-image:url(../..//template/default/images/nav_index_bg.png);background-position: center;">
              首页
            </span>
          </a>
        </li>
                <li class="">
        <a href="/article/article.php?id=1">
          <span>
            产品价格          </span>
        </a>
        <span style="float:left; width:1px">|</span>
      </li>
              <li class="">
        <a href="/article/article.php?id=2">
          <span>
            原料辅料          </span>
        </a>
        <span style="float:left; width:1px">|</span>
      </li>
              <li class="">
        <a href="/article/article.php?id=3">
          <span>
            制冷剂          </span>
        </a>
        <span style="float:left; width:1px">|</span>
      </li>
              <li class="">
        <a href="/article/article.php?id=4">
          <span>
            氟化盐          </span>
        </a>
        <span style="float:left; width:1px">|</span>
      </li>
              <li class="">
        <a href="/article/article.php?id=5">
          <span>
            聚合物          </span>
        </a>
        <span style="float:left; width:1px">|</span>
      </li>
              <li class="">
        <a href="/article/article.php?id=6">
          <span>
            政策法规          </span>
        </a>
        <span style="float:left; width:1px">|</span>
      </li>
              <li class="focus">
        <a href="/article/article.php?id=7">
          <span>
            企业动向          </span>
        </a>
        <span style="float:left; width:1px">|</span>
      </li>
              <li class="">
        <a href="/article/article.php?id=8">
          <span>
            资料馆          </span>
        </a>
        <span style="float:left; width:1px">|</span>
      </li>
              <li class="">
        <a href="/job/job.php?id=25">
          <span>
            我的空间          </span>
        </a>
        <span style="float:left; width:1px">|</span>
      </li>
          </ul>

  </div>
</div>
</div>
</div>
    <div class="mainPageStyle">
      <div id="container">

        <!-- 二级分类 -->
               <!-- 当前位置 -->
      <div id="position">
        <span>
          当前位置:<a href="/">首页</a> >> <a href="/article/article.php?id=7">企业动向</a> > 内容列表
        </span>
      </div>
      <div class="clear">
      </div>
      


      <div id="mainContent">  
        <div id="mainContent_article_list">
          <div class="box_in">
            <p class="title" style="">
              vip测试            </p>
            <p class="info">
              <span>
                点击次数:
                <script language="javascript" src="/includes/hits.php?id=11">
                </script>
              </span>
              <span>
                更新时间:2014-01-20 18:01:44              </span>
              <span>
                <a href="javascript:window.print()">
                  【打印】
                </a>
              </span>
              <span>
                <a href="javascript:self.close()">
                  【关闭】
                </a>
              </span>
            </p>
            <div class="arc_info">
                                                        </div>
            <!--摘要-->
            <div class="arc_body">
              <table width='100%'>
                <tr>
                  <td>
                    <p class="j-item" data-time="93.53999999999999">
	其实心中早就明白</p>
<p class="j-item" data-time="95.53">
	你我同在九十年代</p>
<p class="j-item z-sel" data-time="97.88">
	你我同在九十年代</p>
<p class="j-item" data-time="188.79">
	语言已经不够准确</p>
<p class="j-item" data-time="190.54">
	说不清世界 世界</p>
<p class="j-item" data-time="192.76">
	存在着各种不同感觉</p>
                  </td>
                </tr>
              </table>
            </div>
            <div class="page_fy" style="float: none; margin-left: 300px;">
                          </div>
                         <!--
              <div class="arc_link" style="clear: both"> <span>上一条:没有了</span><span>下一条:没有了}</span </div>
            -->


          </div>
          <div class="clear">
          </div>

        </div>

        <!-- 右侧广告 -->
        <div id="mainContent_r">
          <div id="mainContent_r_grid">
            <script language='javascript'>
linkarr = new Array();
picarr = new Array();
textarr = new Array();
var swf_width=250;
var swf_height=210;
var text_height=0;
var files = "";
var links = "";
var texts = "";
//这里设置调用标记
linkarr[1] = "http://www.163.com";
picarr[1]  = "/upload/img/right_ad_3.jpg";
for(i=1;i<picarr.length;i++){
  if(files=="") files = picarr[i];
  else files += "|"+picarr[i];
}
for(i=1;i<linkarr.length;i++){
  if(links=="") links = linkarr[i];
  else links += "|"+linkarr[i];
}
for(i=1;i<textarr.length;i++){
  if(texts=="") texts = textarr[i];
  else texts += "|"+textarr[i];
}
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="/data/flash_ad/ad_2/bcastr.swf"><param name="quality" value="high">');
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="pics='+files+'&links='+links+'&texts='+texts+'&borderwidth='+swf_width+'&borderheight='+swf_height+'&textheight='+text_height+'">');
document.write('<embed src="/data/flash_ad/ad_2/bcastr.swf" wmode="opaque" FlashVars="pics='+files+'&links='+links+'&texts='+texts+'&borderwidth='+swf_width+'&borderheight='+swf_height+'&textheight='+text_height+'" menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); 
document.write('</object>'); 
</script>          </div>
          <div id="mainContent_r_grid">
            <script language='javascript'>
linkarr = new Array();
picarr = new Array();
textarr = new Array();
var swf_width=250;
var swf_height=210;
var text_height=0;
var files = "";
var links = "";
var texts = "";
//这里设置调用标记
linkarr[1] = "http://";
picarr[1]  = "/upload/img/right_ad_2.jpg";
for(i=1;i<picarr.length;i++){
  if(files=="") files = picarr[i];
  else files += "|"+picarr[i];
}
for(i=1;i<linkarr.length;i++){
  if(links=="") links = linkarr[i];
  else links += "|"+linkarr[i];
}
for(i=1;i<textarr.length;i++){
  if(texts=="") texts = textarr[i];
  else texts += "|"+textarr[i];
}
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="/data/flash_ad/ad_2/bcastr.swf"><param name="quality" value="high">');
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="pics='+files+'&links='+links+'&texts='+texts+'&borderwidth='+swf_width+'&borderheight='+swf_height+'&textheight='+text_height+'">');
document.write('<embed src="/data/flash_ad/ad_2/bcastr.swf" wmode="opaque" FlashVars="pics='+files+'&links='+links+'&texts='+texts+'&borderwidth='+swf_width+'&borderheight='+swf_height+'&textheight='+text_height+'" menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); 
document.write('</object>'); 
</script>          </div>
          <div id="mainContent_r_grid">
            <script language='javascript'>
linkarr = new Array();
picarr = new Array();
textarr = new Array();
var swf_width=250;
var swf_height=210;
var text_height=0;
var files = "";
var links = "";
var texts = "";
//这里设置调用标记
linkarr[1] = "http://";
picarr[1]  = "/upload/img/right_ad_1.jpg";
for(i=1;i<picarr.length;i++){
  if(files=="") files = picarr[i];
  else files += "|"+picarr[i];
}
for(i=1;i<linkarr.length;i++){
  if(links=="") links = linkarr[i];
  else links += "|"+linkarr[i];
}
for(i=1;i<textarr.length;i++){
  if(texts=="") texts = textarr[i];
  else texts += "|"+textarr[i];
}
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="/data/flash_ad/ad_2/bcastr.swf"><param name="quality" value="high">');
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="pics='+files+'&links='+links+'&texts='+texts+'&borderwidth='+swf_width+'&borderheight='+swf_height+'&textheight='+text_height+'">');
document.write('<embed src="/data/flash_ad/ad_2/bcastr.swf" wmode="opaque" FlashVars="pics='+files+'&links='+links+'&texts='+texts+'&borderwidth='+swf_width+'&borderheight='+swf_height+'&textheight='+text_height+'" menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); 
document.write('</object>'); 
</script>          </div>
        </div>
        <div class="clear">
        </div>

      </div>
    </div>
  </div>

  
<!--
  <div class="foot"> <div class="foot_left"></div> <div class="foot_right"> <div class="foot_nav">  <a href="/sitemap/sitemap.php" title="网站地图">网站地图</a> |  <a href="/book/book.php" title="留言本">留言本</a>   </div>  <p>地址：北京市朝阳区左家庄中街6号豪成大厦21层  邮编：100028  传真：010-58946899 联系人： 谭 艳   电话：010-45678902 手机：12345678907 E-Mail:xefs@adf.com</p> <p> Copyright ⓒ 2007 BAINFO.COM Inc. All Rights Reserved <a
  href="http://www.bainfo.com" target="_blank">百川资讯</a> 版权所有 </p> </div> <div class="clear"></div>
  </div>
-->
<div class="mainPageStyle">
<div style="float:left; width: 1000px; background:#e8f4f8; height:100px; margin-top:30px;margin-bottom:30px;">
  <div style="width:180px;margin-top:36px; text-align:right; display:inline; vertical-align:middle; float:left;">
    <span style="font-size:22px; font-style:italic;color:#b1c9d4; margin-right:10px;">
      中国氟化工网
    </span>
  </div>

  <div 
      style="width:600px; margin-top:30px; text-align:center;display: inline; vertical-align:middle;float:left;">

        <span>
      地址：北京市朝阳区左家庄中街6号豪成大厦21层  邮编：100028  传真：010-58946899 联系人： 谭 艳   电话：010-45678902 手机：12345678907 E-Mail:xefs@adf.com    </span>
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

    <form name="footSearchform" target="blank" action="/search/search.php?lang=cn" method="post">
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

</div>
</body>
</html>