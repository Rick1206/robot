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


    <div class="wrap_left">
        <!--此处是显示当前栏目的下级栏目，请收藏此段代码以作参考 start-->
    	<?php $cid = $App['vars']['id'] ? $App['vars']['id'] : $_GET['id'];?>
        <?php $childClassList = ch1('class',$cid);?>
        <?php if(!empty($childClassList)): ?><div style="width:676px; border:1px #CCC solid; padding:2px; margin:0 2px 20px 2px;">
            <h2 style="margin:0">
            <?php if(is_array($childClassList)): $i = 0; $__LIST__ = $childClassList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["classtitle"]); ?></a>&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
            </h2>
        </div><?php endif; ?>
        <!--此处是显示当前栏目的下级栏目，请收藏此段代码以作参考 end-->
        <!--pageBox-->
        <div id="pageBox">
        	<?php $dataFrom = $cid ? $cid : '新闻';?>
            <?php $_result=Sys::page($dataFrom,'field:id,title,isb,isi,tcolor,add_time,img,content,apv','page:5');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!--page:5:pageBox则为ajax分页模式-->
            <div class="art_block">
                <div class="art_left"></div>
                <?php if($vo["sort"] > 0): ?><div class="art_center art_top">
                <?php else: ?>
                <div class="art_center"><?php endif; ?>
                    <div class="left"><img src="<?php echo (chimg($vo["img"],$vo['module_name'],100,100)); ?>" /></div>
                    <div class="right">
                        <h1><a href="<?php echo ($vo["url"]); ?>" title="<?php echo ($vo["title"]); ?>"><?php echo (titlestyle(cutstr($vo["title"],60,1),$vo['tcolor'],$vo['isb'],$vo['isi'])); ?></a></h1>
                        <div>[<a href="<?php echo ($vo["classurl"]); ?>"><?php echo ($vo["classtitle"]); ?></a>] <?php if(!empty($vo["apv"])): ?>点击次数：<?php echo ($vo["apv"]); ?>次<?php endif; ?> 发表时间：<?php echo (date('Y-m-d H:i:s',$vo["add_time"])); ?></div>
                        <p><?php echo (encode($vo["content"],300)); ?></p>
                    </div>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?><!--文档列表-->
            <div class="clear"></div>
            <div class="page"><?php echo Sys::page();?></div>
        </div>
        <!--pageBox-->
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