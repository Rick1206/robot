<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />
<!--[if lt IE 9]><script type="text/javascript">"abbr,article,aside,audio,bdi,canvas,data,datalist,details,figcaption,figure,footer,header,hgroup,mark,meter,nav,output,progress,section,summary,subline,time,video".replace(/\w+/g,function(n){document.createElement(n)})</script><![endif]-->
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Theme/Front/default/style.css" />
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
                            <a href="javascript:;" class="first-child register-s">注册</a>
                            <a href="javascript:;" class="login-s">登陆</a>
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


    <div class="wrap_left">
        <?php $_result=Sys::page($keytype, 'page:10');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $trueModule=$vo['module_name'] ? $vo['module_name'] : $keytype;?>
        <div class="art_block">
            <div class="art_left"></div>
			<div class="art_center">
                <div class="left"><?php if(empty($vo["img"])): ?><img src="__PUBLIC__/images/noimg.jpg" /><?php else: ?><a href="<?php echo (chimg($vo["img"],$trueModule)); ?>" target="_blank"><img src="<?php echo (chimg($vo["img"],$trueModule,100,100)); ?>" border="0" /></a><?php endif; ?></div>
                <div class="right">
                    <h1><a href="<?php echo ($vo["url"]); ?>" <?php if(empty($vo["Theory_user"]["u_endtime"])): ?>style="color:#00F"<?php endif; ?>><?php if(($vo["infotype"]) == "1"): ?><img src="__PUBLIC__/images/ico1.gif" /><?php endif; echo setSearchKey($vo[trueMapField($trueModule,'title')], $keyword); ?></a></h1>
                    <div>[<a href="<?php echo ($vo["classurl"]); ?>"><?php echo ($vo["classtitle"]); ?></a>]  点击次数：<?php echo ($vo["apv"]); ?>次  发表时间：<?php echo (date('Y-m-d H:i:s',$vo["add_time"])); ?></div>
                    <p><?php echo (setsearchkey($vo['content'],$keyword,130)); ?></p>
                </div>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?><!--文档列表-->
        <div class="clear"></div>
        <div class="page"><?php echo Sys::page();?></div>
    </div>        
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