<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="__URL__" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ($numPerPage); ?>"/>
</form>

<div class="page">
	<div class="layoutBox">
		<div class="panelBar">
			<ul class="toolBar">
				<li><a class="edit" href="__URL__/index/root/1" target="navTab" rel="File" title="文件列表"><span>返回根目录</span></a></li>
				<li><a class="delete" href="__URL__/index/up/1" target="navTab" rel="File" title="文件列表"><span>上层目录</span></a></li>
                <li><a class="edit" href="__APP__/Ui" target="navTab" rel="Ui"><span>模板管理</span></a></li>
				<li><a class="add" href="__URL__/upload/" target="dialog" height="150"><span>上传到当前目录</span></a></li>
			</ul>
		</div>
		<table class="list" width="100%" layoutH="20">
			<thead>
			<tr>
				<th>文件名</th>
				<th>文件大小</th>
				<th>最后修改时间</th>
				<th>操作</th>
			</tr>
			</thead>
			<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_node" rel="<?php echo ($vo['id']); ?>">
					<td>
						<?php if(($vo["type"]) == "dir"): ?><a href="__URL__/index/path/<?php echo ($vo['filename']); ?>/" target="navTab" rel="__MODULE__"><?php echo ($vo['fileimg']); ?> <?php echo ($vo['filename']); ?></a>
						<?php else: ?>
						<?php echo ($vo['fileimg']); ?> <?php echo ($vo['filename']); endif; ?>
					</td>
					<td><?php echo number_format($vo['size']/1024,2); ?> KB</td>
					<td><?php echo (date('Y-m-d H:i:s',$vo['ctime'])); ?></td>
					<td>
						<a href="__URL__/rename?filename=<?php echo ($vo['filename']); ?>" target="dialog" width="400" height="180">【重命名】</a>
						<a href="__URL__/foreverdelete/filetype/<?php echo ($vo['type']); ?>?filename=<?php echo ($vo['filename']); ?>" target="ajaxTodo" calback="navTabAjaxMenu" title="你确定要删除吗？" warn="请选择一条记录">【删除】</a>
						<a href="__URL__/move?filename=<?php echo ($vo['filename']); ?>" target="dialog" width="560" height="180">【移动】</a>
						<?php if(in_array(($vo["ext"]), explode(',',"htm,html,shtml,php,css,xml,txt,js"))): ?><a href="__URL__/edit?filename=<?php echo ($vo['filename']); ?>" target="navTab" width="560">【编辑】</a><?php endif; ?>						
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
		
	</div>
</div>