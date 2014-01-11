DROP TABLE IF EXISTS `bees_admin_group`;
CREATE TABLE `bees_admin_group` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `admin_group_name` varchar(60) NOT NULL,
  `admin_group_info` varchar(255) DEFAULT NULL,
  `admin_group_purview` text COMMENT '分组权限-字符串以,分割',
  `is_disable` mediumint(8) NOT NULL DEFAULT '0' COMMENT '是否禁用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
INSERT INTO `bees_admin_group` VALUES('1','超级管理员','可以管理后台所有功能，没有任何限制','all_purview','0');
INSERT INTO `bees_admin_group` VALUES('2','信息发布员 ','发布信息内容的管理员','content_create,content_edit','0');
DROP TABLE IF EXISTS `bees_alone`;
CREATE TABLE `bees_alone` (
  `id` mediumint(8) NOT NULL,
  `content` text,
  `pics` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `bees_alone` VALUES('17','<div class=\"arc_body\">\r\n	<div class=\"us\">\r\n		<p>\r\n			本系统是一个基于PHP+Mysql架构的企业网站管理系统。 采用模块化方式开发，功能强大灵活易于扩展。</p>\r\n		<p>\r\n			<br />\r\n			</div>\r\n</div>\r\n','22,21,20,18');

INSERT INTO `bees_article` VALUES('3','<p>系统中的输出设置功能需要在动态页面访问下才能获取模板中的配置位置。操作流程如下：</p>\r\n<p><span style=\"color: rgb(0, 0, 255);\">1、安装完程序后，动态访问首页或其它页面</span></p>\r\n<p>该过程程序会自动获取模板中使用了输出功能的标签（通过tpl_id标签属性获取）。</p>\r\n<p><span style=\"color: rgb(0, 0, 255);\">2、进入后台输出设置就可以配置相关位置</span></p>\r\n<p>当动态访问网站后在输出设置地方就会列出可以配置的模板位置，根据标签的不同配置的内容也不同，有内容列表配置、标示内容配置、表单配置。</p>\r\n<p><span style=\"color: rgb(255, 0, 0);\"><strong>注意事项：</strong></span></p>\r\n<p><span style=\"color: rgb(255, 0, 0);\">在开启html静态生成功能下不会生成配置列表，需要动态访问后生成</span></p>\r\n<p><span style=\"color: rgb(255, 0, 0);\">更换模板的时候会清空以前模板的配置<br />\r\n</span></p>\r\n<p><span style=\"color: rgb(255, 0, 0);\">更换模板后要动态访问下网站重新生成配置，生成配置后再开启html功能。<br />\r\n</span></p>\r\n<p><span style=\"color: rgb(255, 0, 0);\">修改模板输出配置标签要动态访问后再开启html功能</span></p>');

DROP TABLE IF EXISTS `bees_category`;
CREATE TABLE `bees_category` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `custom_url` varchar(255) DEFAULT NULL,
  `cate_name` varchar(60) NOT NULL,
  `cate_mb_is` mediumint(8) NOT NULL,
  `cate_hide` mediumint(8) NOT NULL,
  `cate_channel` mediumint(8) NOT NULL,
  `cate_fold_name` varchar(60) NOT NULL,
  `cate_order` mediumint(8) NOT NULL,
  `cate_rank` mediumint(8) DEFAULT '0',
  `cate_tpl` mediumint(8) NOT NULL,
  `cate_tpl_index` varchar(60) DEFAULT NULL,
  `cate_tpl_list` varchar(60) DEFAULT NULL,
  `cate_tpl_content` varchar(60) DEFAULT NULL,
  `cate_title_seo` varchar(60) DEFAULT NULL,
  `cate_key_seo` varchar(60) DEFAULT NULL,
  `cate_info_seo` varchar(350) DEFAULT NULL,
  `lang` varchar(60) NOT NULL,
  `cate_parent` mediumint(8) NOT NULL,
  `cate_html` mediumint(8) NOT NULL DEFAULT '0',
  `cate_nav` varchar(60) NOT NULL DEFAULT '0',
  `is_content` mediumint(8) DEFAULT '0',
  `cate_url` varchar(60) DEFAULT NULL,
  `cate_is_open` mediumint(8) NOT NULL DEFAULT '0',
  `form_id` mediumint(8) DEFAULT NULL,
  `cate_pic1` varchar(255) DEFAULT NULL,
  `cate_pic2` varchar(255) DEFAULT NULL,
  `cate_pic3` varchar(255) DEFAULT NULL,
  `cate_content` text,
  `temp_id` mediumint(8) DEFAULT NULL,
  `list_num` mediumint(8) NOT NULL DEFAULT '20',
  `nav_show` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
INSERT INTO `bees_category` 
VALUES('1','','产品价格','0','0','2','cpprice','0','0','0','','list_alone.html','alone_content.html','','','','cn','0','1','2','0','http://','0','0','','','','','2','20','0');
INSERT INTO `bees_category` 
VALUES('2','','原料辅料','0','0','2','ylfl','1','0','0','','list_article.html','article_content.html','','','','cn','0','1','2','0','http://','0','0','','','','','2','20','0');
INSERT INTO `bees_category` 
VALUES('3','','制冷剂','0','0','2','zhilengji','2','0','0','','list_article.html','article_content.html','','','','cn','0','1','2','0','http://','0','0','','','','','2','20','0');
INSERT INTO `bees_category` 
VALUES('4','','氟化盐','0','0','2','fuhuayan','3','0','0','','list_article.html','article_content.html','','','','cn','0','1','2','0','http://','0','0','','','','','2','20','0');
INSERT INTO `bees_category` 
VALUES('5','','聚合物','0','0','2','juhewu','4','0','0','','list_article.html','article_content.html','','','','cn','0','1','2','0','http://','0','0','','','','','2','20','0');
INSERT INTO `bees_category` 
VALUES('6','','政策法规','0','0','2','zcfg','5','0','0','','list_article.html','article_content.html','','','','cn','0','1','2','0','http://','0','0','','','','','2','20','0');
INSERT INTO `bees_category` 
VALUES('7','','企业动向','0','0','2','qydx','6','0','0','','list_article.html','article_content.html','','','','cn','0','1','2','0','http://','0','0','','','','','2','20','0');
INSERT INTO `bees_category` 
VALUES('8','','资料馆','0','0','2','zlguan','7','0','0','','list_article.html','article_content.html','','','','cn','0','1','2','0','http://','0','0','','','','','2','20','0');
DROP TABLE IF EXISTS `bees_channel`;
CREATE TABLE `bees_channel` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `channel_name` varchar(60) NOT NULL,
  `channel_mark` varchar(60) NOT NULL,
  `channel_table` varchar(60) NOT NULL,
  `is_disable` mediumint(8) NOT NULL,
  `is_member` mediumint(8) DEFAULT NULL,
  `channel_mb_grade` mediumint(8) DEFAULT '0',
  `is_verify` mediumint(8) NOT NULL COMMENT '发布内容是否审核',
  `is_del` mediumint(8) NOT NULL DEFAULT '0',
  `channel_order` mediumint(8) NOT NULL DEFAULT '10',
  `is_alone` mediumint(8) NOT NULL DEFAULT '0',
  `list_php` varchar(150) DEFAULT NULL,
  `content_php` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
INSERT INTO `bees_channel` VALUES('1','单页模型','alone','alone','0','0','2','0','1','5','1','alone/alone.php','alone/show_alone.php');
INSERT INTO `bees_channel` VALUES('2','文章模块','article','article','0','0','2','0','0','1','0','article/article.php','article/show_article.php');
VALUES('2','工作模块','article','article','0','0','2','0','0','1','0','job/job.php','job/show_job.php');
DROP TABLE IF EXISTS `bees_flash_ad`;
CREATE TABLE `bees_flash_ad` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `pic` varchar(255) DEFAULT NULL,
  `pic_url` varchar(255) DEFAULT NULL,
  `pic_text` varchar(255) DEFAULT NULL,
  `pic_order` mediumint(8) NOT NULL DEFAULT '10',
  `lang` varchar(60) CHARACTER SET latin1 NOT NULL,
  `cate_id` mediumint(8) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
INSERT INTO `bees_flash_ad` VALUES('1','img/20110625/201106251133539086.gif','http://www.beescms.com','','1','cn','1');
INSERT INTO `bees_flash_ad` VALUES('2','img/20110625/201106251134131106.gif','http://www.beescms.com','','10','cn','1');
INSERT INTO `bees_flash_ad` VALUES('3','img/20121208/201212082315546094.gif','http://www.beescms.com','','1','en','1');
INSERT INTO `bees_flash_ad` VALUES('4','img/20121208/201212082315531698.gif','http://www.beescms.com','','2','en','1');
DROP TABLE IF EXISTS `bees_flash_ad_cate`;
CREATE TABLE `bees_flash_ad_cate` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(60) NOT NULL,
  `cate_tpl_id` mediumint(8) DEFAULT '0',
  `is_disable` mediumint(8) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
INSERT INTO `bees_flash_ad_cate` VALUES('1','默认','0','1');
DROP TABLE IF EXISTS `bees_flash_info`;
CREATE TABLE `bees_flash_info` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `flash_width` varchar(60) DEFAULT NULL,
  `flash_height` varchar(60) DEFAULT NULL,
  `flash_style` mediumint(8) NOT NULL,
  `lang` varchar(60) NOT NULL,
  `cate_id` mediumint(8) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `bees_form`;
CREATE TABLE `bees_form` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `form_name` varchar(60) NOT NULL,
  `form_mark` varchar(60) NOT NULL,
  `is_disable` mediumint(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `bees_formfield`;
CREATE TABLE `bees_formfield` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `field_name` varchar(60) NOT NULL,
  `use_name` varchar(60) NOT NULL,
  `field_type` varchar(60) NOT NULL,
  `field_value` varchar(255) NOT NULL,
  `field_length` mediumint(8) NOT NULL,
  `form_id` mediumint(8) NOT NULL,
  `field_info` varchar(60) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `is_disable` mediumint(8) NOT NULL,
  `form_order` mediumint(8) NOT NULL DEFAULT '0',
  `is_empty` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
INSERT INTO `bees_formfield` VALUES('9','username','姓名','text','','255','5','','0','1','0');
INSERT INTO `bees_formfield` VALUES('32','web_contact','QQ/MSN/旺旺','text','','255','5','','0','4','0');
INSERT INTO `bees_formfield` VALUES('17','address','公司地址','text','','255','5','','0','5','0');
INSERT INTO `bees_formfield` VALUES('12','mail','邮箱','text','','255','5','','0','2','1');
INSERT INTO `bees_formfield` VALUES('13','tel','电话/传真','text','','255','5','','0','3','0');
INSERT INTO `bees_formfield` VALUES('14','content','详细内容','textarea','','255','5','','0','6','0');
INSERT INTO `bees_formfield` VALUES('19','jobname','姓名','text','','255','8','','0','1','0');
INSERT INTO `bees_formfield` VALUES('20','jobsex','性别','select','男\r\n女','255','8','','0','2','0');
INSERT INTO `bees_formfield` VALUES('21','jobmoth','出生年月','text','','255','8','','0','3','0');
INSERT INTO `bees_formfield` VALUES('22','jobjg','籍贯','text','','255','8','','0','4','0');
INSERT INTO `bees_formfield` VALUES('23','jobxl','学历','text','','255','8','','0','5','0');
INSERT INTO `bees_formfield` VALUES('24','jobzy','专业','text','','255','8','','0','6','0');
INSERT INTO `bees_formfield` VALUES('25','jobbyyx','毕业院校','text','','255','8','','0','7','0');
INSERT INTO `bees_formfield` VALUES('26','jobphone','联系电话','text','','255','8','','0','8','0');
INSERT INTO `bees_formfield` VALUES('27','jobmail','E–mail','text','','255','8','','0','9','0');
INSERT INTO `bees_formfield` VALUES('28','jobhj','所获奖项','textarea','','255','8','','0','10','0');
INSERT INTO `bees_formfield` VALUES('29','jobgzjl','工作经历','textarea','','255','8','','0','11','0');
INSERT INTO `bees_formfield` VALUES('30','jobzyjn','专业技能','textarea','','255','8','','0','12','0');
INSERT INTO `bees_formfield` VALUES('31','jobyyah','业余爱好','textarea','','255','8','','0','13','0');
DROP TABLE IF EXISTS `bees_formlist`;
CREATE TABLE `bees_formlist` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `form_id` mediumint(8) DEFAULT NULL,
  `form_time` varchar(60) DEFAULT NULL,
  `form_ip` varchar(60) DEFAULT NULL,
  `is_read` mediumint(8) NOT NULL DEFAULT '0',
  `member_id` mediumint(8) DEFAULT '0',
  `arc_id` mediumint(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `bees_job`;
CREATE TABLE `bees_job` (
  `id` mediumint(8) NOT NULL,
  `jobnum` varchar(255) DEFAULT NULL,
  `jopaddress` varchar(255) DEFAULT NULL,
  `joblasttime` varchar(255) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `bees_keywords`;
CREATE TABLE `bees_keywords` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `keywords` varchar(60) NOT NULL,
  `wordsurl` varchar(60) NOT NULL,
  `lang` varchar(60) CHARACTER SET ucs2 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `bees_lang`;
CREATE TABLE `bees_lang` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(60) NOT NULL,
  `lang_order` mediumint(8) NOT NULL,
  `lang_tag` varchar(60) NOT NULL,
  `lang_is_use` mediumint(8) NOT NULL DEFAULT '1',
  `lang_is_open` mediumint(8) NOT NULL,
  `lang_is_url` mediumint(8) NOT NULL,
  `lang_url` varchar(60) DEFAULT NULL,
  `lang_is_fix` mediumint(8) NOT NULL DEFAULT '0',
  `lang_main` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
INSERT INTO `bees_lang` VALUES('10','English','9','en','1','0','0','http://','0','0');
INSERT INTO `bees_lang` VALUES('9','简体中文','10','cn','1','0','0','http://','1','1');
DROP TABLE IF EXISTS `bees_lang_cate`;
CREATE TABLE `bees_lang_cate` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `lang_cate` varchar(60) NOT NULL,
  `lang_info` text,
  `lang` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
INSERT INTO `bees_lang_cate` VALUES('1','模板语言','模板中使用到的语言，如栏目名等','cn');
INSERT INTO `bees_lang_cate` VALUES('2','全局语言','程序中使用的语言，为了程序运行正常，请勿删除','cn');
INSERT INTO `bees_lang_cate` VALUES('3','信息提示','前台一些反馈信息','cn');
INSERT INTO `bees_lang_cate` VALUES('4','会员中心','会员中心使用的导航等语言','cn');
INSERT INTO `bees_lang_cate` VALUES('18','会员中心','会员中心使用的导航等语言','en');
INSERT INTO `bees_lang_cate` VALUES('17','信息提示','前台一些反馈信息','en');
INSERT INTO `bees_lang_cate` VALUES('16','全局语言','程序中使用的语言，为了程序运行正常，请勿删除','en');
INSERT INTO `bees_lang_cate` VALUES('15','模板语言','模板中使用到的语言，如栏目名等','en');
DROP TABLE IF EXISTS `bees_lang_lang`;
CREATE TABLE `bees_lang_lang` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `lang_tag` varchar(60) NOT NULL,
  `lang_value` varchar(240) DEFAULT NULL,
  `lang` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=452 DEFAULT CHARSET=utf8;
INSERT INTO `bees_lang_lang` VALUES('5','pages','共','cn');
INSERT INTO `bees_lang_lang` VALUES('6','pagesize','条记录','cn');
INSERT INTO `bees_lang_lang` VALUES('7','page','当前第','cn');
INSERT INTO `bees_lang_lang` VALUES('8','pagehome','首页','cn');
INSERT INTO `bees_lang_lang` VALUES('9','pageend','尾页','cn');
INSERT INTO `bees_lang_lang` VALUES('10','pagapre','上一页','cn');
INSERT INTO `bees_lang_lang` VALUES('11','pagenext','下一页','cn');
INSERT INTO `bees_lang_lang` VALUES('12','pagego','转到','cn');
INSERT INTO `bees_lang_lang` VALUES('13','previous','上一条','cn');
INSERT INTO `bees_lang_lang` VALUES('14','next','下一条','cn');
INSERT INTO `bees_lang_lang` VALUES('15','nonestr','没有了','cn');
INSERT INTO `bees_lang_lang` VALUES('17','sitemap','网站地图','cn');
INSERT INTO `bees_lang_lang` VALUES('384','order_msg4','表单已经处理，我们会及时和你联系！','cn');
INSERT INTO `bees_lang_lang` VALUES('382','order_msg3','发生错误,该表单已经停止使用,不能添加表单信息','cn');
INSERT INTO `bees_lang_lang` VALUES('380','order_msg2','表单不能为空','cn');
INSERT INTO `bees_lang_lang` VALUES('376','index','首页','cn');
INSERT INTO `bees_lang_lang` VALUES('377','book','留言本','cn');
INSERT INTO `bees_lang_lang` VALUES('378','order_msg1','发生错误，无法处理该表单，清重新操作！','cn');
INSERT INTO `bees_lang_lang` VALUES('84','member_msg','请先登录','cn');
INSERT INTO `bees_lang_lang` VALUES('85','member_msg2','验证码不正确','cn');
INSERT INTO `bees_lang_lang` VALUES('86','member_smg3','用户名或密码不能为空','cn');
INSERT INTO `bees_lang_lang` VALUES('87','member_msg3','用户名名或密码不正确','cn');
INSERT INTO `bees_lang_lang` VALUES('88','member_msg4','登录失败,该账号已被锁定','cn');
INSERT INTO `bees_lang_lang` VALUES('89','member_msg5','会员注册已经暂停','cn');
INSERT INTO `bees_lang_lang` VALUES('90','member_msg6','用户名只能是字母数字，4以上长度','cn');
INSERT INTO `bees_lang_lang` VALUES('91','member_msg7','昵称只能是字母数字，4以上长度','cn');
INSERT INTO `bees_lang_lang` VALUES('92','member_msg8','密码不能为空','cn');
INSERT INTO `bees_lang_lang` VALUES('93','member_msg9','两次密码不一样','cn');
INSERT INTO `bees_lang_lang` VALUES('94','member_msg10','邮箱不正确','cn');
INSERT INTO `bees_lang_lang` VALUES('95','member_msg11','该用户名不能注册','cn');
INSERT INTO `bees_lang_lang` VALUES('96','member_msg12','已经存在相同的用户名，请更换用户名','cn');
INSERT INTO `bees_lang_lang` VALUES('97','member_msg13','该邮箱已经被使用,请更换','cn');
INSERT INTO `bees_lang_lang` VALUES('98','member_msg14','用户注册成功','cn');
INSERT INTO `bees_lang_lang` VALUES('99','msg_info','不存在flash引导页模板','cn');
INSERT INTO `bees_lang_lang` VALUES('100','msg_info2','不存在【@】语言首页模板','cn');
INSERT INTO `bees_lang_lang` VALUES('101','msg_info3','找不到【@】语言模板文件','cn');
INSERT INTO `bees_lang_lang` VALUES('102','msg_info4','请先生成【@】语言首页','cn');
INSERT INTO `bees_lang_lang` VALUES('103','msg_info5','请先更新栏目缓存','cn');
INSERT INTO `bees_lang_lang` VALUES('104','msg_info6','请先更新频道缓存','cn');
INSERT INTO `bees_lang_lang` VALUES('105','msg_info7','你当前的会员权限不能浏览','cn');
INSERT INTO `bees_lang_lang` VALUES('106','msg_info8','该内容未审核,还不能浏览','cn');
INSERT INTO `bees_lang_lang` VALUES('107','msg_info9','还没有添加内容','cn');
INSERT INTO `bees_lang_lang` VALUES('422','msg_info4','Please generate【@】Language Home','en');
INSERT INTO `bees_lang_lang` VALUES('421','msg_info3','Unable to find【@】language template file','en');
INSERT INTO `bees_lang_lang` VALUES('420','msg_info2','Does not exist【@】Language Home template','en');
INSERT INTO `bees_lang_lang` VALUES('419','msg_info','Not flash boot Pages template','en');
INSERT INTO `bees_lang_lang` VALUES('418','member_msg14','Register success','en');
INSERT INTO `bees_lang_lang` VALUES('417','member_msg13','he mailbox is already in use, replace','en');
INSERT INTO `bees_lang_lang` VALUES('439','member_msg25','Deleted successfully','en');
INSERT INTO `bees_lang_lang` VALUES('438','member_msg24','Advisory modified successfully','en');
INSERT INTO `bees_lang_lang` VALUES('437','member_msg23','The content can not be empty','en');
INSERT INTO `bees_lang_lang` VALUES('436','member_msg22','The consultation has been processed, please re-add','en');
INSERT INTO `bees_lang_lang` VALUES('435','member_msg21','The consultation does not exist','en');
INSERT INTO `bees_lang_lang` VALUES('434','member_msg20','Consulting successfully added','en');
INSERT INTO `bees_lang_lang` VALUES('433','member_msg19','Title or content can not be empty','en');
INSERT INTO `bees_lang_lang` VALUES('432','msg_info10','Parameter passing errors','en');
INSERT INTO `bees_lang_lang` VALUES('431','member_msg18','Modified successfully','en');
INSERT INTO `bees_lang_lang` VALUES('430','member_msg17','From form submission','en');
INSERT INTO `bees_lang_lang` VALUES('429','member_msg16','Phone must be numeric','en');
INSERT INTO `bees_lang_lang` VALUES('428','member_msg15','QQ number is incorrect','en');
INSERT INTO `bees_lang_lang` VALUES('427','msg_info9','Has not yet added content','en');
INSERT INTO `bees_lang_lang` VALUES('426','msg_info8','The content is not audited, but also can not browse','en');
INSERT INTO `bees_lang_lang` VALUES('425','msg_info7','Your current membership privileges can not browse','en');
INSERT INTO `bees_lang_lang` VALUES('424','msg_info6','Please update the channel cache','en');
INSERT INTO `bees_lang_lang` VALUES('423','msg_info5','Please update section cache','en');
INSERT INTO `bees_lang_lang` VALUES('416','member_msg12','The same user name already exists, replace the user name','en');
INSERT INTO `bees_lang_lang` VALUES('415','member_msg11','The user name can not be registered','en');
INSERT INTO `bees_lang_lang` VALUES('414','member_msg10','E-mail is incorrect','en');
INSERT INTO `bees_lang_lang` VALUES('413','member_msg9','Not the same password twice','en');
INSERT INTO `bees_lang_lang` VALUES('412','member_msg8','Password can not be empty','en');
INSERT INTO `bees_lang_lang` VALUES('411','member_msg7','The nickname can only contain alphanumeric, length of 4 or more','en');
INSERT INTO `bees_lang_lang` VALUES('410','member_msg6','The user name can only be alphanumeric longer than 4','en');
INSERT INTO `bees_lang_lang` VALUES('409','member_msg5','Member registration has been suspended','en');
INSERT INTO `bees_lang_lang` VALUES('408','member_msg4','Login failed, the account has been locked','en');
INSERT INTO `bees_lang_lang` VALUES('266','member_msg15','QQ号码不正确','cn');
INSERT INTO `bees_lang_lang` VALUES('267','member_msg16','手机必须为数字','cn');
INSERT INTO `bees_lang_lang` VALUES('268','member_msg17','请从表单提交','cn');
INSERT INTO `bees_lang_lang` VALUES('269','member_msg18','修改成功','cn');
INSERT INTO `bees_lang_lang` VALUES('407','member_msg3','Username name or password is incorrect','en');
INSERT INTO `bees_lang_lang` VALUES('406','member_smg3','User name or password can not be empty','en');
INSERT INTO `bees_lang_lang` VALUES('274','msg_info10','参数传递错误,请重新操作','cn');
INSERT INTO `bees_lang_lang` VALUES('276','member_msg19','标题或内容不能为空','cn');
INSERT INTO `bees_lang_lang` VALUES('277','member_msg20','咨询添加成功','cn');
INSERT INTO `bees_lang_lang` VALUES('278','member_msg21','不存在该咨询','cn');
INSERT INTO `bees_lang_lang` VALUES('279','member_msg22','咨询已经处理,请重新添加','cn');
INSERT INTO `bees_lang_lang` VALUES('280','member_msg23','内容不能为空','cn');
INSERT INTO `bees_lang_lang` VALUES('281','member_msg24','咨询修改成功','cn');
INSERT INTO `bees_lang_lang` VALUES('282','member_msg25','删除成功','cn');
INSERT INTO `bees_lang_lang` VALUES('283','member_msg26','原始密码不正确','cn');
INSERT INTO `bees_lang_lang` VALUES('284','member_msg27','已经退出','cn');
INSERT INTO `bees_lang_lang` VALUES('449','member_msg28','User Center','en');
INSERT INTO `bees_lang_lang` VALUES('450','member_out','退出登陆','cn');
INSERT INTO `bees_lang_lang` VALUES('451','member_out','Logout','en');
INSERT INTO `bees_lang_lang` VALUES('447','member_wel','Welcome back!','en');
INSERT INTO `bees_lang_lang` VALUES('448','member_msg28','用户中心','cn');
INSERT INTO `bees_lang_lang` VALUES('445','book_msg4','Successfully added','en');
INSERT INTO `bees_lang_lang` VALUES('444','book_msg3','The message can not be empty','en');
INSERT INTO `bees_lang_lang` VALUES('443','book_msg2','Message title can not be empty','en');
INSERT INTO `bees_lang_lang` VALUES('442','book_msg1','The Guestbook can not use','en');
INSERT INTO `bees_lang_lang` VALUES('441','member_msg27','Has withdrawn from the','en');
INSERT INTO `bees_lang_lang` VALUES('440','member_msg26','Original password is incorrect','en');
INSERT INTO `bees_lang_lang` VALUES('386','pages','Common','en');
INSERT INTO `bees_lang_lang` VALUES('387','pagesize','Records','en');
INSERT INTO `bees_lang_lang` VALUES('388','page','Current','en');
INSERT INTO `bees_lang_lang` VALUES('389','pagehome','Home','en');
INSERT INTO `bees_lang_lang` VALUES('390','pageend','Last','en');
INSERT INTO `bees_lang_lang` VALUES('391','pagapre','Previous','en');
INSERT INTO `bees_lang_lang` VALUES('392','pagenext','Next','en');
INSERT INTO `bees_lang_lang` VALUES('393','pagego','Go to','en');
INSERT INTO `bees_lang_lang` VALUES('405','member_msg2','Incorrect verification code','en');
INSERT INTO `bees_lang_lang` VALUES('404','member_msg','Please login','en');
INSERT INTO `bees_lang_lang` VALUES('350','book_msg1','留言本不能使用','cn');
INSERT INTO `bees_lang_lang` VALUES('351','book_msg2','留言标题不能为空','cn');
INSERT INTO `bees_lang_lang` VALUES('352','book_msg3','留言内容不能为空','cn');
INSERT INTO `bees_lang_lang` VALUES('353','book_msg4','添加成功','cn');
INSERT INTO `bees_lang_lang` VALUES('403','order_msg1','An error occurs, can not process the form, clear!','en');
INSERT INTO `bees_lang_lang` VALUES('402','book','Guestbook','en');
INSERT INTO `bees_lang_lang` VALUES('401','index','Home','en');
INSERT INTO `bees_lang_lang` VALUES('400','order_msg2','The form can not be empty','en');
INSERT INTO `bees_lang_lang` VALUES('399','order_msg3','An error occurs, the form has to stop using, you can not add form','en');
INSERT INTO `bees_lang_lang` VALUES('398','order_msg4','The form has been processed, we will promptly contact you!','en');
INSERT INTO `bees_lang_lang` VALUES('397','sitemap','Site Map','en');
INSERT INTO `bees_lang_lang` VALUES('396','nonestr','No','en');
INSERT INTO `bees_lang_lang` VALUES('395','next','Next','en');
INSERT INTO `bees_lang_lang` VALUES('446','member_wel','欢迎你回来!','cn');
INSERT INTO `bees_lang_lang` VALUES('394','previous','Previous','en');
DROP TABLE IF EXISTS `bees_member_group`;
CREATE TABLE `bees_member_group` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `member_group_name` varchar(60) NOT NULL,
  `member_group_info` varchar(255) NOT NULL,
  `is_disable` mediumint(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
INSERT INTO `bees_member_group` VALUES('1','注册会员','注册完成的所有会员都是这个级别','0');
INSERT INTO `bees_member_group` VALUES('2','VIP会员','注册会员通过管理后台升级的级别','0');
DROP TABLE IF EXISTS `bees_mx_form`;
CREATE TABLE `bees_mx_form` (
  `id` mediumint(8) NOT NULL,
  `form_id` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `bees_prinfo`;
CREATE TABLE `bees_prinfo` (
  `id` mediumint(8) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `web_contact` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `bees_product`;
CREATE TABLE `bees_product` (
  `id` mediumint(8) NOT NULL,
  `model` varchar(255) DEFAULT NULL,
  `pics` varchar(255) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `bees_upfiles`;
CREATE TABLE `bees_upfiles` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `file_info` varchar(255) DEFAULT NULL,
  `file_ext` varchar(255) DEFAULT NULL,
  `file_size` mediumint(8) DEFAULT '0',
  `file_path` varchar(255) DEFAULT NULL,
  `file_time` varchar(255) DEFAULT NULL,
  `hits` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `bees_uppic_cate`;
CREATE TABLE `bees_uppic_cate` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
INSERT INTO `bees_uppic_cate` VALUES('1','产品图片');
INSERT INTO `bees_uppic_cate` VALUES('2','下载图片');
INSERT INTO `bees_uppic_cate` VALUES('3','其它图片');
DROP TABLE IF EXISTS `bees_uppics`;
CREATE TABLE `bees_uppics` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `pic_name` varchar(60) NOT NULL COMMENT '图片名称',
  `pic_url` varchar(255) DEFAULT NULL COMMENT '外部链接',
  `pic_ext` varchar(60) NOT NULL COMMENT '图片后缀',
  `pic_alt` varchar(255) DEFAULT NULL COMMENT '图片alt',
  `pic_size` varchar(60) DEFAULT NULL,
  `pic_path` varchar(60) DEFAULT NULL COMMENT '图片路径',
  `pic_time` varchar(60) DEFAULT NULL COMMENT '图片上传修改时间',
  `pic_thumb` varchar(60) DEFAULT NULL COMMENT '缩略图',
  `pic_cate` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
INSERT INTO `bees_uppics` VALUES('1','201106251457435418','','jpg','','91718','upload/img/20110625/','1308985063','img/20110625/201106251457435418_thumb.jpeg','0');
INSERT INTO `bees_uppics` VALUES('23','201212102144457490','','gif','','4133','upload/img/20121210/','1355147085','img/20121210/201212102144457490_thumb.gif','3');
DROP TABLE IF EXISTS `bees_webjob`;
CREATE TABLE `bees_webjob` (
  `id` mediumint(8) NOT NULL,
  `jobname` varchar(255) DEFAULT NULL,
  `jobsex` varchar(255) DEFAULT NULL,
  `jobmoth` varchar(255) DEFAULT NULL,
  `jobjg` varchar(255) DEFAULT NULL,
  `jobxl` varchar(255) DEFAULT NULL,
  `jobzy` varchar(255) DEFAULT NULL,
  `jobbyyx` varchar(255) DEFAULT NULL,
  `jobphone` varchar(255) DEFAULT NULL,
  `jobmail` varchar(255) DEFAULT NULL,
  `jobhj` varchar(255) DEFAULT NULL,
  `jobgzjl` varchar(255) DEFAULT NULL,
  `jobzyjn` varchar(255) DEFAULT NULL,
  `jobyyah` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
