<?php if (!defined('THINK_PATH')) exit();?><div class="page">
	<div class="layoutBox">
        <div class="pageHeader">
            <form id="pagerForm" onsubmit="return navTabSearch(this);" action="__URL__" method="post">
            <input type="hidden" name="pageNum" value="<?php echo ($numPerPage); ?>"/>
            <input type="hidden" name="_search_likes" value="*"/><!--哪些字段是模糊查询，逗号分隔，*为所有-->
            <div class="searchBar">
                <ul class="searchContent">
                    <li>
                        <label>父级分类：</label>
                        <label>
                        <input type="text" size="30" readonly="readonly" id="categoryName_index2" name="categoryName" value="<?php if(!empty($_REQUEST['categoryName'])): echo ($_REQUEST['categoryName']); else: echo (getcategoryname($_REQUEST['tid'])); endif; ?>"/>
                        <a class="unit btn" href="__APP__/Ui/tree/selparent/1/selmore/1/cid/pid_index2/cname/categoryName_index2/selroot/1" target="dialog" rel="tree" mask="true" title="选择分类" width="600" height="650">选择分类</a>
                        <input type="hidden" id="pid_index2" name="classpid" value="<?php echo ($_REQUEST['classpid']); ?>" />
                        </label>
                    </li>
                    <li>
                        <label>分类名：</label>
                        <input name="classtitle" type="text" value="<?php echo ($_REQUEST["classtitle"]); ?>" size="30"/>
                    </li>
                    <li>
                        <label>模型名：</label>
                        <SELECT name="classmodule">
                        <option value="">选择模型</option>
                        <?php if(is_array($classmodule)): $i = 0; $__LIST__ = $classmodule;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" <?php if(($key) == $_REQUEST["classmodule"]): ?>selected<?php endif; ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </SELECT>
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
				<li><a class="add" href="__URL__/add/tid/<?php echo ($_REQUEST['tid']); ?>" target="dialog" width="700" height="550" mask="true"><span>新增</span></a></li>
				<li><a class="edit" href="__URL__/edit/classid/{sid_category}" target="dialog"  width="700" height="550" mask="true" warn="请选择一条记录"><span>编辑</span></a></li>
				<li><a class="delete" href="__URL__/foreverdelete/navTabId/__MODULE__" target="selectedTodo" posttype="string" rel="classid" title="确实要删除这些记录吗？" warn="请至少选择一条记录"><span>删除</span></a></li>
				<li class="line">line</li>
				<li><a class="add" href="__APP__/Ui/tree/selparent/1/selmore/0/link/edit" target="dialog" width="600" height="650" rel="tree"><span>树形结构显示</span></a> </li>				

                <li class="line">line</li>
				<li><a class="edit" href="__URL__/copy" target="selectedTodo" showType="dialog" posttype="string" rel="classid" width="500" height="240" mask="true" alt="复制栏目到某些栏目" warn="请至少选择一条记录"><span>复制</span></a></li>
				<li><a class="edit" href="__URL__/move" target="selectedTodo" showType="dialog" posttype="string" rel="classid" width="500" height="180" mask="true" alt="移动栏目到某个栏目" warn="请至少选择一条记录"><span>移动</span></a></li>
				<li><a class="edit" href="__URL__/merge" target="selectedTodo" showType="dialog" posttype="string" rel="classid" width="500" height="180" mask="true" alt="合并栏目到某个栏目" warn="请至少选择一条记录"><span>合并</span></a></li>
                <li class="line">line</li>
				<li><a class="edit" href="__URL__/attr" target="selectedTodo" showType="dialog" posttype="string" rel="classid" width="700" height="320" mask="true" alt="所选栏目设置字段属性包括替换" warn="请至少选择一条记录"><span>属性</span></a></li>

                <?php if(!empty($_REQUEST['classpid'])): ?><li class="line">line</li>
                <li><a class="edit" href="__URL__/index/classpid/<?php echo (getparents($_REQUEST['classpid'],0)); ?>" target="navTab" rel="Category"><span>返回上级</span></a></li><?php endif; ?>			
            </ul>
		</div>
        
		<table class="list" width="100%" layoutH="100">
			<thead>
			<tr>
				<th><input type="checkbox" group="classid" class="checkboxCtrl"></th>
				<th>编号</th>
				<th>分类名</th>
				<th>所属父类</th>
				<th>所属模型</th>
				<th>预览图片</th>
				<th>URL重写</th>
				<th>分类模板</th>
				<th>文章模板</th>
				<th>排序值</th>
				<th>状态</th>
				<th>操作</th>
			</tr>
			</thead>
			<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_category" rel="<?php echo ($vo['classid']); ?>">
					<td><input type="checkbox" name="classid" value="<?php echo ($vo['classid']); ?>" /></td>
					<td><?php echo ($vo['classid']); ?></td>
					<td><?php if(empty($vo["classchild"])): echo ($vo['classtitle']); else: ?><a href="__URL__/index/classpid/<?php echo ($vo['classid']); ?>" target="navTab" rel="Category"><?php echo ($vo['classtitle']); ?></a><?php endif; ?></td>
					<td><?php echo (getcategoryname($vo['classpid'])); ?></td>
					<td><?php echo (getmodulename($vo['classmodule'])); ?></td>
					<td><?php if(!empty($vo["classimg"])): ?><a href="<?php echo (chimg($vo["classimg"],category)); ?>" target="_blank"><img src="<?php echo (chimg($vo["classimg"],category,100,100)); ?>" width="40" border="0" /></a><?php endif; ?></td>
					<td><?php echo ($vo['classrewrite']); ?></td>
					<td><?php echo ($vo['classtemplate']); ?></td>
					<td><?php echo ($vo['newstemplate']); ?></td>
					<td onclick="setSort('__URL__',this,<?php echo ($vo['classid']); ?>)" class="xingmu"><?php echo ($vo['classsort']); ?></td>
					<td><?php echo (getstatus($vo['classstatus'])); ?></td>
					<td><a class="edit" href="__URL__/edit/classid/<?php echo ($vo['classid']); ?>" target="dialog"  width="700" height="550" mask="true">编辑</a>&nbsp;|&nbsp;<?php echo (showstatus($vo['classstatus'],$vo['classid'])); ?>&nbsp;|&nbsp;<a class="delete" href="__URL__/foreverdelete/classid/<?php echo ($vo['classid']); ?>/navTabId/__MODULE__" target="ajaxTodo" title="确实要删这条记录吗？"><span>删除</span></a>&nbsp;|&nbsp;<a href="<?php echo (churl($vo['classid'],MODULE_NAME)); ?>" target="_blank"><span>预览</span></a></td>
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