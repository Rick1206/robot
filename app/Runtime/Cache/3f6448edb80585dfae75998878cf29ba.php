<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>China robot</title>
    <link rel="stylesheet" href="<?php echo W('Lessc',array(input=>'/public/less/style.less'));?>"/>
    <!--[if lt IE 9]><script type="text/javascript">"abbr,article,aside,audio,bdi,canvas,data,datalist,details,figcaption,figure,footer,header,hgroup,mark,meter,nav,output,progress,section,summary,subline,time,video".replace(/\w+/g,function(n){document.createElement(n)})</script><![endif]-->
    <script type="text/javascript" src="__PUBLIC__/js/lib/sea.js" id="seajsnode"></script>
    <script type="text/javascript">
        seajs.config({
            alias: {
                'jquery': '__PUBLIC__/js/lib/jquery-1.10.2.min.js',
                'bpopup': '__PUBLIC__/js/lib/jquery.bpopup.min.js',
                'carouFredSel':'__PUBLIC__/js/lib/jquery.carouFredSel-6.2.0-packed.js'
            }
        });
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
                            <a href="#" class="first-child">注册</a>
                            <a href="#">登陆</a>
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
                        <li><a href="">关于我们</a></li>
                        <li><a href="">产品展示</a></li>
                        <li><a href="">专业服务</a></li>
                        <li><a href="">专家在线</a></li>
                        <li><a href="">媒体关系</a></li>
                        <li><a href="">联系我们</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="bg-mask"></div>
</header>
<section class="index-banner">

</section>
<section class="index-banner-block"></section>
<footer>
    <div class="map-list">
        <div class="wrap">
            <ul class="list">
                <li class="first-child">
                    <h1><a href="">关于我们</a></h1>
                    <a href="">关于协会</a>
                    <a href="">关于应用中心</a>
                </li>
                <li>
                    <h1><a href="">产品展示</a></h1>
                    <a href="">教育</a>
                    <a href="">医用</a>
                    <a href="">益智</a>
                    <a href="">民用</a>
                    <a href="">工业 </a>
                </li>
                <li>
                    <h1><a href="">专业服务</a></h1>
                    <a href="">租赁</a>
                    <a href="">销售</a>
                    <a href="">转让</a>
                </li>
                <li>
                    <h1><a href="">专家在线</a></h1>
                    <a href="">专家咨询</a>
                    <a href="">专家解答</a>
                </li>
                <li>
                    <h1><a href="">媒体关系</a></h1>
                    <a href="">行业动态</a>
                    <a href="">公司新闻</a>
                    <a href="">资料下载</a>
                </li>
                <li>
                    <h1><a href="">联系我们</a></h1>
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
                <span>Copyright Reserved © China Robot industry Design Application Center</span>
            </div>
            <div class="span3">
                <span class="s">Powered by <a href="http://www.emporioasia.com.cn/" target="_blank">EmporioAsia</a></span>
            </div>
        </div>
    </div>
</footer>
</body>
</html>