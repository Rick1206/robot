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
                         <?php $_result=ch1('category','0','13','class0:60');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li id="nav_<?php echo ($vo["classid"]); ?>">            	           
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


<section class="index-banner">
  <div class="wrap">
    <ul>
      <li data-index="0" >
        <img class="pic" src="__PUBLIC__/Theme/Front/images/pic_04.png" alt=""/>
      </li>
      <li data-index="1">
        <img class="pic" src="__PUBLIC__/Theme/Front/images/pic_05.png" alt=""/>
      </li>
      <li data-index="2">
        <img class="pic" src="__PUBLIC__/Theme/Front/images/pic_06.png" alt=""/>
      </li>
    </ul>
  </div>
</section>
<section class="index-banner-block">
  <div class="banner-text wrap">
    <a href="javascript:;" class="index-banner-prev"></a>
    <a href="javascript:;" class="index-banner-next"></a>
    <div class="short">
      <h1>机器人改变世界 人类新成员</h1>
      <p>自主机器人系列产品整体技术性能达到国内同类产品的先进水平 <br>
        运用于我国汽车、电子电器等行业</p>
      <a href="" class="more">了解更多</a>
    </div>
    <div class="short">
      <h1>拓展机器人应用 引领企业战略转型</h1>
      <p>自主机器人系列产品整体技术性能达到国内同类产品的先进水平<br>
        运用于我国汽车、电子电器等行业</p>
      <a href="" class="more">了解更多</a>
    </div>
    <div class="short">
      <h1>拓展机器人应用 引领企业战略转型</h1>
      <p>自主机器人系列产品整体技术性能达到国内同类产品的先进水平<br>
        运用于我国汽车、电子电器等行业</p>
      <a href="" class="more">了解更多</a>
    </div>
  </div>
  <div class="index-banner-ctrl">
    <div class="wrap row-fluid">
      <?php for($i=0;$i<3;$i++){?>
      <div class="span4 index-banner-ctrl-it <?php echo $i==0?'selected':''?>">
        <div class="span5"><img src="__PUBLIC__/Theme/Front/images/pic_0<?php echo $i+1 ?>.png" alt=""/></div>
        <div class="span7 pt-01">
          <?php switch($i){ case '0' : ?>
          <p>输配电方案 <br>
            我们为增强电网可靠性及预防<br>
            大停电提供可持续的解决方案
          </p>
          <?php
 break; case '1' : ?>
          <p>车身总拼定位解决方案<br>
            我们顺应时代需求，推出柔性<br>
            车身总拼定位解决方案
          </p>
          <?php
 break; case '2' : ?>
          <p>车身总拼定位解决方案 <br>
            我们顺应时代需求，推出柔性<br>
            车身总拼定位解决方案
          </p>
          <?php } ?>
        </div>
        <span class="angle"></span>
      </div>
      <?php }?>
    </div>
  </div>
</section>
<section class="dynamic wrap">
  <h1 class="title-line"><span>设计应用中心动态</span><hr></h1>
    <div class="row-fluid">
   
      <div class="span4 index-ref-block">
        <img src="__PUBLIC__/Theme/Front/images/pic.jpg" alt=""/>
        <p class="title">都市园区服务功能</p>
        <hr>
        <p>通过展示、论坛、培训等形式，提高机器人产业园区的发展水平与管理服务能力。包括：园区管理培训和交流、园区星级评定服务等。 </p>
        <a href="yuanqujieshao.html" class="more">了解更多</a>
      </div>
  		
  		<div class="span4 index-ref-block">
        <img src="__PUBLIC__/Theme/Front/images/pic.jpg" alt=""/>
        <p class="title">都市园区服务功能</p>
        <hr>
        <p>通过展示、论坛、培训等形式，提高机器人产业园区的发展水平与管理服务能力。包括：园区管理培训和交流、园区星级评定服务等。 </p>
        <a href="jiaruxiehui.html" class="more">了解更多</a>
      </div>
      
      <div class="span4 index-ref-block">
        <img src="__PUBLIC__/Theme/Front/images/pic.jpg" alt=""/>
        <p class="title">都市园区服务功能</p>
        <hr>
        <p>通过展示、论坛、培训等形式，提高机器人产业园区的发展水平与管理服务能力。包括：园区管理培训和交流、园区星级评定服务等。 </p>
        <a href="meitiguanxi.html" class="more">了解更多</a>
      </div>
    </div>
</section>
<footer>
	<div class="map-list">
		<div class="wrap">
			<ul class="list">
				<?php $_result=ch1('category','0','13','class0:60');if(is_array($_result)): $k = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li <?php if($k == '1'): ?>class="first-child"<?php endif; ?>>
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