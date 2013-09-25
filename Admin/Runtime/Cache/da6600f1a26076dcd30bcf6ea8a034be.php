<?php if (!defined('THINK_PATH')) exit();?><div class="page">
	<div class="layoutBox">

	<form method="post" action="__URL__/update/navTabId/__MODULE__" class="pageForm required-validate" enctype="multipart/form-data" onsubmit="return iframeCallback(this,dialogAjaxDone);">
		<input type="hidden" name="classid" value="<?php echo ($vo["classid"]); ?>" />
		<div class="pageFormContent" layoutH="100">

            <div class="unit">
                <label>分类名：</label>
                <input name="classtitle" type="text" class="required" value="<?php echo ($vo["classtitle"]); ?>" size="40">
            </div>		
            <div class="unit">
                <label>所属分类：</label>
                <input name="categoryName" type="text" class="required" id="categoryName_edit_2" value="<?php echo (getcategoryname($vo["classpid"])); ?>" size="40" readonly="readonly"/>
                <a class="unit btn" href="__APP__/Ui/tree/selparent/1/selmore/0/cid/pid_edit_2/cname/categoryName_edit_2" target="dialog" rel="tree" mask="true" title="选择分类" width="600" height="650">选择分类</a>
                <input type="hidden" id="pid_edit_2" name="classpid" value="<?php echo ($vo["classpid"]); ?>" />
            </div>		
            <div class="unit">
                <label>所属模型：</label>
                <SELECT name="classmodule" class="required">
                    <option value="">--</option>
                    <?php if(is_array($classmodule)): $i = 0; $__LIST__ = $classmodule;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vl): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" <?php if(($key) == $vo["classmodule"]): ?>selected<?php endif; ?>><?php echo ($vl); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </SELECT>
            </div>			
            <div class="unit">
                <label>排序值：</label>
                <input type="text" name="classsort" size="40" maxlength="30" value="<?php echo ($vo["classsort"]); ?>"/>
            </div>			
            <div class="unit">
                <label>状态：</label>
                <select class="small bLeft"  name="classstatus">
                    <option <?php if(($vo["classstatus"]) == "1"): ?>selected<?php endif; ?> value="1">启用</option>
                    <option <?php if(($vo["classstatus"]) == "0"): ?>selected<?php endif; ?> value="0">禁用</option>
                </select>
				<label>前台菜单中显示：</label>
				<select name="classmenushow">
					<option value="1"<?php if(($vo["classmenushow"]) == "1"): ?>selected<?php endif; ?>>启用</option>
					<option value="0"<?php if(($vo["classmenushow"]) == "0"): ?>selected<?php endif; ?>>禁用</option>
				</select>
            </div>
			<div class="unit">
				<label>外部网址：</label>
				<input type="text" name="classouturl" size="40" value="<?php echo ($vo["classouturl"]); ?>"/>
                <a class="unit btn" href="javascript:;" onclick="o=$(this).siblings('input');if(o.val()!='')window.open(o.val()); else o.focus();">查 看</a>
			</div>
            <div class="unit">
                <label>二级域名：</label>
                <input type="text" name="classdomain" size="40" value="<?php echo ($vo["classdomain"]); ?>" title="格式如：&#13;news&#13;guonei.news&#13;jiangsu.guonei.news&#13;changzhou.jiangsu.guonei.news&#13;www.news.domain.cmshead.com&#13;www.jiangsu.guonei.news"/>
                <span>不带http://,可写完整域名也可以只写前缀(最后不带点)</span>
            </div>
            <div class="unit">
                <label>URL重写值：</label>
                <input type="text" name="classrewrite" size="40" value="<?php echo ($vo["classrewrite"]); ?>"/>
                <span>如：news，news.html</span>
            </div>
            <div class="unit">
                <label>分类模板：</label>
                <input type="text" name="classtemplate" id="classtemplate" size="30" value="<?php echo ($vo["classtemplate"]); ?>"/>
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
                <input type="text" name="newstemplate" id="newstemplate" size="30" value="<?php echo ($vo["newstemplate"]); ?>"/>
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
            <?php if($vo['classimg']!='' && !preg_match('/^\/(?!Public\/)|((https?|ftp):\/\/)/i',$vo['classimg'])){ ?>
            <div class="unit">
                <label>预览图片：</label>
                <a href="<?php echo (chimg($vo["classimg"],category)); ?>" target="_blank"><img src="<?php echo (chimg($vo["classimg"],category,100,100)); ?>" border="0" /></a><input type="hidden" name="classimg" value="<?php echo ($vo["classimg"]); ?>" />
                &nbsp;&nbsp;<a href="__URL__/delfile/classid/<?php echo ($vo["classid"]); ?>/field/classimg/navTabId/__MODULE__" target="ajaxTodo" title="你确定要删除图片吗？">删除图片</a>
            </div>	
            <?php }?>
			<div class="unit">
				<label>上传预览图片：</label>
				<input type="file" name="classimg">
			</div>
            <div class="unit">
                <label>外部预览图片：</label>
                <input type="text" name="classimgurl" id="classimgurl" size="40" value="<?php echo preg_match('/^\/(?!Public\/)|((https?|ftp):\/\/)/i',$vo['classimg']) ? $vo['classimg'] : ''; ?>">
            </div>            
            <div class="unit">
                <label>关键字：</label>
                <input type="text" size="40" name="classkeywords" value="<?php echo ($vo["classkeywords"]); ?>">
            </div>		
            <div class="unit">
                <label>描述：</label>
                <textarea name="classdescription"  rows="3" cols="50"><?php echo (htmlspecialchars($vo["classdescription"])); ?></textarea>
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