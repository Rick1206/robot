<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="__URL__" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ($numPerPage); ?>"/>
</form>

<div class="page">
	<div class="layoutBox">
        <?php if(!empty($_REQUEST['pid'])): ?><div class="panelBar">
			<ul class="toolBar">
				<?php if(($_GET['pid']) == "1"): ?><li><a class="add" href="__URL__/scannew" target="dialog" mask="true" width="700" height="600"><span>扫描新插件</span></a></li><?php endif; ?>
				<li><a class="add" href="__URL__/add/tid/<?php echo ($_REQUEST['tid']); ?>" target="dialog" mask="true" width="590" height="420"><span>新增</span></a></li>
				<li><a class="edit" href="__URL__/edit/id/{sid_node}" target="dialog" width="590" height="420" mask="true" warn="请选择一条记录"><span>修改</span></a></li>
				<li><a class="delete" href="__URL__/foreverdelete/id/{sid_node}/navTabId/__MODULE__" target="ajaxTodo" calback="navTabAjaxMenu" title="你确定要删除吗？" warn="请选择一条记录"><span>删除</span></a></li>
				<li><a class="add" href="__URL__/index/pid/<?php echo (getparentnodeid($_GET['pid'])); ?>/" target="navTab" rel="__MODULE__"><span>返回上层</span></a></li>
			</ul>
         </div><?php endif; ?>


		<table class="list" width="100%" layoutH="50">
			<thead>
			<tr>
				<th>编号</th>
				<th>名称</th>
				<th>显示名</th>
				<?php if(($level) == "2"): ?><th>分组</th><?php endif; ?>				
				<?php if(($level) == "2"): ?><th>模型</th><?php endif; ?>
				<th>排序</th>
				<th>状态</th>
				<th>操作</th>
			</tr>
			</thead>
			<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $child = M('Node')->where(array('pid'=>$vo['id']))->count(); $isExists = in_array(C('DB_PREFIX').strtolower($vo['name']), $tables) || is_Model($vo['id'],0); ?>
				<tr target="sid_node" rel="<?php echo ($vo['id']); ?>">
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php if(($child) > "0"): ?><a href="__URL__/index/pid/<?php echo ($vo['id']); ?>/" target="navTab" rel="__MODULE__"><?php echo ($vo['name']); ?></a><?php else: echo ($vo['name']); endif; ?></td>
					<td><?php echo ($vo['title']); ?></td>
					<?php if(($level) == "2"): ?><td><?php echo (getnodegroupname($vo['group_id'])); ?></td><?php endif; ?>
					<?php if(($level) == "2"): ?><td><?php echo (is_model($vo['id'])); ?></td><?php endif; ?>
					<td onclick="setSort('__URL__',this,<?php echo ($vo['id']); ?>)" class="xingmu"><?php echo ($vo['sort']); ?></td>
					<td><?php echo (getstatus($vo['status'])); ?></td>
					<td><?php if(!empty($_REQUEST['pid'])): ?><a href="__URL__/edit/id/<?php echo ($vo['id']); ?>" target="dialog" mask="true" width="590" height="420">编辑</a>&nbsp;|&nbsp;<?php echo (showstatus($vo['status'],$vo['id'],'','navTabAjaxMenu')); if(!empty($vo["group_id"])): ?>&nbsp;|&nbsp;<a href="__URL__/removeApp/id/<?php echo ($vo['id']); ?>" target="ajaxTodo" callback="navTabAjaxMenu" title="你确定要卸载（删除）此应用吗？">卸载</a><?php if($isExists): ?>&nbsp;|&nbsp;<a href="__URL__/chead/id/<?php echo ($vo['id']); ?>" target="navTab">代码自动完成</a><?php endif; endif; endif; ?></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>

		<div class="panelBar">
			<div class="pages">
				<span>共<?php echo ($totalCount); ?>条</span>
			</div>
			<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
		</div>
	</div>
</div>