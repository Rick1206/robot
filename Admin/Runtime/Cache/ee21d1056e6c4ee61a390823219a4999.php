<?php if (!defined('THINK_PATH')) exit();?><div class="page">
	<div class="layoutBox">
	
	<form method="post" action="__URL__/insert/navTabId/__MODULE__" class="pageForm required-validate" enctype="multipart/form-data" onsubmit="return iframeCallback(this,dialogAjaxDone);">
		<div class="pageFormContent" layoutH="100">

			<div class="unit">
				<label>分类名：</label>
				<input name="classtitle" type="text" class="required" size="40"/>
			</div>			
			<div class="unit">
			<label>所属分类：</label>
            <input name="categoryName" type="text" class="required" id="categoryName_add_2" value="根目录" size="40" readonly="readonly"/>
            <a class="unit btn" href="__APP__/Ui/tree/selparent/1/selmore/0/cid/pid_add_2/cname/categoryName_add_2" target="dialog" rel="tree" mask="true" title="选择分类" width="600" height="650">选择分类</a>
            <input type="hidden" id="pid_add_2" name="classpid" value="0" />
			</div>
			<div class="unit">
				<label>所属模型：</label>
				<SELECT name="classmodule">
					<?php if(is_array($classmodule)): $i = 0; $__LIST__ = $classmodule;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>"><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</SELECT>
			</div>
			<div class="unit">
				<label>排序值：</label>
				<input type="text" name="classsort" size="40"/>
			</div>
			<div class="unit">
				<label>状态：</label>
				<select name="classstatus">
					<option value="1">启用</option>
					<option value="0">禁用</option>
				</select>
				<label>前台菜单中显示：</label>
				<select name="classmenushow">
					<option value="1">启用</option>
					<option value="0">禁用</option>
				</select>
			</div>
			<div class="unit">
				<label>外部网址：</label>
				<input type="text" name="classouturl" size="40" />
                <a class="unit btn" href="javascript:;" onclick="o=$(this).siblings('input');if(o.val()!='')window.open(o.val()); else o.focus();">查 看</a>
			</div>
            <div class="unit">
                <label>二级域名：</label>
                <input type="text" name="classdomain" size="40" title="格式如：&#13;news&#13;guonei.news&#13;jiangsu.guonei.news&#13;changzhou.jiangsu.guonei.news&#13;www.news.domain.cmshead.com&#13;www.jiangsu.guonei.news"/>
                <span>不带http://,可写完整域名也可以只写前缀(最后不带点)</span>
            </div>
			<div class="unit">
				<label>URL重写值：</label>
				<input type="text" name="classrewrite" size="40"/>
			</div>
            <div class="unit">
                <label>分类模板：</label>
                <input type="text" name="classtemplate" id="classtemplate" size="30" value=""/>
                <a href="__APP__/Ui/seltpl/tplname/classtemplate" class="unit btn" target="dialog" rel="btn_tpl" mask="true" title="选择模板" width="600" height="800">选择模板</a>
                <span>格式如：</span>
                <select>
                <option>直接选择模板</option>
                <option>index2.html</option>
                <option>index2.php</option>
                <option>index2</option>
                <option>Public:abc</option>
                </select>
            </div>		
            <div class="unit">
                <label>文章模板：</label>
                <input type="text" name="newstemplate" id="newstemplate" size="30" value=""/>
                <a href="__APP__/Ui/seltpl/tplname/newstemplate" class="unit btn" target="dialog" rel="btn_tpl" mask="true" title="选择模板" width="600" height="800">选择模板</a>
                <span>格式如：</span>
                <select>
                <option>直接选择模板</option>
                <option>index2.html</option>
                <option>index2.php</option>
                <option>index2</option>
                <option>Public:abc</option>
                </select>
            </div>					
			<div class="unit">
				<label>预览图片：</label>
				<input type="file" name="classimg">
			</div>
			<div class="unit">
				<label>外部预览图片：</label>
				<input type="text" name="classimgurl" size="40" id="classimgurl" value="">
			</div>            
			<div class="unit">
				<label>关键字：</label>
				<input type="text" name="classkeywords" size="40"/>
			</div>
			<div class="unit">
				<label>描述：</label>
				<textarea name="classdescription" rows="3" cols="50"></textarea>
			</div>
			
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
	
	</div>
</div>