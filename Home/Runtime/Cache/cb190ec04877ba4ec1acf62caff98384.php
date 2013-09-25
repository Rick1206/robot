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
      <p>自主机器人系列产品整体技术性能达到国内同类产品的先进水平 <br>
        运用于我国汽车、电子电器等行业</p>
      <a href="" class="more">了解更多</a>
    </div>
    <div class="short-img"><img src="__PUBLIC__/Theme/Front/images/about-short-pic.png" alt=""/></div>
  </div>
</section>
<section class="tab-top">
  <div class="tabs">
    <a href="<?php echo U('Index/trends');?>">行业动态</a>
    <a href="<?php echo U('Index/press');?>" class="selected">公司新闻</a>
    <a href="<?php echo U('Index/download');?>">资料下载</a>
  </div>
</section>
<section class="dynamic wrap">
  <h1 class="title-line"><span>公司新闻</span><hr></h1>
  <div class="row-fluid">

    <div class="span4 index-ref-block">
      <img src="__PUBLIC__/Theme/Front/images/pic.jpg" alt=""/>
      <p class="title">会说话的机器人 帮助孩子减轻在医院的痛苦</p>
      <hr>
      <p>把机器人放在眼睛里做医疗手术可能是下一个创新趋势，苏黎世的研究人员正在建立微型机器人用来帮助精致的手术，机器人有一个可伸缩的针来探测身体部位（眼睛），针的直径只有4分之一毫米 </p>
      <a href="javascript:;" data-post="<?php echo U('Index/test');?>" class="more more-article">了解更多</a>
    </div>
    <div class="span4 index-ref-block">
      <img src="__PUBLIC__/Theme/Front/images/pic.jpg" alt=""/>
      <p class="title">会说话的机器人 帮助孩子减轻在医院的痛苦</p>
      <hr>
      <p>把机器人放在眼睛里做医疗手术可能是下一个创新趋势，苏黎世的研究人员正在建立微型机器人用来帮助精致的手术，机器人有一个可伸缩的针来探测身体部位（眼睛），针的直径只有4分之一毫米 </p>
      <a href="javascript:;" data-post="<?php echo U('Index/test');?>" class="more more-article">了解更多</a>
    </div>
    <div class="span4 index-ref-block">
      <img src="__PUBLIC__/Theme/Front/images/pic.jpg" alt=""/>
      <p class="title">会说话的机器人 帮助孩子减轻在医院的痛苦</p>
      <hr>
      <p>把机器人放在眼睛里做医疗手术可能是下一个创新趋势，苏黎世的研究人员正在建立微型机器人用来帮助精致的手术，机器人有一个可伸缩的针来探测身体部位（眼睛），针的直径只有4分之一毫米 </p>
      <a href="javascript:;" data-post="<?php echo U('Index/test');?>" class="more more-article">了解更多</a>
    </div>
  </div>
</section>

<section class="list-block">
  <div class="wrap">
    <?php for($i=0;$i<10;$i++){?>

    <?php if($i%2==0){?>
    <div class="row-fluid">
      <?php } ?>

      <div class="span6 list-block-item">
        <div class="span3"><img src="__PUBLIC__/Theme/Front/images/default.jpg" alt=""/></div>
        <div class="span9">
          <div class="row-fluid tit">
            <div class="span9"><h1>都市园区服务功能</h1></div>
            <div class="span3 text-r">2011/08/23 </div>
          </div>
          <p>
            通过展示、论坛、培训等形式，提高机器人产业园区的发展水平与管理服务能力。包括：园区管理培训和交流、园区星级评定服务等。
          </p>
        </div>
      </div>

      <?php if($i%2==1){?>
    </div>
    <?php } ?>

    <?php } ?>
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