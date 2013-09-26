<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="__URL__" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ($numPerPage); ?>"/>
	<input type="hidden" name="attrname" value="<?php echo ($_REQUEST["attrname"]); ?>"/>
</form>

<div class="page">
	<div class="layoutBox">
        <div class="pageHeader">
            <form onsubmit="return navTabSearch(this);" action="__URL__" method="post">
            <input type="hidden" name="pageNum" value="<?php echo ($numPerPage); ?>"/>
            <input type="hidden" name="_search_likes" value="*"/><!--哪些字段是模糊查询，逗号分隔，*为所有-->
           <div class="searchBar">
                <ul class="searchContent">
                    <li>
                        <label>属性分类：</label>
                        <input name="attrtype" type="text" value="<?php echo ($_REQUEST["attrtype"]); ?>" size="20"/>
                    </li>
                    <li>
                        <label>属性名称：</label>
                        <input name="attrname" type="text" value="<?php echo ($_REQUEST["attrname"]); ?>" size="20"/>
                    </li>
                    <li>
                        <label>属性值：</label>
                        <input name="attrvalue" type="text" value="<?php echo ($_REQUEST["attrvalue"]); ?>" size="20"/>
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
				<li><a class="add" href="__URL__/add/tid/<?php echo ($_REQUEST['tid']); ?>" target="dialog" width="590" height="240" mask="true"><span>新增</span></a></li>
				<li><a class="edit" href="__URL__/edit/id/{sid_category}" target="dialog" width="615" height="240" mask="true" warn="请选择一条记录"><span>编辑</span></a></li>
                <li><a class="delete" href="__URL__/foreverdelete/navTabId/__MODULE__" target="selectedTodo" posttype="string" rel="id" title="确实要删除这些记录吗？" warn="请至少选择一条记录"><span>删除</span></a></li>
			</ul>
		</div>

		<table class="list" width="100%" layoutH="100">
			<thead>
			<tr>
				<th><input type="checkbox" group="id" class="checkboxCtrl"></th>
				<th>编号</th>
				<th>属性分类</th>
				<th>属性名称</th>
				<th>属性值</th>
				<th>排序值</th>
				<th>状态</th>
				<th>操作</th>
			</tr>
			</thead>
			<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_category" rel="<?php echo ($vo['id']); ?>">
					<td><input type="checkbox" name="id" value="<?php echo ($vo['id']); ?>" /></td>
					<td><?php echo ($vo['id']); ?></td>
					<td><?php echo ($vo['attrtype']); ?></td>
					<td><a class="edit" href="__URL__/edit/id/<?php echo ($vo['id']); ?>" target="dialog" width="615" height="240" mask="true"><?php echo ($vo['attrname']); ?></a></td>
					<td><?php echo ($vo['attrvalue']); ?></td>
					<td onclick="setSort('__URL__',this,<?php echo ($vo['id']); ?>)" class="xingmu"><?php echo ($vo['sort']); ?></td>
					<td><?php echo (getstatus($vo['status'])); ?></td>
					<td><?php echo (showstatus($vo['status'],$vo['id'])); ?>&nbsp;|&nbsp;<a class="delete" href="__URL__/foreverdelete/id/<?php echo ($vo['id']); ?>/navTabId/__MODULE__" target="ajaxTodo" title="确实要删这条记录吗？"><span>删除</span></a></td>					
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