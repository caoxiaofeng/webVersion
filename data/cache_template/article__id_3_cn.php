<!DOCTYPE 
    HTML
    PUBLIC
    "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>
      _中国氟化工网    </title>
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
              <li class="focus">
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
              <li class="">
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
        <p>
          <img style="vertical-align:middle;" src="/template/default/images/location_tip.png"/>
          <span style="vertical-align:middle;">
            您现在的位置:<a href="/">首页</a> >> <a href="/article/article.php?id=3">制冷剂</a> >> 内容列表
          </span>
        </p>
      </div>

      <div class="clear">
      </div>

      <!-- 当前分类所有文章及右侧广告 -->
      <div id="mainContent">
        <!-- 当前分类所有文章 -->
        <div id="mainContent_article_list">

          <ul class="ul_list_article">
                        <li>
            <b>
              <a href="/article/show_article.php?id=9"  style="">
                中国好歌曲帮音乐卸下紧箍咒              </a>
            </b>
            <!-- <span class="time">2014-01-14 22:01:45</span> -->
            <p>
              &nbsp
            </p>
            <span style="	float: left; text-align: left; display: block;">
              
	《音乐使人自由》，这是日本音乐大师坂本龙一自传的名字。&ldquo;音乐不可以不自在&rdquo;，这是莫西子诗在《中国好歌曲》上的表 达。自由也好，自在也罢，归根到底，强调的都是...            </span>
          </li>

                      <li>
            <b>
              <a href="/article/show_article.php?id=8"  style="">
                2014百度狼奔时刻，全线推手机卫士              </a>
            </b>
            <!-- <span class="time">2014-01-14 22:01:28</span> -->
            <p>
              &nbsp
            </p>
            <span style="	float: left; text-align: left; display: block;">
              
	
		&nbsp;
	
		春节是互联网公司不忍忽视的攻坚战时刻。
	
		道理很简单，中国互联网得屌丝者得天下，市场渗透却是自上而下的。春节长假，北上广深等城市上班族，衣锦还乡时，...            </span>
          </li>

                      <li>
            <b>
              <a href="/article/show_article.php?id=7"  style="">
                崔永元以前的公众形象不错，              </a>
            </b>
            <!-- <span class="time">2014-01-14 22:01:14</span> -->
            <p>
              &nbsp
            </p>
            <span style="	float: left; text-align: left; display: block;">
              
	崔永元以前的公众形象不错，除了因为其十几年前主持央视&ldquo;实话实说&rdquo;栏目给观众留下的&ldquo;实话实说&rdquo;的错觉，还与他热心搞 公益活动有关。他搞公益活动的名头如此之...            </span>
          </li>

                      <li>
            <b>
              <a href="/article/show_article.php?id=6"  style="">
                阿里在行业里其实也没啥人心。这也是个封闭帝国，营销公司，本质就是倒流量，再高价卖给商户，年复一年收税。所以它不能接受批量倒...              </a>
            </b>
            <!-- <span class="time">2014-01-14 22:01:19</span> -->
            <p>
              &nbsp
            </p>
            <span style="	float: left; text-align: left; display: block;">
              
	2、提前加速战略执行，要未来的增长点。余额宝、淘点点、支付宝线下收款，这些本来都不着急的事都快速提前。包括海尔、格力、银泰，都是朝着一个大目标：服务业。比零售业大...            </span>
          </li>

                      <li>
            <b>
              <a href="/article/show_article.php?id=5"  style="">
                阿里命门在产品，腾讯命门在封闭              </a>
            </b>
            <!-- <span class="time">2014-01-14 22:01:02</span> -->
            <p>
              &nbsp
            </p>
            <span style="	float: left; text-align: left; display: block;">
              
	阿里和腾讯这一场世纪之战，各自命门在哪里？

	阿里的命门在不懂产品，腾讯的命门在内部人会把腾讯拉到封闭的路上去。不懂产品就几乎必败，而封闭则无法全胜。胜败取决于自...            </span>
          </li>

                      <li>
            <b>
              <a href="/article/show_article.php?id=4"  style="">
                中央纪律检查委员会委员，中央和国家机关各部委、各人民团体、军队及武警部队负责人等参加会议。各省、自治区、直辖市和新疆生产建...              </a>
            </b>
            <!-- <span class="time">2014-01-14 22:01:48</span> -->
            <p>
              &nbsp
            </p>
            <span style="	float: left; text-align: left; display: block;">
              
	
		
	
		&nbsp;&nbsp;&nbsp; 1月14日，中共中央总书记、国家主席、中央军委主席习近平在中国共产党第十八届中央纪律检查委员会第三次全体会议上发表重要讲话。新华社记者刘卫兵摄...            </span>
          </li>

                      <li>
            <b>
              <a href="/article/show_article.php?id=1"  style="">
                置顶头条测试              </a>
            </b>
            <!-- <span class="time">2014-01-11 15:01:53</span> -->
            <p>
              &nbsp
            </p>
            <span style="	float: left; text-align: left; display: block;">
              	ffff
            </span>
          </li>

                  </ul>

        <div class="list_page">
          <div class="page_fy">
            <span class="off">首页</span><span class="off">上一页</span><a class="focus" href="?page=1&id=3">1</a><span class="off">下一页</span><span class="off">尾页</span><span>转到<select style="width:40px;" onchange="location.href=this.options[this.selectedIndex].value;"><option value="?page=1&id=3" >1</option></select></span><span>共7条记录,当前第1/1</span>          </div>
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
</script>        </div>
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
</script>        </div>
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
</script>        </div>
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
