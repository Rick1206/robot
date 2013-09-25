DROP TABLE IF EXISTS `rb_access`;
CREATE TABLE `rb_access` (
  `role_id` int(10) unsigned NOT NULL,
  `node_id` int(10) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `pid` int(10) NOT NULL,
  `module` varchar(50) NOT NULL DEFAULT '',
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `rb_access` VALUES ('1','1','1','0','');
INSERT INTO `rb_access` VALUES ('1','7','3','6','');
INSERT INTO `rb_access` VALUES ('1','15','3','5','');
INSERT INTO `rb_access` VALUES ('1','14','3','5','');
INSERT INTO `rb_access` VALUES ('1','13','3','5','');
INSERT INTO `rb_access` VALUES ('1','12','3','5','');
INSERT INTO `rb_access` VALUES ('1','11','3','5','');
INSERT INTO `rb_access` VALUES ('1','10','3','5','');
INSERT INTO `rb_access` VALUES ('1','9','3','5','');
INSERT INTO `rb_access` VALUES ('1','8','3','5','');
INSERT INTO `rb_access` VALUES ('148','1','1','0','');
INSERT INTO `rb_access` VALUES ('148','5','2','1','');
INSERT INTO `rb_access` VALUES ('148','6','2','1','');
INSERT INTO `rb_access` VALUES ('148','30','2','1','');
INSERT INTO `rb_access` VALUES ('148','7','3','6','');
INSERT INTO `rb_access` VALUES ('148','8','3','5','');
INSERT INTO `rb_access` VALUES ('148','9','3','5','');
INSERT INTO `rb_access` VALUES ('148','10','3','5','');
INSERT INTO `rb_access` VALUES ('148','11','3','5','');
INSERT INTO `rb_access` VALUES ('148','12','3','5','');
INSERT INTO `rb_access` VALUES ('148','13','3','5','');
INSERT INTO `rb_access` VALUES ('148','14','3','5','');
INSERT INTO `rb_access` VALUES ('148','15','3','5','');
INSERT INTO `rb_access` VALUES ('149','1','1','0','');
INSERT INTO `rb_access` VALUES ('149','5','2','1','');
INSERT INTO `rb_access` VALUES ('149','6','2','1','');
INSERT INTO `rb_access` VALUES ('149','30','2','1','');
INSERT INTO `rb_access` VALUES ('149','7','3','6','');
INSERT INTO `rb_access` VALUES ('149','8','3','5','');
INSERT INTO `rb_access` VALUES ('149','9','3','5','');
INSERT INTO `rb_access` VALUES ('149','10','3','5','');
INSERT INTO `rb_access` VALUES ('149','11','3','5','');
INSERT INTO `rb_access` VALUES ('149','12','3','5','');
INSERT INTO `rb_access` VALUES ('149','13','3','5','');
INSERT INTO `rb_access` VALUES ('149','14','3','5','');
INSERT INTO `rb_access` VALUES ('149','15','3','5','');
INSERT INTO `rb_access` VALUES ('157','1','1','0','');
INSERT INTO `rb_access` VALUES ('157','5','2','1','');
INSERT INTO `rb_access` VALUES ('157','6','2','1','');
INSERT INTO `rb_access` VALUES ('157','30','2','1','');
INSERT INTO `rb_access` VALUES ('157','7','3','6','');
INSERT INTO `rb_access` VALUES ('157','8','3','5','');
INSERT INTO `rb_access` VALUES ('157','9','3','5','');
INSERT INTO `rb_access` VALUES ('157','10','3','5','');
INSERT INTO `rb_access` VALUES ('157','11','3','5','');
INSERT INTO `rb_access` VALUES ('157','12','3','5','');
INSERT INTO `rb_access` VALUES ('157','13','3','5','');
INSERT INTO `rb_access` VALUES ('157','14','3','5','');
INSERT INTO `rb_access` VALUES ('157','15','3','5','');
INSERT INTO `rb_access` VALUES ('1','81','3','5','');
INSERT INTO `rb_access` VALUES ('1','80','3','5','');
INSERT INTO `rb_access` VALUES ('1','109','2','1','');
INSERT INTO `rb_access` VALUES ('1','6','2','1','');
INSERT INTO `rb_access` VALUES ('1','5','2','1','');
DROP TABLE IF EXISTS `rb_article`;
CREATE TABLE `rb_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `tid` varchar(50) NOT NULL COMMENT '所属分类',
  `title` varchar(100) NOT NULL COMMENT '文章标题',
  `isb` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否加粗',
  `isi` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否斜体',
  `tcolor` char(10) DEFAULT NULL COMMENT '标题颜色',
  `keywords` varchar(100) DEFAULT NULL COMMENT '关键字',
  `description` varchar(200) DEFAULT NULL COMMENT '描述',
  `img` varchar(100) DEFAULT NULL COMMENT '预览图片',
  `content` longtext NOT NULL COMMENT '内容',
  `add_time` int(10) NOT NULL COMMENT '录入时间',
  `update_time` int(10) NOT NULL COMMENT '修改时间',
  `adder_id` int(10) NOT NULL COMMENT '录入人',
  `sort` smallint(5) NOT NULL DEFAULT '0' COMMENT '排序值',
  `apv` smallint(5) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `rewrite` varchar(50) DEFAULT NULL COMMENT 'URL重写值',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态 1:启用,0:禁用',
  `template` varchar(50) DEFAULT NULL COMMENT '使用模板',
  `attrtj` varchar(30) DEFAULT NULL COMMENT '推荐属性',
  `attrtt` varchar(30) DEFAULT NULL COMMENT '头条属性',
  `outurl` varchar(150) DEFAULT NULL COMMENT '外部网址',
  PRIMARY KEY (`id`),
  KEY `tid` (`tid`),
  KEY `title` (`title`),
  FULLTEXT KEY `content` (`content`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;
INSERT INTO `rb_article` VALUES ('53','268','CMSHead V2.1版本亮点功能介绍及下载地址','0','0','','','','','','1364739811','1364740318','1','0','0','article53','1','','1,2,3','1,2,3','__ROOT__/CMSHead21.html');
INSERT INTO `rb_article` VALUES ('75','287','会说话的机器人 帮助孩子减轻在医院的痛苦','0','0','','','把机器人放在眼睛里做医疗手术可能是下一个创新趋势，苏黎世的研究人员正在建立微型机器人用来帮助精致的手术，机器人有一个可伸缩的针来探测身体部位（眼睛），针的直径只有4分之一毫米','','<span style=\"color: rgb(84, 84, 84); font-family: SimSun; line-height: 18px; -webkit-text-size-adjust: none;\">把机器人放在眼睛里做医疗手术可能是下一个创新趋势，苏黎世的研究人员正在建立微型机器人用来帮助精致的手术，机器人有一个可伸缩的针来探测身体部位（眼睛），针的直径只有4分之一毫米</span>','1380097981','1380097981','1','0','8','article75','1','','','','');
DROP TABLE IF EXISTS `rb_attribute`;
CREATE TABLE `rb_attribute` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `attrtype` varchar(30) NOT NULL COMMENT '属性分类',
  `attrname` varchar(50) NOT NULL COMMENT '属性名称',
  `attrvalue` varchar(50) NOT NULL COMMENT '属性值',
  `sort` smallint(5) NOT NULL DEFAULT '0' COMMENT '排序值',
  `status` varchar(1) NOT NULL DEFAULT '1' COMMENT '状态 1:启用,0:禁用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
INSERT INTO `rb_attribute` VALUES ('13','tuijian','首页推荐','1','100','1');
INSERT INTO `rb_attribute` VALUES ('14','tuijian','频道推荐','2','99','1');
INSERT INTO `rb_attribute` VALUES ('15','tuijian','栏目推荐','3','98','1');
INSERT INTO `rb_attribute` VALUES ('16','tuijian','推荐','4','97','1');
INSERT INTO `rb_attribute` VALUES ('17','toutiao','头条一','1','96','1');
INSERT INTO `rb_attribute` VALUES ('18','toutiao','头条二','2','95','1');
INSERT INTO `rb_attribute` VALUES ('19','toutiao','头条三','3','94','1');
DROP TABLE IF EXISTS `rb_category`;
CREATE TABLE `rb_category` (
  `classid` int(10) NOT NULL AUTO_INCREMENT COMMENT '栏目id',
  `classpid` int(10) NOT NULL DEFAULT '0' COMMENT '栏目父id',
  `classpids` varchar(100) NOT NULL COMMENT '栏目父ids',
  `classchild` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否有下级',
  `classchildids` varchar(2000) NOT NULL COMMENT '栏目下级ids',
  `classarrchildids` mediumtext NOT NULL COMMENT '栏目下级对象',
  `classtitle` varchar(100) NOT NULL COMMENT '栏目标题',
  `classsort` smallint(5) NOT NULL DEFAULT '0' COMMENT '排序',
  `classstatus` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态',
  `classkeywords` varchar(150) NOT NULL COMMENT '关键字',
  `classdescription` varchar(200) NOT NULL COMMENT '描述',
  `classmodule` varchar(30) NOT NULL COMMENT '所属模型',
  `classrewrite` varchar(100) NOT NULL COMMENT 'URL重写值',
  `classtemplate` varchar(50) NOT NULL COMMENT '栏目模版',
  `newstemplate` varchar(50) NOT NULL COMMENT '文章模版',
  `classimg` varchar(100) DEFAULT NULL COMMENT '栏目预览图',
  `classapv` int(10) NOT NULL DEFAULT '0' COMMENT '栏目浏览量',
  `classdomain` varchar(100) DEFAULT NULL COMMENT '栏目二级域名',
  `classouturl` varchar(150) DEFAULT NULL COMMENT '栏目外部网址',
  `classmenushow` tinyint(1) NOT NULL DEFAULT '1' COMMENT '前台菜单中显示',
  PRIMARY KEY (`classid`),
  KEY `pid` (`classpid`)
) ENGINE=MyISAM AUTO_INCREMENT=304 DEFAULT CHARSET=utf8;
INSERT INTO `rb_category` VALUES ('233','0','','1','233,247,260','a:3:{i:0;s:3:\"233\";i:1;a:2:{i:0;a:3:{s:7:\"classid\";s:3:\"247\";s:10:\"classtitle\";s:12:\"收藏图片\";s:10:\"classchild\";s:1:\"0\";}i:1;s:3:\"247\";}i:2;a:2:{i:0;a:3:{s:7:\"classid\";s:3:\"260\";s:10:\"classtitle\";s:12:\"美女图片\";s:10:\"classchild\";s:1:\"0\";}i:1;s:3:\"260\";}}','图库','0','0','','','Photo','','','','','0','','','0');
INSERT INTO `rb_category` VALUES ('235','0','','1','235,237,254,255,257,258,256','a:3:{i:0;s:3:\"235\";i:1;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"237\";s:10:\"classtitle\";s:12:\"古典音乐\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:5:\"Music\";}i:1;s:3:\"237\";}i:2;a:4:{i:0;a:4:{s:7:\"classid\";s:3:\"254\";s:10:\"classtitle\";s:12:\"伤感歌曲\";s:10:\"classchild\";s:1:\"1\";s:11:\"classmodule\";s:5:\"Music\";}i:1;s:3:\"254\";i:2;a:4:{i:0;a:3:{s:7:\"classid\";s:3:\"255\";s:10:\"classtitle\";s:9:\"男歌手\";s:10:\"classchild\";s:1:\"1\";}i:1;s:3:\"255\";i:2;a:2:{i:0;a:3:{s:7:\"classid\";s:3:\"257\";s:10:\"classtitle\";s:9:\"张学友\";s:10:\"classchild\";s:1:\"0\";}i:1;s:3:\"257\";}i:3;a:2:{i:0;a:3:{s:7:\"classid\";s:3:\"258\";s:10:\"classtitle\";s:9:\"刘德华\";s:10:\"classchild\";s:1:\"0\";}i:1;s:3:\"258\";}}i:3;a:2:{i:0;a:3:{s:7:\"classid\";s:3:\"256\";s:10:\"classtitle\";s:9:\"女歌手\";s:10:\"classchild\";s:1:\"0\";}i:1;s:3:\"256\";}}}','音乐','0','0','','','Music','yinle','','','','0','','','0');
INSERT INTO `rb_category` VALUES ('299','294','0,294','0','299','a:1:{i:0;s:3:\"299\";}','行业动态','0','1','','','Article','xingyedongtai','{tplroot}default/Press/press.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('283','282','0,282','0','283','a:1:{i:0;s:3:\"283\";}','园区介绍','0','1','','','Article','yuanqujieshao','{tplroot}default/about/about.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('285','282','0,282','0','285','a:1:{i:0;s:3:\"285\";}','加入协会','0','1','','','Article','jiaruxiehui','{tplroot}default/about/join.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('286','0','','1','286,287,288,289,290,291','a:6:{i:0;s:3:\"286\";i:1;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"287\";s:10:\"classtitle\";s:6:\"教育\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:7:\"Article\";}i:1;s:3:\"287\";}i:2;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"288\";s:10:\"classtitle\";s:6:\"医用\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:7:\"Article\";}i:1;s:3:\"288\";}i:3;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"289\";s:10:\"classtitle\";s:6:\"益智\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:7:\"Article\";}i:1;s:3:\"289\";}i:4;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"290\";s:10:\"classtitle\";s:6:\"民用\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:7:\"Article\";}i:1;s:3:\"290\";}i:5;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"291\";s:10:\"classtitle\";s:6:\"工业\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:7:\"Article\";}i:1;s:3:\"291\";}}','产品展示','0','1','','','Article','chanpinzhanshi','{tplroot}default/Product/product.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('287','286','0,286','0','287','a:1:{i:0;s:3:\"287\";}','教育','0','1','','','Article','jiaoyu','{tplroot}default/Product/product.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('288','286','0,286','0','288','a:1:{i:0;s:3:\"288\";}','医用','0','1','','','Article','yiyong','{tplroot}default/Product/product.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('289','286','0,286','0','289','a:1:{i:0;s:3:\"289\";}','益智','0','1','','','Article','yizhi','{tplroot}default/Product/product.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('290','286','0,286','0','290','a:1:{i:0;s:3:\"290\";}','民用','0','1','','','Article','minyong','{tplroot}default/Product/product.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('291','286','0,286','0','291','a:1:{i:0;s:3:\"291\";}','工业','0','1','','','Article','gongye','{tplroot}default/Product/product.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('292','0','','1','292,296,297,298','a:4:{i:0;s:3:\"292\";i:1;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"296\";s:10:\"classtitle\";s:6:\"租凭\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:7:\"Article\";}i:1;s:3:\"296\";}i:2;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"297\";s:10:\"classtitle\";s:6:\"销售\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:7:\"Article\";}i:1;s:3:\"297\";}i:3;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"298\";s:10:\"classtitle\";s:6:\"转让\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:7:\"Article\";}i:1;s:3:\"298\";}}','专业服务','0','1','','','Article','zhuanyefuwu','{tplroot}default/Service/service.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('293','0','','1','293,302,303','a:3:{i:0;s:3:\"293\";i:1;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"302\";s:10:\"classtitle\";s:12:\"专家咨询\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:7:\"Article\";}i:1;s:3:\"302\";}i:2;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"303\";s:10:\"classtitle\";s:12:\"专家解答\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:7:\"Article\";}i:1;s:3:\"303\";}}','专家在线','0','1','','','Article','zhuanjiazaixian','{tplroot}default/Question/question.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('294','0','','1','294,299,300,301','a:4:{i:0;s:3:\"294\";i:1;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"299\";s:10:\"classtitle\";s:12:\"行业动态\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:7:\"Article\";}i:1;s:3:\"299\";}i:2;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"300\";s:10:\"classtitle\";s:12:\"公司新闻\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:7:\"Article\";}i:1;s:3:\"300\";}i:3;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"301\";s:10:\"classtitle\";s:12:\"资料下载\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:7:\"Article\";}i:1;s:3:\"301\";}}','媒体关系','0','1','','','Article','meitiguanxi','{tplroot}default/Press/press.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('295','0','','0','295','a:1:{i:0;s:3:\"295\";}','联系我们','0','1','','','Article','','','','','0','','jiaruxiehui.html#contact','1');
INSERT INTO `rb_category` VALUES ('296','292','0,292','0','296','a:1:{i:0;s:3:\"296\";}','租凭','0','1','','','Article','zuping','{tplroot}default/Service/service.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('297','292','0,292','0','297','a:1:{i:0;s:3:\"297\";}','销售','0','1','','','Article','xiaoshou','{tplroot}default/Service/service.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('298','292','0,292','0','298','a:1:{i:0;s:3:\"298\";}','转让','0','1','','','Article','zhuanrang','{tplroot}default/Service/service.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('300','294','0,294','0','300','a:1:{i:0;s:3:\"300\";}','公司新闻','0','1','','','Article','gongsixinwen','{tplroot}default/Press/press.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('301','294','0,294','0','301','a:1:{i:0;s:3:\"301\";}','资料下载','0','1','','','Article','ziliaoxiazai','{tplroot}default/Press/press.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('302','293','0,293','0','302','a:1:{i:0;s:3:\"302\";}','专家咨询','0','1','','','Article','zhuanjiazixun','{tplroot}default/Question/question.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('237','235','0,235','0','237','a:1:{i:0;s:3:\"237\";}','古典音乐','0','1','','','Music','','','','','0','','','1');
INSERT INTO `rb_category` VALUES ('303','293','0,293','0','303','a:1:{i:0;s:3:\"303\";}','专家解答','0','1','','','Article','zhuanjiajieda','{tplroot}default/Question/faq.html','','','0','','','1');
INSERT INTO `rb_category` VALUES ('247','233','0,233','0','247','a:1:{i:0;s:3:\"247\";}','收藏图片','0','1','','','Photo','','','','','0','','','1');
INSERT INTO `rb_category` VALUES ('254','235','0,235','1','254,255,257,258,256','a:3:{i:0;s:3:\"254\";i:1;a:4:{i:0;a:3:{s:7:\"classid\";s:3:\"255\";s:10:\"classtitle\";s:9:\"男歌手\";s:10:\"classchild\";s:1:\"1\";}i:1;s:3:\"255\";i:2;a:2:{i:0;a:3:{s:7:\"classid\";s:3:\"257\";s:10:\"classtitle\";s:9:\"张学友\";s:10:\"classchild\";s:1:\"0\";}i:1;s:3:\"257\";}i:3;a:2:{i:0;a:3:{s:7:\"classid\";s:3:\"258\";s:10:\"classtitle\";s:9:\"刘德华\";s:10:\"classchild\";s:1:\"0\";}i:1;s:3:\"258\";}}i:2;a:2:{i:0;a:3:{s:7:\"classid\";s:3:\"256\";s:10:\"classtitle\";s:9:\"女歌手\";s:10:\"classchild\";s:1:\"0\";}i:1;s:3:\"256\";}}','伤感歌曲','0','1','','','Music','','','','','0','','','1');
INSERT INTO `rb_category` VALUES ('255','254','0,235,254','1','255,257,258','a:3:{i:0;s:3:\"255\";i:1;a:2:{i:0;a:3:{s:7:\"classid\";s:3:\"257\";s:10:\"classtitle\";s:9:\"张学友\";s:10:\"classchild\";s:1:\"0\";}i:1;s:3:\"257\";}i:2;a:2:{i:0;a:3:{s:7:\"classid\";s:3:\"258\";s:10:\"classtitle\";s:9:\"刘德华\";s:10:\"classchild\";s:1:\"0\";}i:1;s:3:\"258\";}}','男歌手','0','1','','','Music','','','','','0','','','1');
INSERT INTO `rb_category` VALUES ('256','254','0,235,254','0','256','a:1:{i:0;s:3:\"256\";}','女歌手','0','1','','','Music','','','','','0','','','1');
INSERT INTO `rb_category` VALUES ('257','255','0,235,254,255','0','257','a:1:{i:0;s:3:\"257\";}','张学友','0','1','','','Music','','','','','0','','','1');
INSERT INTO `rb_category` VALUES ('258','255','0,235,254,255','0','258','a:1:{i:0;s:3:\"258\";}','刘德华','0','1','','','Music','','','','','0','','','1');
INSERT INTO `rb_category` VALUES ('260','233','0,233','0','260','a:1:{i:0;s:3:\"260\";}','美女图片','0','1','','','Photo','','','','','0','','','1');
INSERT INTO `rb_category` VALUES ('264','0','','0','264','a:1:{i:0;s:3:\"264\";}','测试栏目','0','0','','','Test','ceshilanmu','','{tplroot}default/Test/view.html','','0','','','1');
INSERT INTO `rb_category` VALUES ('268','0','','0','268','a:1:{i:0;s:3:\"268\";}','首页推荐','0','0','','','Article','','','','','0','','','0');
INSERT INTO `rb_category` VALUES ('270','0','','0','270','a:1:{i:0;s:3:\"270\";}','下载中心','0','1','','','Download','down','','','','0','','','0');
INSERT INTO `rb_category` VALUES ('282','0','','1','282,283,285','a:3:{i:0;s:3:\"282\";i:1;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"283\";s:10:\"classtitle\";s:12:\"园区介绍\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:7:\"Article\";}i:1;s:3:\"283\";}i:2;a:2:{i:0;a:4:{s:7:\"classid\";s:3:\"285\";s:10:\"classtitle\";s:12:\"加入协会\";s:10:\"classchild\";s:1:\"0\";s:11:\"classmodule\";s:7:\"Article\";}i:1;s:3:\"285\";}}','关于我们','0','1','','','Article','guanyuwomen','{tplroot}default/about/about.html','','','0','','','1');
DROP TABLE IF EXISTS `rb_category_map`;
CREATE TABLE `rb_category_map` (
  `mapid` int(10) NOT NULL AUTO_INCREMENT COMMENT '一条信息属于多个栏目的映射关系表',
  `mapissource` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否源头',
  `mapinfoid` int(10) NOT NULL COMMENT '信息ID',
  `mapclassid` int(10) NOT NULL COMMENT '所属栏目',
  `mapclassmodule` varchar(30) NOT NULL COMMENT '所属模型',
  PRIMARY KEY (`mapid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
INSERT INTO `rb_category_map` VALUES ('1','1','13','264','Test');
INSERT INTO `rb_category_map` VALUES ('3','0','5','268','Article');
INSERT INTO `rb_category_map` VALUES ('5','0','244','268','Article');
INSERT INTO `rb_category_map` VALUES ('6','1','244','270','Download');
INSERT INTO `rb_category_map` VALUES ('7','0','7','268','Article');
DROP TABLE IF EXISTS `rb_diary`;
CREATE TABLE `rb_diary` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `weather` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `adder_id` int(10) NOT NULL,
  `add_time` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `rb_download`;
CREATE TABLE `rb_download` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `tid` varchar(50) NOT NULL COMMENT '所属分类',
  `title` varchar(100) NOT NULL COMMENT '软件标题',
  `rjbb` varchar(100) NOT NULL COMMENT '软件版本',
  `isb` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否加粗',
  `isi` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否斜体',
  `tcolor` char(10) DEFAULT NULL COMMENT '标题颜色',
  `keywords` varchar(100) DEFAULT NULL COMMENT '关键字',
  `description` varchar(200) DEFAULT NULL COMMENT '描述',
  `img` varchar(100) NOT NULL COMMENT '预览图片',
  `content` longtext NOT NULL COMMENT '内容',
  `add_time` int(10) NOT NULL COMMENT '录入时间',
  `update_time` int(10) NOT NULL COMMENT '修改时间',
  `adder_id` int(10) NOT NULL COMMENT '录入人',
  `sort` smallint(5) NOT NULL DEFAULT '0' COMMENT '排序值',
  `apv` smallint(5) DEFAULT '0' COMMENT '浏览量',
  `rewrite` varchar(50) NOT NULL COMMENT 'URL重写值',
  `status` tinyint(1) DEFAULT '1' COMMENT '状态 1:启用,0:禁用',
  `template` varchar(50) DEFAULT NULL COMMENT '使用模板',
  `attrtj` varchar(30) DEFAULT NULL COMMENT '推荐属性',
  `attrtt` varchar(30) DEFAULT NULL COMMENT '头条属性',
  `outurl` varchar(150) DEFAULT NULL COMMENT '外部网址',
  PRIMARY KEY (`id`),
  KEY `tid` (`tid`),
  KEY `title` (`title`),
  FULLTEXT KEY `content` (`content`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
INSERT INTO `rb_download` VALUES ('8','270','机器人协会章程','01','0','0','','','','','机器人协会章程','1380100769','1380101254','1','0','0','download8','1','','','','');
INSERT INTO `rb_download` VALUES ('10','270','机器人协会章程2','01','0','0','','','','','01','1380102067','1380102067','1','0','0','download10','1','','','','');
INSERT INTO `rb_download` VALUES ('9','270','上海机器人协会会员申请表','01','0','0','','','','','1','1380101232','1380101232','1','0','0','download9','1','','','','');
DROP TABLE IF EXISTS `rb_key`;
CREATE TABLE `rb_key` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `keyname` varchar(50) NOT NULL COMMENT '关键字名称',
  `url` varchar(100) NOT NULL COMMENT '关键字链接地址',
  `sort` smallint(5) NOT NULL DEFAULT '0' COMMENT '排序',
  `status` smallint(1) NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
INSERT INTO `rb_key` VALUES ('5','汤娇','help.html','0','1');
INSERT INTO `rb_key` VALUES ('6','汤娇真的漂亮吗','article73.html','0','1');
DROP TABLE IF EXISTS `rb_link`;
CREATE TABLE `rb_link` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `url` varchar(200) NOT NULL,
  `intro` varchar(100) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `rb_message`;
CREATE TABLE `rb_message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL DEFAULT '0',
  `adder_name` varchar(50) NOT NULL,
  `adder_email` varchar(100) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1:文章评论,2:留言',
  `adder_id` int(10) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `add_time` int(10) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `modelname` varchar(20) NOT NULL DEFAULT '' COMMENT '模型名称',
  `modekeyvalue` varchar(20) NOT NULL DEFAULT '' COMMENT '模型主键值',
  `fromtitle` varchar(100) NOT NULL DEFAULT '' COMMENT '来源标题',
  `fromurl` varchar(150) NOT NULL DEFAULT '' COMMENT '来源url',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `rb_model`;
CREATE TABLE `rb_model` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '模型表',
  `ename` varchar(20) NOT NULL DEFAULT '' COMMENT '模块名称',
  `cname` varchar(50) NOT NULL DEFAULT '' COMMENT '显示名称',
  `notes` text NOT NULL COMMENT '应用描述',
  `menugroup` tinyint(2) NOT NULL DEFAULT '2' COMMENT '属于大菜单',
  `sort` tinyint(3) NOT NULL DEFAULT '1' COMMENT '排序',
  `author` varchar(30) NOT NULL DEFAULT '' COMMENT '开发作者',
  `version` varchar(15) NOT NULL DEFAULT '' COMMENT '版本',
  `add_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ename` (`ename`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
INSERT INTO `rb_model` VALUES ('1','Article','文章模型','','2','1','','','0','0','1');
INSERT INTO `rb_model` VALUES ('2','Music','音乐模型','','2','1','','','0','0','1');
INSERT INTO `rb_model` VALUES ('3','Video','视频模型','','2','1','','','0','0','1');
INSERT INTO `rb_model` VALUES ('4','Photo','图片模型','','2','1','','','0','0','1');
INSERT INTO `rb_model` VALUES ('7','Test','测试模块模型','','2','1','','','0','0','1');
INSERT INTO `rb_model` VALUES ('8','Download','下载模块模型','','2','1','','','0','0','1');
DROP TABLE IF EXISTS `rb_model_children`;
CREATE TABLE `rb_model_children` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '模型子菜单表',
  `ename` varchar(20) NOT NULL DEFAULT '' COMMENT '模型名称',
  `childmenus` text NOT NULL,
  `childtables` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ename` (`ename`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
INSERT INTO `rb_model_children` VALUES ('1','Photo','','photo');
INSERT INTO `rb_model_children` VALUES ('2','Video','','video');
INSERT INTO `rb_model_children` VALUES ('3','Music','','music');
INSERT INTO `rb_model_children` VALUES ('4','Article','','article');
INSERT INTO `rb_model_children` VALUES ('6','Test','','test');
INSERT INTO `rb_model_children` VALUES ('7','Attribute','','attribute');
INSERT INTO `rb_model_children` VALUES ('8','Download','','download');
DROP TABLE IF EXISTS `rb_model_fieldnotes`;
CREATE TABLE `rb_model_fieldnotes` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '模型字段附加信息',
  `ename` varchar(20) NOT NULL DEFAULT '',
  `fieldnotes` mediumtext NOT NULL,
  `fieldsmap` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
INSERT INTO `rb_model_fieldnotes` VALUES ('1','Photo','a:16:{s:2:\"id\";a:3:{s:5:\"cname\";s:2:\"id\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:6:\"Unique\";}s:5:\"title\";a:3:{s:5:\"cname\";s:12:\"图片名称\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"isb\";a:3:{s:5:\"cname\";s:12:\"是否加粗\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"isi\";a:3:{s:5:\"cname\";s:12:\"是否斜体\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"tcolor\";a:3:{s:5:\"cname\";s:12:\"标题颜色\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:5:\"intro\";a:3:{s:5:\"cname\";s:12:\"图片简介\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"img\";a:3:{s:5:\"cname\";s:12:\"图片上传\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:4:\"link\";a:3:{s:5:\"cname\";s:12:\"链接地址\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"tid\";a:3:{s:5:\"cname\";s:12:\"所属分类\";s:5:\"cnote\";s:7:\"classid\";s:3:\"key\";s:0:\"\";}s:4:\"sort\";a:3:{s:5:\"cname\";s:9:\"排序值\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"adder_id\";a:3:{s:5:\"cname\";s:9:\"录入人\";s:5:\"cnote\";s:6:\"userid\";s:3:\"key\";s:0:\"\";}s:8:\"add_time\";a:3:{s:5:\"cname\";s:12:\"添加时间\";s:5:\"cnote\";s:6:\"time()\";s:3:\"key\";s:0:\"\";}s:6:\"status\";a:3:{s:5:\"cname\";s:6:\"状态\";s:5:\"cnote\";s:17:\"0:禁用,1:启用\";s:3:\"key\";s:0:\"\";}s:6:\"attrtj\";a:3:{s:5:\"cname\";s:12:\"推荐属性\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"attrtt\";a:3:{s:5:\"cname\";s:12:\"头条属性\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"outurl\";a:3:{s:5:\"cname\";s:12:\"外部网址\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}}','a:10:{s:2:\"id\";a:2:{s:12:\"searnames\";s:2:\"id\";s:9:\"inputType\";s:0:\"\";}s:5:\"title\";a:2:{s:12:\"searnames\";s:5:\"title\";s:9:\"inputType\";s:0:\"\";}s:5:\"intro\";a:2:{s:12:\"searnames\";s:5:\"intro\";s:9:\"inputType\";s:0:\"\";}s:3:\"img\";a:2:{s:12:\"searnames\";s:3:\"img\";s:9:\"inputType\";s:0:\"\";}s:4:\"link\";a:2:{s:12:\"searnames\";s:4:\"link\";s:9:\"inputType\";s:0:\"\";}s:3:\"tid\";a:2:{s:12:\"searnames\";s:3:\"tid\";s:9:\"inputType\";s:0:\"\";}s:4:\"sort\";a:2:{s:12:\"searnames\";s:4:\"sort\";s:9:\"inputType\";s:0:\"\";}s:8:\"adder_id\";a:2:{s:12:\"searnames\";s:8:\"adder_id\";s:9:\"inputType\";s:0:\"\";}s:8:\"add_time\";a:2:{s:12:\"searnames\";s:8:\"add_time\";s:9:\"inputType\";s:0:\"\";}s:6:\"status\";a:2:{s:12:\"searnames\";s:6:\"status\";s:9:\"inputType\";s:0:\"\";}}');
INSERT INTO `rb_model_fieldnotes` VALUES ('2','Video','a:18:{s:2:\"id\";a:3:{s:5:\"cname\";s:2:\"id\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:5:\"title\";a:3:{s:5:\"cname\";s:12:\"视频标题\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"isb\";a:3:{s:5:\"cname\";s:12:\"是否加粗\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"isi\";a:3:{s:5:\"cname\";s:12:\"是否斜体\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"tcolor\";a:3:{s:5:\"cname\";s:12:\"标题颜色\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"keywords\";a:3:{s:5:\"cname\";s:9:\"关键字\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:11:\"description\";a:3:{s:5:\"cname\";s:6:\"描述\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"img\";a:3:{s:5:\"cname\";s:9:\"小图片\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:4:\"file\";a:3:{s:5:\"cname\";s:12:\"上传视频\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:7:\"rewrite\";a:3:{s:5:\"cname\";s:9:\"URL重写\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:4:\"sort\";a:3:{s:5:\"cname\";s:9:\"排序值\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"tid\";a:3:{s:5:\"cname\";s:12:\"所属分类\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"adder_id\";a:3:{s:5:\"cname\";s:9:\"录入人\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"add_time\";a:3:{s:5:\"cname\";s:12:\"录入时间\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"status\";a:3:{s:5:\"cname\";s:6:\"状态\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"attrtj\";a:3:{s:5:\"cname\";s:12:\"推荐属性\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"attrtt\";a:3:{s:5:\"cname\";s:12:\"头条属性\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"outurl\";a:3:{s:5:\"cname\";s:12:\"外部网址\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}}','a:12:{s:2:\"id\";a:2:{s:12:\"searnames\";s:2:\"id\";s:9:\"inputType\";s:0:\"\";}s:5:\"title\";a:2:{s:12:\"searnames\";s:5:\"title\";s:9:\"inputType\";s:0:\"\";}s:8:\"keywords\";a:2:{s:12:\"searnames\";s:8:\"keywords\";s:9:\"inputType\";s:0:\"\";}s:11:\"description\";a:2:{s:12:\"searnames\";s:11:\"description\";s:9:\"inputType\";s:0:\"\";}s:3:\"img\";a:2:{s:12:\"searnames\";s:3:\"img\";s:9:\"inputType\";s:0:\"\";}s:4:\"file\";a:2:{s:12:\"searnames\";s:4:\"file\";s:9:\"inputType\";s:0:\"\";}s:7:\"rewrite\";a:2:{s:12:\"searnames\";s:7:\"rewrite\";s:9:\"inputType\";s:0:\"\";}s:4:\"sort\";a:2:{s:12:\"searnames\";s:4:\"sort\";s:9:\"inputType\";s:0:\"\";}s:3:\"tid\";a:2:{s:12:\"searnames\";s:3:\"tid\";s:9:\"inputType\";s:0:\"\";}s:8:\"adder_id\";a:2:{s:12:\"searnames\";s:8:\"adder_id\";s:9:\"inputType\";s:0:\"\";}s:8:\"add_time\";a:2:{s:12:\"searnames\";s:8:\"add_time\";s:9:\"inputType\";s:0:\"\";}s:6:\"status\";a:2:{s:12:\"searnames\";s:6:\"status\";s:9:\"inputType\";s:0:\"\";}}');
INSERT INTO `rb_model_fieldnotes` VALUES ('3','Music','a:9:{s:2:\"id\";a:3:{s:5:\"cname\";s:2:\"id\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:5:\"title\";a:3:{s:5:\"cname\";s:9:\"音乐名\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"author\";a:3:{s:5:\"cname\";s:6:\"作者\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:4:\"file\";a:3:{s:5:\"cname\";s:12:\"上传音乐\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:4:\"sort\";a:3:{s:5:\"cname\";s:9:\"排序值\";s:5:\"cnote\";s:1:\"0\";s:3:\"key\";s:0:\"\";}s:3:\"tid\";a:3:{s:5:\"cname\";s:12:\"所属分类\";s:5:\"cnote\";s:7:\"classid\";s:3:\"key\";s:0:\"\";}s:8:\"adder_id\";a:3:{s:5:\"cname\";s:9:\"录入人\";s:5:\"cnote\";s:6:\"userid\";s:3:\"key\";s:0:\"\";}s:8:\"add_time\";a:3:{s:5:\"cname\";s:12:\"录入时间\";s:5:\"cnote\";s:6:\"time()\";s:3:\"key\";s:0:\"\";}s:6:\"status\";a:3:{s:5:\"cname\";s:6:\"状态\";s:5:\"cnote\";s:17:\"1:启用,0:禁用\";s:3:\"key\";s:0:\"\";}}','a:9:{s:2:\"id\";a:2:{s:12:\"searnames\";s:2:\"id\";s:9:\"inputType\";s:0:\"\";}s:5:\"title\";a:2:{s:12:\"searnames\";s:5:\"title\";s:9:\"inputType\";s:0:\"\";}s:6:\"author\";a:2:{s:12:\"searnames\";s:6:\"author\";s:9:\"inputType\";s:0:\"\";}s:4:\"file\";a:2:{s:12:\"searnames\";s:4:\"file\";s:9:\"inputType\";s:0:\"\";}s:4:\"sort\";a:2:{s:12:\"searnames\";s:4:\"sort\";s:9:\"inputType\";s:0:\"\";}s:3:\"tid\";a:2:{s:12:\"searnames\";s:3:\"tid\";s:9:\"inputType\";s:0:\"\";}s:8:\"adder_id\";a:2:{s:12:\"searnames\";s:8:\"adder_id\";s:9:\"inputType\";s:0:\"\";}s:8:\"add_time\";a:2:{s:12:\"searnames\";s:8:\"add_time\";s:9:\"inputType\";s:0:\"\";}s:6:\"status\";a:2:{s:12:\"searnames\";s:6:\"status\";s:9:\"inputType\";s:0:\"\";}}');
INSERT INTO `rb_model_fieldnotes` VALUES ('4','Article','a:21:{s:2:\"id\";a:3:{s:5:\"cname\";s:2:\"id\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"tid\";a:3:{s:5:\"cname\";s:12:\"所属分类\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:6:\"Normal\";}s:5:\"title\";a:3:{s:5:\"cname\";s:12:\"文章标题\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:6:\"Normal\";}s:3:\"isb\";a:3:{s:5:\"cname\";s:12:\"是否加粗\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"isi\";a:3:{s:5:\"cname\";s:12:\"是否斜体\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"tcolor\";a:3:{s:5:\"cname\";s:12:\"标题颜色\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"keywords\";a:3:{s:5:\"cname\";s:9:\"关键字\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:11:\"description\";a:3:{s:5:\"cname\";s:6:\"描述\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"img\";a:3:{s:5:\"cname\";s:12:\"预览图片\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:7:\"content\";a:3:{s:5:\"cname\";s:6:\"内容\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:9:\"Full Text\";}s:8:\"add_time\";a:3:{s:5:\"cname\";s:12:\"录入时间\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:11:\"update_time\";a:3:{s:5:\"cname\";s:12:\"修改时间\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"adder_id\";a:3:{s:5:\"cname\";s:9:\"录入人\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:4:\"sort\";a:3:{s:5:\"cname\";s:9:\"排序值\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"apv\";a:3:{s:5:\"cname\";s:9:\"浏览量\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:7:\"rewrite\";a:3:{s:5:\"cname\";s:12:\"URL重写值\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"status\";a:3:{s:5:\"cname\";s:6:\"状态\";s:5:\"cnote\";s:17:\"1:启用,0:禁用\";s:3:\"key\";s:0:\"\";}s:8:\"template\";a:3:{s:5:\"cname\";s:12:\"使用模板\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"attrtj\";a:3:{s:5:\"cname\";s:12:\"推荐属性\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"attrtt\";a:3:{s:5:\"cname\";s:12:\"头条属性\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"outurl\";a:3:{s:5:\"cname\";s:12:\"外部网址\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}}','a:15:{s:2:\"id\";a:2:{s:12:\"searnames\";s:2:\"id\";s:9:\"inputType\";s:0:\"\";}s:3:\"tid\";a:2:{s:12:\"searnames\";s:3:\"tid\";s:9:\"inputType\";s:0:\"\";}s:5:\"title\";a:2:{s:12:\"searnames\";s:5:\"title\";s:9:\"inputType\";s:0:\"\";}s:8:\"keywords\";a:2:{s:12:\"searnames\";s:8:\"keywords\";s:9:\"inputType\";s:0:\"\";}s:11:\"description\";a:2:{s:12:\"searnames\";s:11:\"description\";s:9:\"inputType\";s:0:\"\";}s:3:\"img\";a:2:{s:12:\"searnames\";s:3:\"img\";s:9:\"inputType\";s:0:\"\";}s:7:\"content\";a:2:{s:12:\"searnames\";s:7:\"content\";s:9:\"inputType\";s:0:\"\";}s:8:\"add_time\";a:2:{s:12:\"searnames\";s:8:\"add_time\";s:9:\"inputType\";s:0:\"\";}s:11:\"update_time\";a:2:{s:12:\"searnames\";s:11:\"update_time\";s:9:\"inputType\";s:0:\"\";}s:8:\"adder_id\";a:2:{s:12:\"searnames\";s:8:\"adder_id\";s:9:\"inputType\";s:0:\"\";}s:4:\"sort\";a:2:{s:12:\"searnames\";s:4:\"sort\";s:9:\"inputType\";s:0:\"\";}s:3:\"apv\";a:2:{s:12:\"searnames\";s:3:\"apv\";s:9:\"inputType\";s:0:\"\";}s:7:\"rewrite\";a:2:{s:12:\"searnames\";s:7:\"rewrite\";s:9:\"inputType\";s:0:\"\";}s:6:\"status\";a:2:{s:12:\"searnames\";s:6:\"status\";s:9:\"inputType\";s:0:\"\";}s:8:\"template\";a:2:{s:12:\"searnames\";s:8:\"template\";s:9:\"inputType\";s:0:\"\";}}');
INSERT INTO `rb_model_fieldnotes` VALUES ('7','Test','a:21:{s:2:\"id\";a:3:{s:5:\"cname\";s:2:\"id\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"tid\";a:3:{s:5:\"cname\";s:12:\"所属分类\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:6:\"Normal\";}s:5:\"title\";a:3:{s:5:\"cname\";s:12:\"测试标题\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:6:\"Normal\";}s:8:\"keywords\";a:3:{s:5:\"cname\";s:9:\"关键字\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:11:\"description\";a:3:{s:5:\"cname\";s:6:\"描述\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"img\";a:3:{s:5:\"cname\";s:12:\"预览图片\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:7:\"content\";a:3:{s:5:\"cname\";s:6:\"内容\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:9:\"Full Text\";}s:8:\"add_time\";a:3:{s:5:\"cname\";s:12:\"录入时间\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:11:\"update_time\";a:3:{s:5:\"cname\";s:12:\"修改时间\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"adder_id\";a:3:{s:5:\"cname\";s:9:\"录入人\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:4:\"sort\";a:3:{s:5:\"cname\";s:9:\"排序值\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"apv\";a:3:{s:5:\"cname\";s:9:\"浏览量\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:7:\"rewrite\";a:3:{s:5:\"cname\";s:12:\"URL重写值\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"status\";a:3:{s:5:\"cname\";s:6:\"状态\";s:5:\"cnote\";s:17:\"1:启用,0:禁用\";s:3:\"key\";s:0:\"\";}s:8:\"template\";a:3:{s:5:\"cname\";s:12:\"使用模板\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"isb\";a:3:{s:5:\"cname\";s:6:\"加粗\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"isi\";a:3:{s:5:\"cname\";s:6:\"斜体\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"tcolor\";a:3:{s:5:\"cname\";s:6:\"颜色\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"attrtj\";a:3:{s:5:\"cname\";s:6:\"推荐\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"attrtt\";a:3:{s:5:\"cname\";s:6:\"头条\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"outurl\";a:3:{s:5:\"cname\";s:12:\"外部网址\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}}','a:21:{s:2:\"id\";a:2:{s:12:\"searnames\";s:2:\"id\";s:9:\"inputType\";s:0:\"\";}s:3:\"tid\";a:2:{s:12:\"searnames\";s:3:\"tid\";s:9:\"inputType\";s:0:\"\";}s:5:\"title\";a:2:{s:12:\"searnames\";s:5:\"title\";s:9:\"inputType\";s:0:\"\";}s:8:\"keywords\";a:2:{s:12:\"searnames\";s:8:\"keywords\";s:9:\"inputType\";s:0:\"\";}s:11:\"description\";a:2:{s:12:\"searnames\";s:11:\"description\";s:9:\"inputType\";s:0:\"\";}s:3:\"img\";a:2:{s:12:\"searnames\";s:3:\"img\";s:9:\"inputType\";s:0:\"\";}s:7:\"content\";a:2:{s:12:\"searnames\";s:7:\"content\";s:9:\"inputType\";s:0:\"\";}s:8:\"add_time\";a:2:{s:12:\"searnames\";s:8:\"add_time\";s:9:\"inputType\";s:0:\"\";}s:11:\"update_time\";a:2:{s:12:\"searnames\";s:11:\"update_time\";s:9:\"inputType\";s:0:\"\";}s:8:\"adder_id\";a:2:{s:12:\"searnames\";s:8:\"adder_id\";s:9:\"inputType\";s:0:\"\";}s:4:\"sort\";a:2:{s:12:\"searnames\";s:4:\"sort\";s:9:\"inputType\";s:0:\"\";}s:3:\"apv\";a:2:{s:12:\"searnames\";s:3:\"apv\";s:9:\"inputType\";s:0:\"\";}s:7:\"rewrite\";a:2:{s:12:\"searnames\";s:7:\"rewrite\";s:9:\"inputType\";s:0:\"\";}s:6:\"status\";a:2:{s:12:\"searnames\";s:6:\"status\";s:9:\"inputType\";s:0:\"\";}s:8:\"template\";a:2:{s:12:\"searnames\";s:8:\"template\";s:9:\"inputType\";s:0:\"\";}s:3:\"isb\";a:2:{s:12:\"searnames\";s:0:\"\";s:9:\"inputType\";s:0:\"\";}s:3:\"isi\";a:2:{s:12:\"searnames\";s:0:\"\";s:9:\"inputType\";s:0:\"\";}s:6:\"tcolor\";a:2:{s:12:\"searnames\";s:0:\"\";s:9:\"inputType\";s:0:\"\";}s:6:\"attrtj\";a:2:{s:12:\"searnames\";s:0:\"\";s:9:\"inputType\";s:0:\"\";}s:6:\"attrtt\";a:2:{s:12:\"searnames\";s:0:\"\";s:9:\"inputType\";s:0:\"\";}s:6:\"outurl\";a:2:{s:12:\"searnames\";s:0:\"\";s:9:\"inputType\";s:0:\"\";}}');
INSERT INTO `rb_model_fieldnotes` VALUES ('8','Attribute','a:6:{s:2:\"id\";a:3:{s:5:\"cname\";s:2:\"id\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"attrtype\";a:3:{s:5:\"cname\";s:12:\"属性分类\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"attrname\";a:3:{s:5:\"cname\";s:12:\"属性名称\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:9:\"attrvalue\";a:3:{s:5:\"cname\";s:9:\"属性值\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:4:\"sort\";a:3:{s:5:\"cname\";s:9:\"排序值\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"status\";a:3:{s:5:\"cname\";s:6:\"状态\";s:5:\"cnote\";s:17:\"1:启用,0:禁用\";s:3:\"key\";s:0:\"\";}}','a:4:{s:2:\"id\";a:2:{s:12:\"searnames\";s:2:\"id\";s:9:\"inputType\";s:0:\"\";}s:8:\"attrtype\";a:2:{s:12:\"searnames\";s:0:\"\";s:9:\"inputType\";s:0:\"\";}s:8:\"attrname\";a:2:{s:12:\"searnames\";s:5:\"title\";s:9:\"inputType\";s:0:\"\";}s:9:\"attrvalue\";a:2:{s:12:\"searnames\";s:0:\"\";s:9:\"inputType\";s:0:\"\";}}');
INSERT INTO `rb_model_fieldnotes` VALUES ('9','Category','a:20:{s:7:\"classid\";a:3:{s:5:\"cname\";s:8:\"栏目id\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"classpid\";a:3:{s:5:\"cname\";s:11:\"栏目父id\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:9:\"classpids\";a:3:{s:5:\"cname\";s:12:\"栏目父ids\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:10:\"classchild\";a:3:{s:5:\"cname\";s:15:\"是否有下级\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:13:\"classchildids\";a:3:{s:5:\"cname\";s:15:\"栏目下级ids\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:16:\"classarrchildids\";a:3:{s:5:\"cname\";s:18:\"栏目下级对象\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:10:\"classtitle\";a:3:{s:5:\"cname\";s:12:\"栏目标题\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:9:\"classsort\";a:3:{s:5:\"cname\";s:6:\"排序\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:11:\"classstatus\";a:3:{s:5:\"cname\";s:6:\"状态\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:13:\"classkeywords\";a:3:{s:5:\"cname\";s:9:\"关键字\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:16:\"classdescription\";a:3:{s:5:\"cname\";s:6:\"描述\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:11:\"classmodule\";a:3:{s:5:\"cname\";s:12:\"所属模型\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:12:\"classrewrite\";a:3:{s:5:\"cname\";s:12:\"URL重写值\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:13:\"classtemplate\";a:3:{s:5:\"cname\";s:12:\"栏目模版\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:12:\"newstemplate\";a:3:{s:5:\"cname\";s:12:\"文章模版\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"classimg\";a:3:{s:5:\"cname\";s:15:\"栏目预览图\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"classapv\";a:3:{s:5:\"cname\";s:15:\"栏目浏览量\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:11:\"classdomain\";a:3:{s:5:\"cname\";s:18:\"栏目二级域名\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:11:\"classouturl\";a:3:{s:5:\"cname\";s:18:\"栏目外部网址\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:13:\"classmenushow\";a:3:{s:5:\"cname\";s:21:\"前台菜单中显示\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}}','');
INSERT INTO `rb_model_fieldnotes` VALUES ('10','Download','a:22:{s:2:\"id\";a:3:{s:5:\"cname\";s:2:\"id\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"tid\";a:3:{s:5:\"cname\";s:12:\"所属分类\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:6:\"Normal\";}s:5:\"title\";a:3:{s:5:\"cname\";s:12:\"软件标题\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:6:\"Normal\";}s:4:\"rjbb\";a:3:{s:5:\"cname\";s:12:\"软件版本\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"isb\";a:3:{s:5:\"cname\";s:12:\"是否加粗\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"isi\";a:3:{s:5:\"cname\";s:12:\"是否斜体\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"tcolor\";a:3:{s:5:\"cname\";s:12:\"标题颜色\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"keywords\";a:3:{s:5:\"cname\";s:9:\"关键字\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:11:\"description\";a:3:{s:5:\"cname\";s:6:\"描述\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"img\";a:3:{s:5:\"cname\";s:12:\"预览图片\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:7:\"content\";a:3:{s:5:\"cname\";s:6:\"内容\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:9:\"Full Text\";}s:8:\"add_time\";a:3:{s:5:\"cname\";s:12:\"录入时间\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:11:\"update_time\";a:3:{s:5:\"cname\";s:12:\"修改时间\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"adder_id\";a:3:{s:5:\"cname\";s:9:\"录入人\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:4:\"sort\";a:3:{s:5:\"cname\";s:9:\"排序值\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:3:\"apv\";a:3:{s:5:\"cname\";s:9:\"浏览量\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:7:\"rewrite\";a:3:{s:5:\"cname\";s:12:\"URL重写值\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"status\";a:3:{s:5:\"cname\";s:6:\"状态\";s:5:\"cnote\";s:17:\"1:启用,0:禁用\";s:3:\"key\";s:0:\"\";}s:8:\"template\";a:3:{s:5:\"cname\";s:12:\"使用模板\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"attrtj\";a:3:{s:5:\"cname\";s:12:\"推荐属性\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"attrtt\";a:3:{s:5:\"cname\";s:12:\"头条属性\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:6:\"outurl\";a:3:{s:5:\"cname\";s:12:\"外部网址\";s:5:\"cnote\";s:0:\"\";s:3:\"key\";s:0:\"\";}}','a:22:{s:2:\"id\";a:2:{s:12:\"searnames\";s:2:\"id\";s:9:\"inputType\";s:0:\"\";}s:3:\"tid\";a:2:{s:12:\"searnames\";s:3:\"tid\";s:9:\"inputType\";s:0:\"\";}s:5:\"title\";a:2:{s:12:\"searnames\";s:5:\"title\";s:9:\"inputType\";s:0:\"\";}s:4:\"rjbb\";a:2:{s:12:\"searnames\";s:0:\"\";s:9:\"inputType\";s:0:\"\";}s:3:\"isb\";a:2:{s:12:\"searnames\";s:3:\"isb\";s:9:\"inputType\";s:0:\"\";}s:3:\"isi\";a:2:{s:12:\"searnames\";s:3:\"isi\";s:9:\"inputType\";s:0:\"\";}s:6:\"tcolor\";a:2:{s:12:\"searnames\";s:6:\"tcolor\";s:9:\"inputType\";s:0:\"\";}s:8:\"keywords\";a:2:{s:12:\"searnames\";s:8:\"keywords\";s:9:\"inputType\";s:0:\"\";}s:11:\"description\";a:2:{s:12:\"searnames\";s:11:\"description\";s:9:\"inputType\";s:0:\"\";}s:3:\"img\";a:2:{s:12:\"searnames\";s:3:\"img\";s:9:\"inputType\";s:0:\"\";}s:7:\"content\";a:2:{s:12:\"searnames\";s:7:\"content\";s:9:\"inputType\";s:0:\"\";}s:8:\"add_time\";a:2:{s:12:\"searnames\";s:8:\"add_time\";s:9:\"inputType\";s:0:\"\";}s:11:\"update_time\";a:2:{s:12:\"searnames\";s:11:\"update_time\";s:9:\"inputType\";s:0:\"\";}s:8:\"adder_id\";a:2:{s:12:\"searnames\";s:8:\"adder_id\";s:9:\"inputType\";s:0:\"\";}s:4:\"sort\";a:2:{s:12:\"searnames\";s:4:\"sort\";s:9:\"inputType\";s:0:\"\";}s:3:\"apv\";a:2:{s:12:\"searnames\";s:3:\"apv\";s:9:\"inputType\";s:0:\"\";}s:7:\"rewrite\";a:2:{s:12:\"searnames\";s:7:\"rewrite\";s:9:\"inputType\";s:0:\"\";}s:6:\"status\";a:2:{s:12:\"searnames\";s:6:\"status\";s:9:\"inputType\";s:0:\"\";}s:8:\"template\";a:2:{s:12:\"searnames\";s:8:\"template\";s:9:\"inputType\";s:0:\"\";}s:6:\"attrtj\";a:2:{s:12:\"searnames\";s:6:\"attrtj\";s:9:\"inputType\";s:0:\"\";}s:6:\"attrtt\";a:2:{s:12:\"searnames\";s:6:\"attrtt\";s:9:\"inputType\";s:0:\"\";}s:6:\"outurl\";a:2:{s:12:\"searnames\";s:6:\"outurl\";s:9:\"inputType\";s:0:\"\";}}');
DROP TABLE IF EXISTS `rb_music`;
CREATE TABLE `rb_music` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(100) NOT NULL COMMENT '音乐名',
  `author` varchar(50) DEFAULT NULL COMMENT '作者',
  `file` varchar(100) NOT NULL COMMENT '上传音乐',
  `sort` int(10) NOT NULL COMMENT '排序值 0',
  `tid` int(10) NOT NULL COMMENT '所属分类 classid',
  `adder_id` int(10) NOT NULL COMMENT '录入人 userid',
  `add_time` int(10) NOT NULL COMMENT '录入时间 time()',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态 1:启用,0:禁用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
INSERT INTO `rb_music` VALUES ('1','江南Style','韩国','50a9a35c38b6a.mp3','334','258','1','1344518188','1');
INSERT INTO `rb_music` VALUES ('2','DJ','DJ','50a9a056258cd.mp3','0','257','1','1344518360','1');
DROP TABLE IF EXISTS `rb_node`;
CREATE TABLE `rb_node` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `remark` varchar(255) NOT NULL DEFAULT '',
  `sort` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `group_id` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;
INSERT INTO `rb_node` VALUES ('1','Admin','后台管理','1','','0','0','1','0','0');
INSERT INTO `rb_node` VALUES ('2','Node','模块管理','1','','100','1','2','0','framework');
INSERT INTO `rb_node` VALUES ('3','User','用户管理','1','','98','1','2','0','system');
INSERT INTO `rb_node` VALUES ('4','Role','群组管理','1','','99','1','2','0','system');
INSERT INTO `rb_node` VALUES ('5','Public','公共模块','1','','0','1','2','0','0');
INSERT INTO `rb_node` VALUES ('6','Index','默认模块','1','','0','1','2','0','0');
INSERT INTO `rb_node` VALUES ('7','index','后台首页','1','','0','6','3','0','0');
INSERT INTO `rb_node` VALUES ('8','index','列表','1','','0','5','3','0','0');
INSERT INTO `rb_node` VALUES ('9','add','添加','1','','0','5','3','0','0');
INSERT INTO `rb_node` VALUES ('10','foreverdelete','删除','1','','0','5','3','0','0');
INSERT INTO `rb_node` VALUES ('11','edit','修改','1','','0','5','3','0','0');
INSERT INTO `rb_node` VALUES ('12','insert','写入','1','','0','5','3','0','0');
INSERT INTO `rb_node` VALUES ('13','forbid','禁用','1','','0','5','3','0','0');
INSERT INTO `rb_node` VALUES ('14','update','更新','1','','0','5','3','0','0');
INSERT INTO `rb_node` VALUES ('15','resume','恢复','1','','0','5','3','0','0');
INSERT INTO `rb_node` VALUES ('16','Category','分类管理','1','','99','1','2','0','framework');
INSERT INTO `rb_node` VALUES ('17','Article','文章管理','1','','100','1','2','0','content');
INSERT INTO `rb_node` VALUES ('26','Music','音乐管理','1','','96','1','2','0','content');
INSERT INTO `rb_node` VALUES ('27','Video','视频管理','1','','97','1','2','0','content');
INSERT INTO `rb_node` VALUES ('28','Photo','图片管理','1','','98','1','2','0','content');
INSERT INTO `rb_node` VALUES ('29','Link','链接管理','1','','95','1','2','0','content');
INSERT INTO `rb_node` VALUES ('30','Diary','日记管理','1','','94','1','2','0','content');
INSERT INTO `rb_node` VALUES ('31','Message','留言评论','1','','93','1','2','0','content');
INSERT INTO `rb_node` VALUES ('32','System','系统功能','1','','96','1','2','0','system');
INSERT INTO `rb_node` VALUES ('33','Router','路由列表','1','','90','1','2','0','content');
INSERT INTO `rb_node` VALUES ('34','File','文件管理','1','','97','1','2','0','system');
INSERT INTO `rb_node` VALUES ('80','tree','树形菜单','1','','0','5','3','0','0');
INSERT INTO `rb_node` VALUES ('81','seltpl','选择模板','1','','0','5','3','0','0');
INSERT INTO `rb_node` VALUES ('82','Ui','模板管理','1','','10','1','2','0','ui');
INSERT INTO `rb_node` VALUES ('109','Test','测试模块','1','','0','1','2','0','content');
INSERT INTO `rb_node` VALUES ('112','Attribute','属性管理','1','','98','1','2','0','framework');
INSERT INTO `rb_node` VALUES ('113','Download','下载模块','1','','0','1','2','0','content');
INSERT INTO `rb_node` VALUES ('114','Key','关键字管理','1','','0','1','2','0','framework');
DROP TABLE IF EXISTS `rb_photo`;
CREATE TABLE `rb_photo` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(100) NOT NULL COMMENT '图片名称',
  `isb` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否加粗',
  `isi` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否斜体',
  `tcolor` char(10) DEFAULT NULL COMMENT '标题颜色',
  `intro` varchar(200) DEFAULT NULL COMMENT '图片简介',
  `img` varchar(100) NOT NULL COMMENT '图片上传',
  `link` varchar(150) DEFAULT NULL COMMENT '链接地址',
  `tid` int(10) NOT NULL COMMENT '所属分类 classid',
  `sort` int(10) NOT NULL DEFAULT '0' COMMENT '排序值',
  `adder_id` int(10) NOT NULL COMMENT '录入人 userid',
  `add_time` int(10) NOT NULL COMMENT '添加时间 time()',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态 0:禁用,1:启用',
  `attrtj` varchar(30) DEFAULT NULL COMMENT '推荐属性',
  `attrtt` varchar(30) DEFAULT NULL COMMENT '头条属性',
  `outurl` varchar(150) DEFAULT NULL COMMENT '外部网址',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
INSERT INTO `rb_photo` VALUES ('11','菊花被爆了就是那朵盛开的菊花','0','0','','','50a5d2776491d.jpg','','247','1','0','1353044584','1','','','');
INSERT INTO `rb_photo` VALUES ('12','美女','0','0','','','50a5d4db82a09.jpg','http://www.sina.com.cn','260','12','0','1353045182','1','','','');
INSERT INTO `rb_photo` VALUES ('13','范德萨发额外热我的撒','1','0','#006600','','50d0128a62d98.jpg','','247','0','0','1355813487','1','2,3','1,3','');
INSERT INTO `rb_photo` VALUES ('19','CMSHead V2.1支持栏目级的模型混建_图片模块','0','0','','','51584cfcc73b7.jpg','/CMSHead21.html','269','0','0','1364741307','1','','','');
DROP TABLE IF EXISTS `rb_role`;
CREATE TABLE `rb_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `pid` smallint(5) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `remark` varchar(255) NOT NULL DEFAULT '',
  `ename` varchar(5) NOT NULL DEFAULT '',
  `create_time` int(10) unsigned NOT NULL,
  `update_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parentId` (`pid`),
  KEY `ename` (`ename`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=264 DEFAULT CHARSET=utf8;
INSERT INTO `rb_role` VALUES ('1','理论网苑','0','1','','','1347269667','0');
INSERT INTO `rb_role` VALUES ('157','区人力资源和社会保障局','0','1','','','1347269667','0');
INSERT INTO `rb_role` VALUES ('149','区发展和改革局','0','1','','','1347269667','0');
INSERT INTO `rb_role` VALUES ('148','区政府办公室','0','1','','','1347269667','0');
DROP TABLE IF EXISTS `rb_role_user`;
CREATE TABLE `rb_role_user` (
  `role_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` char(32) NOT NULL DEFAULT '0',
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `rb_role_user` VALUES ('1','3');
INSERT INTO `rb_role_user` VALUES ('148','783');
INSERT INTO `rb_role_user` VALUES ('148','784');
INSERT INTO `rb_role_user` VALUES ('148','785');
INSERT INTO `rb_role_user` VALUES ('149','786');
INSERT INTO `rb_role_user` VALUES ('149','787');
INSERT INTO `rb_role_user` VALUES ('149','788');
INSERT INTO `rb_role_user` VALUES ('154','801');
INSERT INTO `rb_role_user` VALUES ('154','802');
INSERT INTO `rb_role_user` VALUES ('154','803');
INSERT INTO `rb_role_user` VALUES ('157','813');
INSERT INTO `rb_role_user` VALUES ('157','814');
INSERT INTO `rb_role_user` VALUES ('157','816');
INSERT INTO `rb_role_user` VALUES ('173','916');
INSERT INTO `rb_role_user` VALUES ('173','917');
INSERT INTO `rb_role_user` VALUES ('173','918');
INSERT INTO `rb_role_user` VALUES ('209','993');
INSERT INTO `rb_role_user` VALUES ('209','994');
INSERT INTO `rb_role_user` VALUES ('209','995');
INSERT INTO `rb_role_user` VALUES ('219','1024');
INSERT INTO `rb_role_user` VALUES ('219','1025');
INSERT INTO `rb_role_user` VALUES ('219','1026');
INSERT INTO `rb_role_user` VALUES ('225','1042');
INSERT INTO `rb_role_user` VALUES ('225','1043');
INSERT INTO `rb_role_user` VALUES ('225','1044');
INSERT INTO `rb_role_user` VALUES ('231','1060');
INSERT INTO `rb_role_user` VALUES ('231','1061');
INSERT INTO `rb_role_user` VALUES ('231','1062');
INSERT INTO `rb_role_user` VALUES ('232','1063');
INSERT INTO `rb_role_user` VALUES ('232','1064');
INSERT INTO `rb_role_user` VALUES ('232','1065');
INSERT INTO `rb_role_user` VALUES ('235','1073');
INSERT INTO `rb_role_user` VALUES ('235','1074');
INSERT INTO `rb_role_user` VALUES ('241','1091');
INSERT INTO `rb_role_user` VALUES ('241','1092');
INSERT INTO `rb_role_user` VALUES ('241','1093');
INSERT INTO `rb_role_user` VALUES ('242','1094');
INSERT INTO `rb_role_user` VALUES ('242','1095');
INSERT INTO `rb_role_user` VALUES ('242','1096');
INSERT INTO `rb_role_user` VALUES ('243','1097');
INSERT INTO `rb_role_user` VALUES ('243','1098');
INSERT INTO `rb_role_user` VALUES ('243','1099');
INSERT INTO `rb_role_user` VALUES ('244','1100');
INSERT INTO `rb_role_user` VALUES ('244','1101');
INSERT INTO `rb_role_user` VALUES ('244','1102');
INSERT INTO `rb_role_user` VALUES ('245','1103');
INSERT INTO `rb_role_user` VALUES ('245','1104');
INSERT INTO `rb_role_user` VALUES ('245','1105');
INSERT INTO `rb_role_user` VALUES ('246','1106');
INSERT INTO `rb_role_user` VALUES ('246','1107');
INSERT INTO `rb_role_user` VALUES ('246','1108');
INSERT INTO `rb_role_user` VALUES ('247','1109');
INSERT INTO `rb_role_user` VALUES ('247','1110');
INSERT INTO `rb_role_user` VALUES ('247','1111');
INSERT INTO `rb_role_user` VALUES ('148','1114');
INSERT INTO `rb_role_user` VALUES ('148','1115');
INSERT INTO `rb_role_user` VALUES ('148','1116');
INSERT INTO `rb_role_user` VALUES ('148','1117');
INSERT INTO `rb_role_user` VALUES ('148','1118');
INSERT INTO `rb_role_user` VALUES ('148','1119');
INSERT INTO `rb_role_user` VALUES ('149','1121');
INSERT INTO `rb_role_user` VALUES ('149','1122');
INSERT INTO `rb_role_user` VALUES ('149','1123');
INSERT INTO `rb_role_user` VALUES ('149','1124');
INSERT INTO `rb_role_user` VALUES ('149','1125');
INSERT INTO `rb_role_user` VALUES ('149','1126');
INSERT INTO `rb_role_user` VALUES ('157','1127');
INSERT INTO `rb_role_user` VALUES ('157','1201');
INSERT INTO `rb_role_user` VALUES ('157','1202');
INSERT INTO `rb_role_user` VALUES ('149','1377');
INSERT INTO `rb_role_user` VALUES ('149','1378');
INSERT INTO `rb_role_user` VALUES ('149','1379');
INSERT INTO `rb_role_user` VALUES ('149','1380');
INSERT INTO `rb_role_user` VALUES ('157','1402');
INSERT INTO `rb_role_user` VALUES ('157','1403');
INSERT INTO `rb_role_user` VALUES ('157','1404');
INSERT INTO `rb_role_user` VALUES ('3','1768');
INSERT INTO `rb_role_user` VALUES ('3','1769');
INSERT INTO `rb_role_user` VALUES ('263','1769');
INSERT INTO `rb_role_user` VALUES ('3','1770');
INSERT INTO `rb_role_user` VALUES ('3','1768');
DROP TABLE IF EXISTS `rb_router`;
CREATE TABLE `rb_router` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rewrite` varchar(100) NOT NULL,
  `url` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rewrite` (`rewrite`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM AUTO_INCREMENT=285 DEFAULT CHARSET=utf8;
INSERT INTO `rb_router` VALUES ('173','wjxw_2','article/index/id/267');
INSERT INTO `rb_router` VALUES ('164','jsxw','article/index/id/238');
INSERT INTO `rb_router` VALUES ('179','down1','test/view/id/13');
INSERT INTO `rb_router` VALUES ('59','ceshilanmu','test/index/id/264');
INSERT INTO `rb_router` VALUES ('263','yiyong','article/index/id/288');
INSERT INTO `rb_router` VALUES ('172','lhxw','article/index/id/246');
INSERT INTO `rb_router` VALUES ('171','jnxw','article/index/id/245');
INSERT INTO `rb_router` VALUES ('170','tnxw','article/index/id/244');
INSERT INTO `rb_router` VALUES ('169','xbxw','article/index/id/243');
INSERT INTO `rb_router` VALUES ('168','wjxw','article/index/id/242');
INSERT INTO `rb_router` VALUES ('167','szxw','article/index/id/241');
INSERT INTO `rb_router` VALUES ('166','njxw','article/index/id/240');
INSERT INTO `rb_router` VALUES ('165','czxw','article/index/id/239');
INSERT INTO `rb_router` VALUES ('163','shxw','article/index/id/227');
INSERT INTO `rb_router` VALUES ('162','gjxw','article/index/id/226');
INSERT INTO `rb_router` VALUES ('279','download10','download/view/id/10');
INSERT INTO `rb_router` VALUES ('275','article75','article/view/id/75');
INSERT INTO `rb_router` VALUES ('180','yinle','music/index/id/235');
INSERT INTO `rb_router` VALUES ('262','jiaoyu','article/index/id/287');
INSERT INTO `rb_router` VALUES ('261','chanpinzhanshi','article/index/id/286');
INSERT INTO `rb_router` VALUES ('260','jiaruxiehui','article/index/id/285');
INSERT INTO `rb_router` VALUES ('192','down','download/index/id/270');
INSERT INTO `rb_router` VALUES ('277','download9','download/view/id/9');
INSERT INTO `rb_router` VALUES ('220','article53','article/view/id/53');
INSERT INTO `rb_router` VALUES ('278','download8','download/view/id/8');
INSERT INTO `rb_router` VALUES ('222','lanmuxiadexiazai','download/index/id/279');
INSERT INTO `rb_router` VALUES ('258','yuanqujieshao','article/index/id/283');
INSERT INTO `rb_router` VALUES ('257','guanyuwomen','article/index/id/282');
INSERT INTO `rb_router` VALUES ('264','yizhi','article/index/id/289');
INSERT INTO `rb_router` VALUES ('265','minyong','article/index/id/290');
INSERT INTO `rb_router` VALUES ('266','gongye','article/index/id/291');
INSERT INTO `rb_router` VALUES ('267','zhuanyefuwu','article/index/id/292');
INSERT INTO `rb_router` VALUES ('268','zhuanjiazaixian','article/index/id/293');
INSERT INTO `rb_router` VALUES ('269','meitiguanxi','article/index/id/294');
INSERT INTO `rb_router` VALUES ('272','zuping','article/index/id/296');
INSERT INTO `rb_router` VALUES ('273','xiaoshou','article/index/id/297');
INSERT INTO `rb_router` VALUES ('274','zhuanrang','article/index/id/298');
INSERT INTO `rb_router` VALUES ('280','xingyedongtai','article/index/id/299');
INSERT INTO `rb_router` VALUES ('281','gongsixinwen','article/index/id/300');
INSERT INTO `rb_router` VALUES ('282','ziliaoxiazai','article/index/id/301');
INSERT INTO `rb_router` VALUES ('283','zhuanjiazixun','article/index/id/302');
INSERT INTO `rb_router` VALUES ('284','zhuanjiajieda','article/index/id/303');
DROP TABLE IF EXISTS `rb_test`;
CREATE TABLE `rb_test` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `tid` varchar(50) NOT NULL COMMENT '所属分类',
  `title` varchar(100) NOT NULL COMMENT '测试标题',
  `keywords` varchar(100) NOT NULL COMMENT '关键字',
  `description` varchar(200) NOT NULL COMMENT '描述',
  `img` varchar(100) NOT NULL COMMENT '预览图片',
  `content` longtext COMMENT '内容',
  `add_time` int(10) DEFAULT NULL COMMENT '录入时间',
  `update_time` int(10) DEFAULT NULL COMMENT '修改时间',
  `adder_id` int(10) NOT NULL COMMENT '录入人',
  `sort` smallint(5) NOT NULL DEFAULT '0' COMMENT '排序值',
  `apv` smallint(5) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `rewrite` varchar(50) NOT NULL COMMENT 'URL重写值',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态 1:启用,0:禁用',
  `template` varchar(50) DEFAULT NULL COMMENT '使用模板',
  `isb` tinyint(1) NOT NULL DEFAULT '0' COMMENT '加粗',
  `isi` tinyint(1) NOT NULL DEFAULT '0' COMMENT '斜体',
  `tcolor` char(10) DEFAULT NULL COMMENT '颜色',
  `attrtj` varchar(30) DEFAULT NULL COMMENT '推荐',
  `attrtt` varchar(30) DEFAULT NULL COMMENT '头条',
  `outurl` varchar(150) DEFAULT NULL COMMENT '外部网址',
  PRIMARY KEY (`id`),
  KEY `tid` (`tid`),
  KEY `title` (`title`),
  FULLTEXT KEY `content` (`content`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
INSERT INTO `rb_test` VALUES ('13','264,268','CMSHead V2.0_20130203下载（最后更新2013-03-01）','','','514e09f14e030.jpg','<span style=\"font-size:16px;\">这是后台通过 架构管理-&gt;模块管理-&gt;Admin-&gt;新增，添加出来的Test模块。复制文章模型模板，然后点代码自动完成，增减一些字段保存，然后点击“创建MVC”，选择文章模板，然后选择一些对应关系，以及输入框类型。点击创建MVC，就出来了。</span><p><span style=\"font-size:16px;\">这样创建一个新的模块是不是很快速啊？完了之后，如果有什么需要定制的东西，你还可以打开MVC页面单独修改之。</span></p><p><br /></p><p><span style=\"font-size:16px;\"><strong><span style=\"color:#ff0000;\">最后更新2013-03-01</span></strong><br /><br />20130203以来的主要更新：<br />将TP框架升级到了最新版——ThinkPHP3.1.2云引擎版本 &nbsp;http://www.thinkphp.cn/down/282.html<br />修改了升级后的相关问题，主要是取静态变量的方法，以及其他一些明显的小问题。<br />改了seo方法，把$position变量改成了$parentCids数组，可以返回当前信息（栏目或详细页）的所有父栏目。那样做选中效果就更方便了。参见Home/default/Public/header.html的<br />#nav_{$parentCids[0]|default=0}{ font-weight:bolder; color:#F00}<br />修复了ch1,ch2缓存问题，事先判断是否有缓存，如果有则直接返回缓存（以前没这个判断）。优化了缓存取值：如果单独写cache:缓存名称，也可以，默认时间为60秒。<br /></span></p><p><span style=\"font-size:16px;\"><br /></span></p><p><span style=\"font-size:16px;\"><br /></span></p><p><span style=\"color:#ff0000;\"><span style=\"font-size:16px;\"><strong>CMSHead V2.0_20130203 本网下载地址：</strong><br /></span></span></p><p><span style=\"color:#ff0000;\"><a href=\"http://demo.cmshead.com/CMSHead.rar\"><span style=\"font-size:16px;\">http://demo.cmshead.com/CMSHead.rar</span></a></span></p><p><span style=\"font-size:16px;\"><br /></span></p><p><strong><span style=\"color:#ff0000;\"><span style=\"font-size:16px;\">CMSHead V2.0_20130203 视频音乐测试文件包：</span></span></strong></p><p><span style=\"color:#ff0000;\"><a href=\"http://demo.cmshead.com/Upload.rar\"><span style=\"font-size:16px;\">http://demo.cmshead.com/Upload.rar</span></a></span></p><p></p><p><strong><span style=\"color:#ff0000;\"><span style=\"font-size:16px;\"><br />CMSHead V2.0_20130203 插件分享机制实例（理论网苑公务员学习平台，下载安装后即可使用）：</span></span></strong></p><p><span style=\"color:#ff0000;\"><a href=\"http://demo.cmshead.com/CMSHead_App.rar\"><span style=\"font-size:16px;\">http://demo.cmshead.com/CMSHead_App.rar</span></a></span></p><p><span style=\"font-size:16px;\"><br /></span></p><p><span style=\"font-size:16px;\"><strong>有什么意见或建议，记得给我留言哦。点底部的留言反馈</strong>。</span></p>','1360060177','1364106177','1','100','9898','down1','1','','0','0','','','','');
DROP TABLE IF EXISTS `rb_ui`;
CREATE TABLE `rb_ui` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '模板对应表',
  `tplgroup` varchar(50) NOT NULL DEFAULT '' COMMENT '模板分组',
  `tplname` varchar(100) NOT NULL DEFAULT '' COMMENT '模板名称',
  `tplpath` varchar(100) NOT NULL DEFAULT '' COMMENT '模板路径',
  PRIMARY KEY (`id`),
  KEY `tplgroup` (`tplgroup`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
INSERT INTO `rb_ui` VALUES ('1','2013年default','栏目列表','{tplroot}default/Article/index.html');
INSERT INTO `rb_ui` VALUES ('2','2013年default','栏目信息','{tplroot}default/Article/view.html');
INSERT INTO `rb_ui` VALUES ('3','2013年theory','栏目列表','{tplroot}theory/Article/index.html');
INSERT INTO `rb_ui` VALUES ('23','2013robot','product','{tplroot}default/Product/product.html');
INSERT INTO `rb_ui` VALUES ('22','2013robot','join','{tplroot}default/about/join.html');
INSERT INTO `rb_ui` VALUES ('21','2013robot','intro','{tplroot}default/about/about.html');
INSERT INTO `rb_ui` VALUES ('20','2013robot','about','{tplroot}default/about/about.html');
INSERT INTO `rb_ui` VALUES ('24','2013robot','service','{tplroot}default/Service/service.html');
INSERT INTO `rb_ui` VALUES ('25','2013robot','question','{tplroot}default/Question/question.html');
INSERT INTO `rb_ui` VALUES ('26','2013robot','media','{tplroot}default/Press/press.html');
INSERT INTO `rb_ui` VALUES ('27','2013robot','faq','{tplroot}default/Question/faq.html');
DROP TABLE IF EXISTS `rb_user`;
CREATE TABLE `rb_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(20) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `bind_account` varchar(50) NOT NULL,
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login_ip` varchar(15) NOT NULL DEFAULT '',
  `login_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `verify` char(32) NOT NULL DEFAULT '',
  `email` varchar(150) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `create_time` int(10) unsigned NOT NULL,
  `update_time` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `type_id` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `info` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`account`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
INSERT INTO `rb_user` VALUES ('1','admin','系统管理员','21232f297a57a5a743894a0e4a801fc3','','1380106976','127.0.0.1','1','','rickshy1206@gmail.com','','1380078563','0','1','9','');
DROP TABLE IF EXISTS `rb_video`;
CREATE TABLE `rb_video` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(100) NOT NULL COMMENT '视频标题',
  `isb` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否加粗',
  `isi` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否斜体',
  `tcolor` char(10) DEFAULT NULL COMMENT '标题颜色',
  `keywords` varchar(100) DEFAULT NULL COMMENT '关键字',
  `description` varchar(200) DEFAULT NULL COMMENT '描述',
  `img` varchar(100) DEFAULT NULL COMMENT '小图片',
  `file` varchar(100) NOT NULL COMMENT '上传视频',
  `rewrite` varchar(50) DEFAULT NULL COMMENT 'URL重写',
  `sort` int(10) NOT NULL COMMENT '排序值',
  `tid` int(10) NOT NULL COMMENT '所属分类',
  `adder_id` int(10) NOT NULL COMMENT '录入人',
  `add_time` int(10) NOT NULL COMMENT '录入时间',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态',
  `attrtj` varchar(30) DEFAULT NULL COMMENT '推荐属性',
  `attrtt` varchar(30) DEFAULT NULL COMMENT '头条属性',
  `outurl` varchar(150) DEFAULT NULL COMMENT '外部网址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
INSERT INTO `rb_video` VALUES ('1','爆乳内衣模特表演相貌身材一流','0','0','','内衣 模特 爆乳','爆乳内衣模特表演相貌身材一流','510a0980addd0.jpg','http://player.youku.com/player.php/sid/XNDQyODQ5MTY4/v.swf','','22','252','1','1344518465','1','','','');
INSERT INTO `rb_video` VALUES ('3','江苏常熟','0','0','','','','50a5f6ba94387.jpg','50a5f6a4e98a0.wmv','','0','250','1','1353053400','1','','','');
INSERT INTO `rb_video` VALUES ('4','骏马奔腾flv','0','0','','','','','50d163b3c4a10.flv','','21','248','1','1353054482','1','','','');
INSERT INTO `rb_video` VALUES ('5','测试标题颜色样式头条图片等','1','0','#006600','','','5141cb2f9a224.jpg','','','0','248','1','1356578442','1','2,4','2,3','http://www.cmshead.com/');
INSERT INTO `rb_video` VALUES ('7','1111','0','0','','','','/Public/Upload/video/519f29b2b333f.jpg','/Public/Upload/video/519f299c92e01.flv','','0','248','1','1369385241','1','','','');
INSERT INTO `rb_video` VALUES ('8','11111111111111','0','0','','','','/Public/Upload/video/519f3423637a3.jpg','/Public/Upload/video/519f342377acf.flv','','0','248','1','1369388053','1','','','');
INSERT INTO `rb_video` VALUES ('9','2222222222','0','0','','','','','/Public/Upload/video/519f3519384ba.flv','','0','248','1','1369388307','1','','','');
INSERT INTO `rb_video` VALUES ('10','3333','0','0','','','','/Public/Upload/video/519f3aa9dea89.jpg','/Public/Upload/video/519f3aa9e8649.flv','','0','248','1','1369388551','1','','','');
INSERT INTO `rb_video` VALUES ('11','1111111111','0','0','','','','/Public/Upload/video/519f412a39ba0.gif','/Public/Upload/video/519f405c58d9f.flv','','0','248','1','1369390085','1','','','');
