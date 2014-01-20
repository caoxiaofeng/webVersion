<!DOCTYPE 
    HTML
    PUBLIC
    "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">




<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="这是一个氟化工网站">
    <meta name="keywords" content="">
    <title>
      中国氟化工网－首页    </title>
    <link href="/template/default/images/style.css" rel="stylesheet" type="text/css">
    <link href="/template/default/images/main.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/template/default/images/jquery.js">
    </script>
    <script type="text/javascript" src="/template/default/images/nav.js">
    </script>
    <script type="text/javascript" src="/template/default/images/pic_go.js">
    </script>
<!--[if IE 6]>
    <script type="text/javascript"  language="javascript" src="/template/default/images/ie6png.js">
    </script>
<![endif]-->
    <script>
      document.write(unescape("%3Cscript%3E%0D%0A%3C%21--%0D%0Adocument.write%28unescape%28%22%253CBODY%2520bgColor%253D%2523ffffff%2520leftMargin%253D0%2520topMargin%253D0%2520oncontextmenu%253D%2522return%2520false%2522%2520onselectstart%253D%2522return%2520false%2522%253E%250D%250A%253Cscript%253E%250D%250A%253C%2521--%250D%250Avar%2520x%2520%253B%250D%250Ax%253D23%253B%250D%250A%250D%250A//--%253E%250D%250A%253C/script%253E%22%29%29%3B%0D%0A//--%3E%0D%0A%3C/script%3E"));
    </script>
    <script type="text/javascript">
      function doSearch()
      {
        var rdo = document.getElementsByName("rad");
        for ( var i = 0; i < rdo.length; i++)
        {
          if (i == 0 && rdo[i].checked == true)
          {
            document.searchform.action = "/search/search.php?lang=cn";
            document.searchform.submit();

            } else if (i == 1 && rdo[i].checked == true)
            {
              document.searchform.tn.value = "baidu"
              document.searchform.action = "http://www.baidu.com/baidu";
              document.searchform.submit();
            }
          }
          return false;
        }
$(document).ready(
        function() {
          $('#code').click(
          function() {
            $(this).attr(
            'src',
            '/includes/code.php?tag='
            + new Date().getTime());
            });
            $.ajax({
              type : "POST",
              url : "/member/member.php",
              data : "action=is_ajax_login&lang="
              + "cn",
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
                  url : "/member/member.php",
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
      </script>
    </head>

    <body onselectstart="return false">
      
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
          <li class="focus">
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
        <!-- search area -->
        <div id="search">
          <form name="searchform" target="self" onsubmit="return doSearch()" style="margin-top: 5px;">
            <label>
              <input name=tn type="hidden" />
              <input type="text" name="word" id="textfield" />
              <input type="radio" name="rad" value="local" id="RadioGroup1_0"  checked=true />
              站内搜索
              <input type="radio" name="rad" value="baidu" id="RadioGroup1_1"/>
              百度搜索
              <input 
                  type="submit"
                  value="确定"
                  name="submit"
                  onClick="doSearch()"
                  style="background: #40b15f; color: #FFFFFF; margin-left: 5px; padding: 2px 0;"
              />
            </label>
          </form>
        </div>

        <!-- recommend and login -->
        <div id="recommendAndLogin">
          <div id="recommendAndLogin_t">
                        <div id="recommendAndLogin_r_Imgs">
              <a title="置顶头条测试" href="/article/show_article.php?id=1">
                <img src="/upload/img/right_ad_3.jpg" alt="Top News Img" />
              </a>
            </div>

            <div id="recommendAndLogin_r_Top5">
              <div style="margin-top:20px;">
                <!-- 置顶头条 -->
                                <p>
                  <a 
                      title="置顶头条测试"
                      href="/article/show_article.php?id=1"
                      style="float: left; font-size: 14px; text-align: center; color: #57952c; width: 460px;">

                    置顶头条测试                  </a>
                </p>
                              </div>

              <!-- 分类头条 -->
              <div style="margin-top:10px;float: left">
                                <p>
                  <b>
                    <span 
                        style="font-size: 12px; width: 20%; margin-top: 12px; text-align: center; display: block; float: left">

                      原料辅料:
                    </span>
                  </b>
                                   </p>
                                <p>
                  <b>
                    <span 
                        style="font-size: 12px; width: 20%; margin-top: 12px; text-align: center; display: block; float: left">

                      制冷剂:
                    </span>
                  </b>
                                     <a title="中央纪律检查委员会委员，中央和国家机关各部委、各人民团体、军队及武警部队负责人等参加会议。各省、自治区、直辖市和新疆生产建..." href="/article/show_article.php?id=4">
                    <span style="width: 80%; text-align: left; margin-top: 12px; display: block; float: left">
                      中央纪律检查委员会委员，中央和国家机关各部...                    </span>
                  </a>
                                  </p>
                                <p>
                  <b>
                    <span 
                        style="font-size: 12px; width: 20%; margin-top: 12px; text-align: center; display: block; float: left">

                      氟化盐:
                    </span>
                  </b>
                                     <a title="tttt" href="/article/show_article.php?id=10">
                    <span style="width: 80%; text-align: left; margin-top: 12px; display: block; float: left">
                      tttt                    </span>
                  </a>
                                  </p>
                                <p>
                  <b>
                    <span 
                        style="font-size: 12px; width: 20%; margin-top: 12px; text-align: center; display: block; float: left">

                      聚合物:
                    </span>
                  </b>
                                   </p>
                                <p>
                  <b>
                    <span 
                        style="font-size: 12px; width: 20%; margin-top: 12px; text-align: center; display: block; float: left">

                      政策法规:
                    </span>
                  </b>
                                   </p>
                              </div>
            </div>
          </div>

          <div id="recommendAndLogin_login">
            <form name="form1"  method="post">
              <div style="width: 200px; height:40px;">
                <p style="margin-left: 90px;">
                  <img src="/template/default/images/user_login.png" alt="user login Img" />
                </p>
              </div>

              <div id="ajx_area" style="margin-top:4px; height:100px;">
                <div style="margin-top:4px;">
                  <span style="font-size: 12px; font-weight:700">
                    帐 号：
                  </span>
                  <input type="text" id="ajax_user" name="user" style="height: 24px; width:220px;" />
                </div>

                <div style="margin-top:4px;">
                  <span style="font-size: 12px; font-weight:700">
                    密 码：
                  </span>
                  <input type="password" id="ajax_password" name="password" style="height: 24px; width:220px;" />
                </div>


                <div style="margin-left:50px; margin-top:8px; width:220px; float:center;">
                  <input type="hidden" id="ajax_lang" value="cn" name="lang" />
                  <input 
                      type="image"
                      style="border: 0; color:#000000; padding: 0; float:left;"
                      src="/template/default/images/login_bg.jpg"
                      value="登 陆"
                      name="go"
                      id="ajax_login"
                  />
                  <a href="/member/member.php?action=regist&lang=cn">
                    <img src="/template/default/images/login_index_register.png" style="border:0;float:left;"/>
                  </a>
                  <a href="#">
                    <img src="/template/default/images/login_index_forget.png" style="border:0;float:left;" />
                  </a>
                </div>
              </div>

              <div style="width: 300px; float:left; margin-top:8px;">

                <img src="/template/default/images/web_map.png" alt="map" />
                <a href="#">
                  网站地图&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
                <img src="/template/default/images/service_icon.png" alt="service" />
                <a href="#">
                  客户服务&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
                <img src="/template/default/images/ad_icon.png" alt="ads" />
                <a href="#">
                  广告服务
                </a>
              </div>
            </form>
            <div class="clear">
            </div>
          </div>
        </div>

        <!-- middle banner -->
        <div id="middleBanner">
          <img src="/template/default/images/middle_banner.jpg" alt="banner Img" />
        </div>

        <!--category article list -->
        <div id="mainContent">
          <div id="mainContent_cate">
                        <div id="mainContent_cate_list">
              <div id="mainContent_cate_list_title">
                <p>
                  <img 
                      style="margin-top: 8px; height: 16px"
                      src="/template/default/images/article_title_circle.png"
                      alt="banner Img"
                  />
                  原料辅料                  <p style="float: right; margin-right: 10px; margin-top: 7px;">
                    <a title="aa" href="/article/article.php?id=2">
                      <img src="/template/default/images/more_article.gif" style="border:0" alt="more" />
                    </a>
                  </p>
                </p>
              </div>
              <div id="mainContent_cate_list_content">
                               </div>
            </div>

                        <div id="mainContent_cate_list">
              <div id="mainContent_cate_list_title">
                <p>
                  <img 
                      style="margin-top: 8px; height: 16px"
                      src="/template/default/images/article_title_circle.png"
                      alt="banner Img"
                  />
                  制冷剂                  <p style="float: right; margin-right: 10px; margin-top: 7px;">
                    <a title="aa" href="/article/article.php?id=3">
                      <img src="/template/default/images/more_article.gif" style="border:0" alt="more" />
                    </a>
                  </p>
                </p>
              </div>
              <div id="mainContent_cate_list_content">
                                  <p>
                  <img style="display:inline;float:left;" src="/template/default/images/article_triangle_tip.png" alt="文章" />
                  <a title="中央纪律检查委员会委员，中央和国家机关各部委、各人民团体、军队及武警部队负责人等参加会议。各省、自治区、直辖市和新疆生产建..."
                      href="/article/show_article.php?id=4"
                                            >
                    中央纪律检查委员会委员，中央和国家机关各部...                  </a>
                  <span style="display:inline;float:right; margin-right: 10px">
                    14-01-20                  </span>
                </p>
                                <p>
                  <img style="display:inline;float:left;" src="/template/default/images/article_triangle_tip.png" alt="文章" />
                  <a title="置顶头条测试"
                      href="/article/show_article.php?id=1"
                                            >
                    置顶头条测试                  </a>
                  <span style="display:inline;float:right; margin-right: 10px">
                    14-01-11                  </span>
                </p>
                                <p>
                  <img style="display:inline;float:left;" src="/template/default/images/article_triangle_tip.png" alt="文章" />
                  <a title="中国好歌曲帮音乐卸下紧箍咒"
                      href="/article/show_article.php?id=9"
                                            >
                    中国好歌曲帮音乐卸下紧箍咒                  </a>
                  <span style="display:inline;float:right; margin-right: 10px">
                    14-01-14                  </span>
                </p>
                                <p>
                  <img style="display:inline;float:left;" src="/template/default/images/article_triangle_tip.png" alt="文章" />
                  <a title="崔永元以前的公众形象不错，"
                      href="/article/show_article.php?id=7"
                                            >
                    崔永元以前的公众形象不错，                  </a>
                  <span style="display:inline;float:right; margin-right: 10px">
                    14-01-14                  </span>
                </p>
                                <p>
                  <img style="display:inline;float:left;" src="/template/default/images/article_triangle_tip.png" alt="文章" />
                  <a title="阿里命门在产品，腾讯命门在封闭"
                      href="/article/show_article.php?id=5"
                                            >
                    阿里命门在产品，腾讯命门在封闭                  </a>
                  <span style="display:inline;float:right; margin-right: 10px">
                    14-01-14                  </span>
                </p>
                                <p>
                  <img style="display:inline;float:left;" src="/template/default/images/article_triangle_tip.png" alt="文章" />
                  <a title="阿里在行业里其实也没啥人心。这也是个封闭帝国，营销公司，本质就是倒流量，再高价卖给商户，年复一年收税。所以它不能接受批量倒..."
                      href="/article/show_article.php?id=6"
                                            >
                    阿里在行业里其实也没啥人心。这也是个封闭帝...                  </a>
                  <span style="display:inline;float:right; margin-right: 10px">
                    14-01-14                  </span>
                </p>
                                <p>
                  <img style="display:inline;float:left;" src="/template/default/images/article_triangle_tip.png" alt="文章" />
                  <a title="2014百度狼奔时刻，全线推手机卫士"
                      href="/article/show_article.php?id=8"
                                            >
                    2014百度狼奔时刻，全线推手机卫士                  </a>
                  <span style="display:inline;float:right; margin-right: 10px">
                    14-01-14                  </span>
                </p>
                               </div>
            </div>

                        <div id="mainContent_cate_list">
              <div id="mainContent_cate_list_title">
                <p>
                  <img 
                      style="margin-top: 8px; height: 16px"
                      src="/template/default/images/article_title_circle.png"
                      alt="banner Img"
                  />
                  氟化盐                  <p style="float: right; margin-right: 10px; margin-top: 7px;">
                    <a title="aa" href="/article/article.php?id=4">
                      <img src="/template/default/images/more_article.gif" style="border:0" alt="more" />
                    </a>
                  </p>
                </p>
              </div>
              <div id="mainContent_cate_list_content">
                                  <p>
                  <img style="display:inline;float:left;" src="/template/default/images/article_triangle_tip.png" alt="文章" />
                  <a title="头条测试1"
                      href="/article/show_article.php?id=2"
                                            >
                    头条测试1                  </a>
                  <span style="display:inline;float:right; margin-right: 10px">
                    14-01-11                  </span>
                </p>
                                <p>
                  <img style="display:inline;float:left;" src="/template/default/images/article_triangle_tip.png" alt="文章" />
                  <a title="tttt"
                      href="/article/show_article.php?id=10"
                                            >
                    tttt                  </a>
                  <span style="display:inline;float:right; margin-right: 10px">
                    14-01-20                  </span>
                </p>
                               </div>
            </div>

                        <div id="mainContent_cate_list">
              <div id="mainContent_cate_list_title">
                <p>
                  <img 
                      style="margin-top: 8px; height: 16px"
                      src="/template/default/images/article_title_circle.png"
                      alt="banner Img"
                  />
                  聚合物                  <p style="float: right; margin-right: 10px; margin-top: 7px;">
                    <a title="aa" href="/article/article.php?id=5">
                      <img src="/template/default/images/more_article.gif" style="border:0" alt="more" />
                    </a>
                  </p>
                </p>
              </div>
              <div id="mainContent_cate_list_content">
                               </div>
            </div>

                        <div id="mainContent_cate_list">
              <div id="mainContent_cate_list_title">
                <p>
                  <img 
                      style="margin-top: 8px; height: 16px"
                      src="/template/default/images/article_title_circle.png"
                      alt="banner Img"
                  />
                  政策法规                  <p style="float: right; margin-right: 10px; margin-top: 7px;">
                    <a title="aa" href="/article/article.php?id=6">
                      <img src="/template/default/images/more_article.gif" style="border:0" alt="more" />
                    </a>
                  </p>
                </p>
              </div>
              <div id="mainContent_cate_list_content">
                               </div>
            </div>

                        <div id="mainContent_cate_list">
              <div id="mainContent_cate_list_title">
                <p>
                  <img 
                      style="margin-top: 8px; height: 16px"
                      src="/template/default/images/article_title_circle.png"
                      alt="banner Img"
                  />
                  企业动向                  <p style="float: right; margin-right: 10px; margin-top: 7px;">
                    <a title="aa" href="/article/article.php?id=7">
                      <img src="/template/default/images/more_article.gif" style="border:0" alt="more" />
                    </a>
                  </p>
                </p>
              </div>
              <div id="mainContent_cate_list_content">
                                  <p>
                  <img style="display:inline;float:left;" src="/template/default/images/article_triangle_tip.png" alt="文章" />
                  <a title="vip测试"
                      href="/article/show_article.php?id=11"
                                            >
                    vip测试                  </a>
                  <span style="display:inline;float:right; margin-right: 10px">
                    14-01-20                  </span>
                </p>
                               </div>
            </div>

                        <div id="mainContent_cate_list">
              <div id="mainContent_cate_list_title">
                <p>
                  <img 
                      style="margin-top: 8px; height: 16px"
                      src="/template/default/images/article_title_circle.png"
                      alt="banner Img"
                  />
                  资料馆                  <p style="float: right; margin-right: 10px; margin-top: 7px;">
                    <a title="aa" href="/article/article.php?id=8">
                      <img src="/template/default/images/more_article.gif" style="border:0" alt="more" />
                    </a>
                  </p>
                </p>
              </div>
              <div id="mainContent_cate_list_content">
                               </div>
            </div>

                      </div>

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
</script>            </div>
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
</script>            </div>
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
</script>            </div>
          </div>
          <div class="clear">
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
