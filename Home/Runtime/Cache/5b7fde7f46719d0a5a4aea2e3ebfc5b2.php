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
</script>
<style type="text/css">
#nav_<?php echo (($parentCids[0])?($parentCids[0]):0); ?>{ 
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


<script type="text/javascript" src="__PUBLIC__/Js/flowplayer-3.2.12.min.js"></script>

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
		<div class="short-img">

			<img src="__PUBLIC__/Theme/Front/images/about-short-pic.png" alt=""/>
		</div>
	</div>
</section>
<section class="tab-top">
	<div class="tabs">

		<a href="yuanqujieshao.html" class="selected">园区介绍</a>
		<a href="jiaruxiehui.html">加入协会</a>

	</div>
	<h1 class="title-line"><span>园区介绍</span>
	<hr>
	</h1>
</section>
<section class="about-video pg-part-bg">
	<div class="wrap">
		<div class="fn-left">
			<a href="__PUBLIC__/Flv/1.flv"
			style="display:block;width:620px;height:299px"
			id="player" ><img src="__PUBLIC__/Theme/Front/images/video-pic.jpg" alt=""/></a>
		</div>
		<div class="fn-left text-box">
			<h1>顾村 上海机器人产业园
			<br>
			梦开始的地方</h1>
			<p>
				2012年9月20日上海经济和信息化委员会 正式批准建设顾村.上海机器人产业园
			</p>
		</div>
	</div>
</section>
<section class="about-industrial">
	<div class="row-fluid">
		<div class="span2"><img src="__PUBLIC__/Theme/Front/images/logo.jpg" alt=""/>
		</div>
		<div class="span10 pt">
			<p class="pb">
				上海机器人产业园紧邻上海绕城高速与宝安公路，通达上海大学2公里、宝山主城区6公里、距上海火车站12公里，虹桥机场18公里。
			</p>
			<p>
				上海机器人产业园是上海市经信委同意建设的第一家机器人产业园区，占地面积达到4635亩，通过引进以机器人为主的智能装备制造企业，逐步淘汰现有低端落后产业，同时通过整机企业带动精密机床、仪器仪表、零部件等相关制造业的发展，并将引导园区内部分传统企业配合机器人产业完成高端生产服务的转型。 根据规划，该园区到2017年要引进国内外机器人制造相关企业机构600家，计划招商引资额度达到200亿元，力争成为中国智能装备制造业的示范基地。
			</p>
		</div>
	</div>
	<div class="row-fluid pt">
		<div class="span4">
			<img src="__PUBLIC__/Theme/Front/images/pic_07.jpg" alt=""/>
			<h1 class="tit">三区</h1>
			<hr class="hr-bold"/>
			<ul id="myTab" class="nav-tabs">
				<li class="active">
					第一区
				</li>
				<li>
					第二区
				</li>
				<li>
					第三区
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active">
					<p>
						机器人研发及成果转化区：以现有的机器人企业为龙头，向四周延展与扩张，实现以机器人产业为主体的智能装备制造产业集群。逐步形成工业机器人产业园、服务机器人产业园、机器人设计创新园
					</p>
				</div>
				<div class="tab-pane">
					2
				</div>
				<div class="tab-pane">
					3
				</div>
			</div>
		</div>
		<div class="span4">
			<img src="__PUBLIC__/Theme/Front/images/pic_08.jpg" alt=""/>
			<h1 class="tit">两轴</h1>
			<hr class="hr-bold"/>
			<p class="em">
				即商务轴与景观轴
			</p>
			<p>
				商务轴是沿友谊西路两侧，打造园区商务办公及交通便捷的主干道
				<br>
				景观轴是联系南北两侧的园区生态景观轴线
			</p>
		</div>
		<div class="span4">
			<img src="__PUBLIC__/Theme/Front/images/pic_09.jpg" alt=""/>
			<h1 class="tit">一核</h1>
			<hr class="hr-bold"/>
			<p class="em">
				即机器人产业园区公共服务核心区
			</p>
			<p>
				主要建设机器人主题公园、机器人科技大厦、上海机器人博物馆、国际机器人上海展示交易中心、国际机器人上海科技财富论坛、上海机器人研究所、上海机器人学院等
			</p>
		</div>
	</div>
	<div class="">
		<p class="pb">
			上海机器人产业园区的功能定位为一主一辅一配套
			<br>
			即以机器人产业链为核心的产业集群，主要包括汽车、电子、钢铁、航空航天等行业为主的工业机器人和以家庭机器人、医疗机器人等为主的服务机器人，研发关键核心部件制造、机器人应用开发与组装、以及机器人应用技术培训、机器人产业文化等。
		</p>
		<p>
			上海机器人的未来定义了尖端人士的创业梦想。机器人产业园的定位还包括了服务机器人研发、设计、后台服务、软件开发、旅游文化等跟机器人有关的全产业链。
		</p>
	</div>
</section>
<script>
	flowplayer("player", "__PUBLIC__/Swf/flowplayer-3.2.16.swf"); 
</script>
<footer>
	<div class="map-list">
		<div class="wrap">
			<ul class="list">
				<?php $_result=ch1('category','0','13','class0:0');if(is_array($_result)): $k = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li <?php if($k == '1'): ?>class="first-child"<?php endif; ?>>
						<h1><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["classtitle"]); ?></a></h1>
						<?php $vo['sub_nav'] = ch1('class',$vo['classid']);?>
						<?php if(!empty($vo["sub_nav"])): if(is_array($vo["sub_nav"])): $i = 0; $__LIST__ = $vo["sub_nav"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><a href="<?php echo ($sub["url"]); ?>"><?php echo ($sub["classtitle"]); ?></a><?php endforeach; endif; else: echo "" ;endif; endif; ?>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>

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