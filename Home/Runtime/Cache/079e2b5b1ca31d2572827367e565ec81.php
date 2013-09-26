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
        <div class="rbox5">
            <div class="rbox5_top"></div>
            <div class="rbox5_center">
                <h1><?php echo ($info["title"]); ?></h1>
                <p id="content"><?php echo ($info["content"]); ?></p>                    
                <div class="clear"></div>
                <div class="page"><?php echo ($pages); ?></div>                    
            </div>
            <div class="rbox5_bottom"></div>
        </div><!--文章信息-->
        
        <div class="rbox5">
            <div class="rbox5_top"></div>
            <div class="rbox5_center">
                <div class="pre">上一篇：<?php if(!empty($pre)): ?><a href="<?php echo ($pre["url"]); ?>"><?php echo ($pre["title"]); ?></a><?php else: ?>无上一篇<?php endif; ?></div>
                <div class="next">下一篇：<?php if(!empty($next)): ?><a href="<?php echo ($next["url"]); ?>"><?php echo ($next["title"]); ?></a><?php else: ?>无一下篇<?php endif; ?></div>
            </div>
            <div class="rbox5_bottom"></div>
        </div><!--上一篇下一篇-->

        <div class="rbox5">
            <div class="rbox5_top"></div>
            <div class="rbox5_center">
				<h2>相关信息</h2>
				<?php if(!empty($info['keywords'])): $xglist = chRelate($info['keywords'],'Article');?>
                    <?php if(is_array($xglist)): $i = 0; $__LIST__ = $xglist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["id"]) != $info['id']): ?><div class="pre">
                            <a href="<?php echo ($vo["url"]); ?>" title="<?php echo ($vo["title"]); ?>"><?php echo (cutstr($vo["title"],20)); ?></a>
                        </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    <?php if( count($xglist)<2 ){?>
                        <?php $_result=ch2($classid,'where:status=1 and id!='.$info['id'],'order:sort DESC,add_time DESC','limit:10','cache:Article_xiangguan'.$info['id'].':60');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pre">
                            <a href="<?php echo ($vo["url"]); ?>" title="<?php echo ($vo["title"]); ?>"><?php echo (cutstr($vo["title"],20)); ?></a>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php }?>
                <?php else: ?>      
                    <?php $_result=ch2($classid,'where:status=1 and id!='.$info['id'],'order:sort DESC,add_time DESC','limit:10','cache:Article_xiangguan'.$info['id'].':60');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pre">
                        <a href="<?php echo ($vo["url"]); ?>" title="<?php echo ($vo["title"]); ?>"><?php echo (cutstr($vo["title"],20)); ?></a>
                    </div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </div>
            <div class="rbox5_bottom"></div>
        </div><!--随机推荐-->

        <div class="rbox5">
            <div class="rbox5_top"></div>
            <div class="rbox5_center">
				<h2>随机推荐</h2>
				<?php if(is_array($rand)): $i = 0; $__LIST__ = $rand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pre"><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="rbox5_bottom"></div>
        </div><!--随机推荐-->
		
        <div class="rbox5">
            <div class="rbox5_top"></div>
            <div class="rbox5_center">
                <?php if(!empty($msg_list)): if(is_array($msg_list)): $i = 0; $__LIST__ = $msg_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="msg_list">
	                    <div class="left">
	                    	<img class="avatar" src="__PUBLIC__/Theme/Front/default/msg1.png"/>
	                    </div>
	                    <div class="right"><span><?php echo ($vo["adder_name"]); ?>&nbsp;说：<?php echo ($vo["content"]); ?></span></div>
                    	<div class="clear"></div>
                    </div>
					<?php if(!empty($vo["reply"])): ?><div class="com_list">
						<?php if(is_array($vo["reply"])): $i = 0; $__LIST__ = $vo["reply"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$reply): $mod = ($i % 2 );++$i;?><div class="left">
	                    	<img class="avatar" src="__PUBLIC__/Theme/Front/default/msg1.png"/>
	                    </div>
						<div class="right"><?php echo ($reply["adder_name"]); ?> ：<?php echo ($reply["content"]); ?></div>
						<div class="clear"></div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                    	暂无评论！<?php endif; ?>
            </div>				
            <div class="rbox5_bottom"></div>
        </div><!--评论列表-->
        
        <div class="rbox5">
            <div class="rbox5_top"></div>
            <div class="rbox5_center">
            	<h2>发表评论</h2>
            	<div id="postTemp"></div>
	            <div class="sub_form">
                	<input type="hidden" name="AppParams" id="AppParams" value="<?php echo encode($App['app'][0].'┆'.($info['id'] ? $info['id'] : ($App['vars']['id'] ? $App['vars']['id'] : $_GET['id'])).'┆'.$App['url']); ?>" />
	           		<input type="hidden" name="pid" id="pid" value="0" />
	           		<div>
	               	<table><tr><td>
	               	<img src="__APP__/common/verify" alt="点击刷新验证码" id="verifyImg" class="code" onclick="this.src+='?' + Math.random();" /></td><td>
	                     <input type="text" name="verify" id="verify" class="short" maxlength="4" />
	                     <label class="required">验证码（必须）</label></td></tr></table>
	                </div>
	                <div>
                        <input type="text" name="adder_name" id="adder_name" class="long" />
                        <label class="required">您的大名（必须）</label>
                    </div>
                    <div>
                        <input type="text" name="adder_email" id="adder_email" class="long" />
                        <label class="required">您的Email（必须）</label>
                    </div>
	                <div>
	                     <textarea name="content" id="content"></textarea>
	                     <label class="required">评论内容（必须）</label>
	                </div>
					<div>
	                     <input type="submit" class="button" value="" onclick="return chksub()" />
	           		</div>
	       		</div>
            </div>
            <div class="rbox5_bottom"></div>            
        </div><!--发表评论-->
        <script type="text/javascript">
        $(document).ready(function(){
        	$('#pid').attr('value',0);
			$('.reply').click(function(){
				$('#pid').attr('value',$(this).attr('pid'));
				$('#postTemp').prev().html('回复评论: '+$(this).next().html()); 
				$('#content').focus();
			})
        });  
        
        function chksub(){
			if($('#verify').val()==''){
				alert('请填写验证码！');
				$('#verify').focus();
				return false;
			}
			if($('#adder_name').val()==''){
				alert('请填您的大名！');
				$('#adder_name').focus();
				return false;
			}
			if($('#adder_email').val()==''){
				alert('请填写您的Email！');
				$('#adder_email').focus();
				return false;
			}
			if($('#content').val()==''){
				alert('请填写评论内容！');
				$('#content').focus();
				return false;
			}
			$("#postTemp").html('<div class="pop">正在发表，请稍等。。。</div>');
			$.post("__APP__/message/add", {"verify":$("#verify").val(),"content":$("#content").val(),"adder_email":$("#adder_email").val(),"adder_name":$("#adder_name").val(),"pid":$("#pid").val(),"type":1,"fromtitle":document.title,"AppParams":$("#AppParams").val()}, function(msg) {
				$("#postTemp").html(msg);
				$("#verify").val('');
				$("#content").val('');
				$("#verifyImg").attr("src",function(){this.src+='?'+Math.random();});
				$(".pop").fadeOut(3000);
			});
        }      
        </script>
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