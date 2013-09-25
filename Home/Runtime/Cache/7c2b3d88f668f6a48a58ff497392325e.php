<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Theme/Front/default/style.css" />
<script type="text/javascript" src="__PUBLIC__/Js/lib/sea.js" id="seajsnode"></script>

<script type="text/javascript">
        seajs.config({
            alias: {
                'jquery': '__PUBLIC__/Js/lib/jquery-1.10.2.min.js',
                'bpopup': '__PUBLIC__/Js/lib/jquery.bpopup.min.js',
                'carouFredSel':'__PUBLIC__/Js/lib/jquery.carouFredSel-6.2.0-packed.js',
                'dot':'__PUBLIC__/Js/lib/doT.min.js'
            },
            base:'__PUBLIC__/Js',
            preload:['jquery']
        });
        seajs.use('china_robot');
    </script>

<!-- <script language="javascript" src="__PUBLIC__/Js/jquery.js"></script>
<script language="javascript" src="__PUBLIC__/Plugin/selectbox/selectbox.js">--> 
<!--下拉菜单美化--> 
</script>
<style type="text/css">
#nav_<?php echo (($parentCids[0])?($parentCids[0]):0); ?>{ 
	/*font-weight:bolder; color:#F00*/
	background-color: #0080FF;
	}

</style>
</head>
<body>
	
	<header>
    <div class="nav-bar wrap">
        <div class="row-fluid">
            <div class="span3">
                <div class="logo">
                    <a href="__ROOT__"></a>
                </div>
            </div>
            <div class="span9">
                <div class="login-bar">
                    <div class="l-wrap">
                        <div class="login">
                            <a href="#" class="first-child">注册</a>
                            <a href="#">登陆</a>
                        </div>
                        <div class="lang"><span class="icon-earth"></span><a href="#" class="tar-lang"><span>English</span></a></div>
                        <div class="search">
                            <form action="__APP__/Index/search/" method="post">
                                <input type="text" name="keyword" class="input-text" placeholder="搜索"/>
                                <input type="hidden" name="keytype" value="article,video" />
                                <button type="submit"></button>
                            </form>
                        </div>
                    </div>
                </div>
                <nav class="nav">
                    <ul>
                        <li id="nav_0"><a href="<?php echo (C("SITE_URL")); ?>/" class="first-child">首页</a></li>
                         <?php $_result=ch1('class','0','13','class0:0');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li id="nav_<?php echo ($vo["classid"]); ?>">            	           
				                <a href="<?php echo ($vo["url"]); ?>" ><?php echo ($vo["classtitle"]); ?></a>
				                <?php $vo['sub_nav'] = ch1('class',$vo['classid']);?>
				                <?php if(!empty($vo["sub_nav"])): ?><div class="drop-down">
				                        <?php if(is_array($vo["sub_nav"])): $i = 0; $__LIST__ = $vo["sub_nav"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><a href="<?php echo ($sub["url"]); ?>" id="nav_<?php echo ($sub["classid"]); ?>"><?php echo ($sub["classtitle"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
				                        <div class="clear"></div>                
				                    </div><?php endif; ?>         
				            </li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="bg-mask"></div>
</header>


<section class="pg-head">
	<div class="wrap">
		<div class="short">
			<h1>机器人改变世界 人类新成员</h1>
			<p>
				自主机器人系列产品整体技术性能达到国内同类产品的先进水平
				<br>
				运用于我国汽车、电子电器等行业
			</p>
			<a href="" class="more">了解更多</a>
		</div>
		<div class="short-img"><img src="__PUBLIC__/Theme/Front/images/about-short-pic.png" alt=""/>
		</div>
	</div>
</section>
<section class="tab-top">
	<div class="tabs">
		<a href="yuanqujieshao.html">园区介绍</a>
		<a href="jiaruxiehui.html" class="selected">加入协会</a>
	</div>
	<h1 class="title-line"><span>加入协会</span>
	<hr>
	</h1>
</section>
<section class="association-Introduction pg-part-bg">
	<div class="wrap row-fluid">
		<div class="span3"><img src="__PUBLIC__/Theme/Front/images/logo2.png" alt=""/>
		</div>
		<div class="span8">
			<h1>上海机器人协会 SHANGHAI ROBOT INDUSTRY ASSOCIATION
			<br>
			简称“SRIC”</h1>
			<p>
				协会积极组织上海产学研各界参与产业发展战略研究、产学研重大专项、产业孵化器建设，引导传统产业进入机器人产业领域。致力于传播、推广和发展先进的机器人技术和产品；搭建厂家和中国科学院交流和学习的平台；构筑企业和政府沟通的桥梁；推进机器人专业人才培养。
			</p>
		</div>
	</div>
</section>
<section class="association-function">
	<div class="wrap">
		<h1 class="title-line2"><span>协会职能</span>
		<hr/>
		</h1>
		<div class="row-fluid">
			<div class="span6">
				<ul>
					<li>
						• 宣传政府的政策、法规
					</li>
					<li>
						• 提出行业政策和法规的建议和意见
					</li>
					<li>
						• 进行行业统计、调查
					</li>
					<li>
						• 向有关部门反映会员、行业的困难和要求，并协助解决
					</li>
					<li>
						• 制订行业发展规划
					</li>
				</ul>
			</div>
			<div class="span6">
				<ul>
					<li>
						• 协助有关部门打击假冒伪劣活动
					</li>
					<li>
						• 组织有关政策法规、机器人安全标准及质量技术、企管等培训
					</li>
					<li>
						• 定期向会员提供国内外机器人行业的资讯，发布有关行业消息
					</li>
					<li>
						• 组织国内外同行之间的交流活动
					</li>
					<li>
						• 组织会员参加国内外大型机器人展览会
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="association-services pg-part-bg">
	<div class="wrap">
		<h1 class="title-line2"><span>会员服务介绍</span>
		<hr/>
		</h1>
		<div class="row-fluid">
			<div class="span6">
				<h2>资源共享</h2>
				<p>
					会员名录
					<br>
					协会网站(http://www.robotsh.cn）
					<br>
					每月最新政策信息
				</p>
			</div>
			<div class="span6">
				<h2>学习发展</h2>
				<p>
					中国科学院深圳先进技术研究院专家、教授技术支持
					<br>
					年度机器人行业优秀企业和个人评选
					<br>
					各类专业培训、研讨会、公开课
					<br>
					定期机器人专题论坛
					<br>
					行业专家、政府权威部门咨询服务
					<br>
					协助政府对机器人行业资源状况进行各类调研，分享调研结果
				</p>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
				<h2>会员名录</h2>
				<p>
					机器人产业园区企业间学习参观交流
					<br>
					赴外学习交流（副理事长免费）
					<br>
					协会理事会（副理事长、理事单位参加）
				</p>
			</div>
			<div class="span6">
				<h2>会员风采</h2>
				<p>
					休闲娱乐活动邀请赛
					<br>
					会员春、秋游
					<br>
					白领联谊会
					<br>
					亲子活动等
				</p>
			</div>
		</div>
	</div>
</section>
<section class="association-services2">
	<div class="wrap">
		<h1 class="title-line2"><span>会员服务</span>
		<hr/>
		</h1>
		<p class="em">
			我们热诚欢迎更多相关行业的公司/机构加入我们的行列，学习交流、共享资源，努力提升机器人企业的价值，为机器人行业发展做出贡献。
		</p>
		<div class="row-fluid steps">
			<div class="span4">
				<h1>入会申请</h1>

				<p>
					联系协会秘书处，申请加入协会。填写《上海机器人协会会员申请表》加盖公章，连同加盖公章的公司营业执照复印件一并寄送至协会秘书处。
				</p>
			</div>
			<div class="span4">
				<h1>资质审核</h1>

				<p>
					协会秘书处将对会员单位资质进行审核，经核准符合协会入会要求，3个工作日内与申请单位确认。
				</p>
			</div>
			<div class="span4">
				<h1>会员确认</h1>

				<p>
					协会收到会费后，5个工作日内将会费收据以快递方式寄出，并发放会员牌匾。
				</p>
			</div>
		</div>
		<div class="row-fluid pdf-row">

			<?php $_result=ch2('Download','field:title','limit:10');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="span4">
					<div class="span4">
						<img src="__PUBLIC__/Theme/Front/images/icon-pdf.png" alt=""/>
					</div>
					<div class="span8">
						<h3><?php echo ($vo["title"]); ?></h3>
						<a href="#" target="_blank" class="download">点击下载</a>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<!-- <div class="span4">
			<div class="span4"><img src="__PUBLIC__/Theme/Front/images/icon-pdf.png" alt=""/></div>
			<div class="span8">
			<h3>上海机器人协会会员申请表</h3>
			<a href="#" target="_blank" class="download">点击下载</a>
			</div>
			</div> -->

		</div>
	</div>
</section>
<section id="contact" class="pg-part-bg">
	<div class="wrap">
		<h1 class="title-line2"><span>联系我们</span>
		<hr/>
		</h1>
		<div class="row-fluid">
			<div class="span8">
				<img src="__PUBLIC__/Theme/Front/images/map-mask.jpg" alt=""/>
			</div>
			<div class="span4">
				<p class="way">
					电话：021-56022147
					<br>
					传真： 021-56022809
					<br>
					邮箱：robot@robotsh.cn
					<br>
					网址：http:// www.robotsh.cn
					<br>
					地址：上海市宝山富联路888号(上海机器人产业园内)
				</p>
			</div>
		</div>

	</div>
</section>
<footer>
    <div class="map-list">
        <div class="wrap">
            <ul class="list">
                <li class="first-child">
                    <h1><a href="<?php echo U('Index/about');?>">关于我们</a></h1>
                  <a href="<?php echo U('Index/about');?>">园区介绍</a>
                  <a href="<?php echo U('Index/join_us');?>">加入协会</a>
                </li>
                <li>
                    <h1><a href="<?php echo U('Index/product');?>">产品展示</a></h1>
                  <a href="<?php echo U('Index/product',array(id=>1));?>">教育</a>
                  <a href="<?php echo U('Index/product',array(id=>2));?>">医用</a>
                  <a href="<?php echo U('Index/product',array(id=>3));?>">益智</a>
                  <a href="<?php echo U('Index/product',array(id=>4));?>">民用</a>
                  <a href="<?php echo U('Index/product',array(id=>5));?>">工业 </a>
                </li>
                <li>
                    <h1><a href="<?php echo U('Index/service');?>">专业服务</a></h1>
                    <a href="<?php echo U('Index/service',array(id=>1));?>">租赁</a>
                    <a href="<?php echo U('Index/service',array(id=>2));?>">销售</a>
                    <a href="<?php echo U('Index/service',array(id=>3));?>">转让</a>
                </li>
                <li>
                    <h1><a href="<?php echo U('Index/question');?>">专家在线</a></h1>
                    <a href="<?php echo U('Index/question');?>">专家咨询</a>
                    <a href="<?php echo U('Index/faq');?>">专家解答</a>
                </li>
                <li>
                    <h1><a href="<?php echo U('Index/press');?>">媒体关系</a></h1>
                  <a href="<?php echo U('Index/trends');?>">行业动态</a>
                  <a href="<?php echo U('Index/press');?>">公司新闻</a>
                  <a href="<?php echo U('Index/download');?>">资料下载</a>
                </li>
                <li>
                    <h1><a href="<?php echo U('Index/join_us');?>#contact">联系我们</a></h1>
                </li>
            </ul>
            <div class="email">
                <a href="">email</a>
                <span class="icon-email"></span>
            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="row-fluid footer-end">
            <div class="span3">
                <a href="">网站地图</a>
                <span>|</span>
                <a href="">联系我们</a>
                <span>|</span>
                <a href="">隐私条款</a>
            </div>
            <div class="span6">
                <span>Copyright Reserved ? China Robot industry Design Application Center</span>
            </div>
            <div class="span3">
                <span class="s">Powered by <a href="http://www.emporioasia.com.cn/" target="_blank">EmporioAsia</a></span>
            </div>
        </div>
    </div>
</footer>
</body>
</html>