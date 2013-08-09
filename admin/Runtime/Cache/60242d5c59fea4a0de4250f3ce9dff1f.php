<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>CMS</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<link type="text/css" href="../Public/assets/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="../Public/css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" />
		<link type="text/css" href="../Public/assets/css/font-awesome.min.css" rel="stylesheet" />

		<link type="text/css" href="../Public/assets/css/docs.css" rel="stylesheet">
        <link type="text/css" href="../Public/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
        
		<script type="text/javascript" src="../Public/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="../Public/js/jquery-ui-1.9.2.custom.min.js"></script>
		<script type="text/javascript" src="../Public/js/jquery.form.js"></script>
		
		<base target="main" />
	</head>
	<body>
		<div class="top">
			<div class="logo">
				<!-- 此CMS后台建议使用Chrome体验 -->
				<!-- <a href="__APP__">YuFuCMS管理平台</a> -->
			</div>
			<div>
				欢迎您！[<?php echo (session('loginUserName')); ?>]
				<a href="<?php echo U('Public/password');?>" class="textline">修改密码</a>
				<a href="<?php echo U('Public/profile');?>" class="textline">修改资料</a>
				<a href="<?php echo U('Public/logout');?>" class="textline" target="_top">退 出</a> | <a href="__ROOT__/" target="_blank" class="textline">网站首页</a>
				<a href="<?php if(empty($_SESSION['yufu5url'])): ?>http://www.yufu5.com/doc/<?php else: echo (session('yufu5url')); ?>/doc/<?php endif; ?>" target="_blank" class="textline">帮助中心</a>
			</div>
		</div>
		
		<div id="tabs">
			<ul>
				<li class="bgn">
					<span><em>
						<a data-main-url="<?php echo U('Public/main');?>" data-menu-url='<?php echo U('Public/menu',array('title'=>'内容管理'));?>' href='javascript:;'>起始页</a>
						<!-- <a href="#" onClick="sethighlight(0); parent.menu.location='<?php echo U('Public/menu',array('title'=>'内容管理'));?>'; parent.main.location='<?php echo U('Public/main');?>'; return false;">起始页</a> -->
						</em></span>
				</li>
				<?php if(is_array($nodeGroupList)): $i = 0; $__LIST__ = $nodeGroupList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><li>
						<span><em>
							<a href='javascript:;'><?php echo ($tag); ?></a>
							<!-- <a href="#" onClick="sethighlight(<?php echo ($i); ?>); parent.menu.location='<?php echo U('Public/menu',array('tag'=>$key,'title'=>$tag));?>'; return false;"><?php echo ($tag); ?></a> -->
							</em></span>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				<li>
					<span><em>
						<a href='javascript:;'>扩展功能</a>
						<!-- <a href="#" onClick="sethighlight(4); parent.menu.location='<?php echo U('Public/menu',array('tag'=>0));?>'; parent.main.location='<?php echo U('other/index');?>'; return false;">扩展功能</a> -->
						</em></span>
				</li>
			</ul>
		</div>

		<script type="text/javascript">
			function sethighlight(n) {
				var lis = document.getElementsByTagName('span');
				for (var i = 0; i < lis.length; i++) {
					lis[i].className = '';
				}
				lis[n].className = 'cur';
			}

			//sethighlight(0);

			$(function(){
				jQuery('#tabs').tabs();
				console.log("init");
			});

		</script>
	</body>
</html>