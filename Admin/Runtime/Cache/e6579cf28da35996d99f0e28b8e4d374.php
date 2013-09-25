<?php if (!defined('THINK_PATH')) exit();?><div class="page">
	<div class="layoutBox">
        <div class="pageHeader">
            <form id="pagerForm" onsubmit="return navTabSearch(this);" action="__URL__" method="post">
            <input type="hidden" name="pageNum" value="<?php echo ($numPerPage); ?>"/>
            <input type="hidden" name="_search_likes" value="*"/><!--哪些字段是模糊查询，逗号分隔，*为所有-->
            <div class="searchBar">
                <ul class="searchContent">
                    <li>
                        <label>模板分组：</label>
                        <label>
                        <input name="tplgroup" type="text" value="<?php echo ($_REQUEST['tplgroup']); ?>" size="20"/>
                        </label>
                    </li>
                    <li>
                        <label>模板名称：</label>
                        <input name="tplname" type="text" value="<?php echo ($_REQUEST['tplname']); ?>" size="20"/>
                    </li>
                    <li>
                        <label>模板文件：</label>
                        <input name="tplpath" type="text" value="<?php echo ($_REQUEST['tplpath']); ?>" size="20"/>
                    </li>
                </ul>
                <div class="subBar">
                    <ul>
                        <li><div class="buttonActive"><div class="buttonContent"><button type="submit">查询</button></div></div></li>
                    </ul>
                </div>
            </div>
            </form>
        </div>
	
		<div class="panelBar">
			<ul class="toolBar">
				<li><a class="add" href="__URL__/add" target="navTab"><span>新增</span></a></li>
				<li><a class="edit" href="__URL__/edit/id/{sid_ui}" target="navTab" warn="请选择一条记录"><span>编辑</span></a></li>
                <li><a class="delete" href="__URL__/foreverdelete/navTabId/__MODULE__" target="selectedTodo" posttype="string" rel="id" title="确实要删除这些记录吗？" warn="请至少选择一条记录"><span>删除</span></a></li>
			</ul>
		</div>

		<table class="list" width="100%" layoutH="100">
			<thead>
			<tr>
				<th><input type="checkbox" group="id" class="checkboxCtrl"></th>
				<th>编号</th>
				<th>模板分组</th>
				<th>模板名称</th>
				<th>对应模板</th>
				<th>操作</th>
			</tr>
			</thead>
			<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_ui" rel="<?php echo ($vo['id']); ?>">
					<td><input type="checkbox" name="id" value="<?php echo ($vo['id']); ?>" /></td>
					<td><?php echo ($vo['id']); ?></td>
					<td><?php echo ($vo['tplgroup']); ?></td>
					<td><a class="edit" href="__URL__/edit/id/<?php echo ($vo['id']); ?>" target="navTab"><?php echo ($vo['tplname']); ?></a></td>
					<td><?php echo ($vo['tplpath']); ?></td>
					<td><a class="delete" href="__URL__/foreverdelete/id/<?php echo ($vo['id']); ?>/navTabId/__MODULE__" target="ajaxTodo" title="确实要删这条记录吗？"><span>删除</span></a>&nbsp;|&nbsp;<a href="<?php echo str_replace('{tplroot}',__ROOT__.'/Home/Tpl/',$vo['tplpath']); ?>" target="_blank"><span>预览</span></a></td>
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