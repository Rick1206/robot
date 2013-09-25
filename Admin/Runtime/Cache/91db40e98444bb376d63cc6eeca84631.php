<?php if (!defined('THINK_PATH')) exit();?><div class="accordion" fillSpace="sideBar">
	<?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="accordionHeader">
		<h2><span>Folder</span><?php echo ($BMENU[$key]); ?></h2>
	</div>
	<div class="accordionContent">
		<ul class="tree treeFolder">
			<?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if(($item['access']) == "1"): ?><li><a href="__APP__/<?php echo ($item['name']); ?>" target="navTab" rel="<?php echo ($item['name']); ?>"><?php echo ($item['title']); ?></a><?php echo ($item["classTreeHTML"]); ?></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<script src="__PUBLIC__/Theme/Admin/Dwz/js/speedup.js" type="text/javascript"><!--后台自定义全局函数--></script>