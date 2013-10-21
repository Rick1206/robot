<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>China robot</title>
    <!--<link rel="stylesheet" href="<?php echo W('Lessc',array(input=>'/public/less/style.less'));?>"/>-->
  <link rel="stylesheet" href="__PUBLIC__/css/style.css"/>
    <!--[if lt IE 9]><script type="text/javascript">"abbr,article,aside,audio,bdi,canvas,data,datalist,details,figcaption,figure,footer,header,hgroup,mark,meter,nav,output,progress,section,summary,subline,time,video".replace(/\w+/g,function(n){document.createElement(n)})</script><![endif]-->
    <script type="text/javascript" src="__PUBLIC__/js/lib/sea.js" id="seajsnode"></script>

    <script type="text/javascript">
        seajs.config({
            alias: {
                'jquery': '__PUBLIC__/js/lib/jquery-1.10.2.min.js',
                'bpopup': '__PUBLIC__/js/lib/jquery.bpopup.min.js',
                'carouFredSel':'__PUBLIC__/js/lib/jquery.carouFredSel-6.2.0-packed.js',
                'dot':'__PUBLIC__/js/lib/doT.min.js'
            },
            base:'__PUBLIC__/js',
            preload:['jquery']
        });
        seajs.use('china_robot');
    </script>
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
                            <a href="#" class="first-child register-s">注册</a>
                            <a href="javascript:;" class="login-s">登陆</a>
                        </div>
                        <div class="lang"><span class="icon-earth"></span><a href="#" class="tar-lang"><span>English</span></a></div>
                        <div class="search">
                            <form action="">
                                <input type="text" class="input-text" placeholder="搜索"/>
                                <button type="submit"></button>
                            </form>
                        </div>
                    </div>
                </div>
                <nav class="nav">
                    <ul>
                        <li><a href="__ROOT__" class="first-child">首页</a></li>
                        <li>
                          <a href="<?php echo U('Index/about');?>">关于我们</a>
                          <div class="drop-down">
                            <a href="<?php echo U('Index/about');?>">园区介绍</a>
                            <a href="<?php echo U('Index/join_us');?>">加入协会</a>
                          </div>
                        </li>
                        <li>
                          <a href="<?php echo U('Index/product');?>">产品展示</a>
                          <div class="drop-down">
                            <a href="<?php echo U('Index/product',array(id=>1));?>">教育</a>
                            <a href="<?php echo U('Index/product',array(id=>2));?>">医用</a>
                            <a href="<?php echo U('Index/product',array(id=>3));?>">益智</a>
                            <a href="<?php echo U('Index/product',array(id=>4));?>">民用</a>
                            <a href="<?php echo U('Index/product',array(id=>5));?>">工业 </a>
                          </div>
                        </li>
                        <li>
                          <a href="<?php echo U('Index/service');?>#lease">专业服务</a>
                          <div class="drop-down">
                            <a href="<?php echo U('Index/service');?>#lease">租赁</a>
                            <a href="<?php echo U('Index/service');?>#sell">销售</a>
                            <a href="<?php echo U('Index/service');?>#transfer">转让</a>
                          </div>
                        </li>
                        <li>
                          <a href="<?php echo U('Index/question');?>">专家在线</a>
                          <div class="drop-down">
                            <a href="<?php echo U('Index/question');?>">专家咨询</a>
                            <a href="<?php echo U('Index/faq');?>">专家解答</a>
                          </div>
                        </li>
                        <li>
                          <a href="<?php echo U('Index/press');?>">媒体关系</a>
                          <div class="drop-down">
                            <a href="<?php echo U('Index/trends');?>">行业动态</a>
                            <a href="<?php echo U('Index/press');?>">公司新闻</a>
                            <a href="<?php echo U('Index/download');?>">资料下载</a>
                          </div>
                        </li>
                        <li><a href="<?php echo U('Index/join_us');?>#contact">联系我们</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="bg-mask"></div>
</header>
<style type="text/css">
  .bdb-line{
    border-bottom: 1px solid #dadada;
    padding: 10px 0;
  }
  h1.title{
    font-weight: bold;
    font-size: 12px;
    line-height: 1;
    padding: 6px 0;
  }
  .s_more{
    display: inline-block;
    text-decoration: none;
    color: #737373;
    margin-top: 10px;
  }
  .s_more2{
    display: inline-block;
    color: #525252;
    margin-top: 5px;
  }
</style>
<section class="pg-head">
  <div class="wrap">
    <div class="short">
      <h1>机器人改变世界 人类新成员</h1>
      <p>自主机器人系列产品整体技术性能达到国内同类产品的先进水平 <br>
        运用于我国汽车、电子电器等行业</p>
      <a href="" class="more">了解更多</a>
    </div>
    <div class="short-img"><img src="__PUBLIC__/images/about-short-pic02.png" alt=""/></div>
  </div>
</section>

<div class="wrap lpt30 lpb30">
  <h1 class="title-line"><span>搜索结果</span><hr></h1>
  <div style="padding: 0 0 10px 0; border-bottom: 1px solid #dadada;">搜索‘机器人’获得约 50 条结果。</div>
  <div class="row-fluid bdb-line">
    <div class="span2">
      <span>2011/08/23 </span>
    </div>
    <div class="span10">
      <h1 class="title">吴先生:智能扫地机打扫完成后还是有卫生死角？	</h1>
      <p>智能扫地机的性质决定其功能，它不可以像我们人类那么聪明，毕竟是机器。但据扫地机品牌网的监测数据显示，智能扫地机的清扫覆盖率高达99.5%。也就是说，家庭中地面上99.5%的面积不要你清扫，可能为你节省多少时间。我们知道时间成本永远是最贵的，这样累积一下，一天、一月……</p>
      <a href="" class="s_more2">查看详细</a>
    </div>
  </div>
  <p><a href="#" class="s_more">查看所有50条结果</a></p>
</div>
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
                    <h1><a href="<?php echo U('Index/service');?>#lease">专业服务</a></h1>
                  <a href="<?php echo U('Index/service');?>#lease">租赁</a>
                  <a href="<?php echo U('Index/service');?>#sell">销售</a>
                  <a href="<?php echo U('Index/service');?>#transfer">转让</a>
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