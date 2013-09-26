<?php if (!defined('THINK_PATH')) exit();?><div class="page">
	<div class="layoutBox">
	<form method="post" action="__URL__/update/navTabId/__MODULE__" class="pageForm required-validate" enctype="multipart/form-data" onsubmit="return iframeCallback(this,navTabAjaxDone);">
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" />
		<input type="hidden" name="update_time" value="<?php echo time() ?>"/>
        <input type="hidden" name="isb" id="isbInput" value="<?php echo ($vo["isb"]); ?>" />
        <input type="hidden" name="isi" id="isiInput" value="<?php echo ($vo["isi"]); ?>" />
        <input type="hidden" name="fieldarrs" value="attrtt,attrtj" />
		<div class="pageFormContent" layoutH="10">

			<div class="unit">
				<label>文章标题：</label>
				<input type="text" class="required" name="title" value="<?php echo ($vo["title"]); ?>" style="width:230px;color:<?php echo ($vo["tcolor"]); ?>;font-weight:<?php echo $vo['isb'] ? 'bold' : 'normal' ?>;font-style:<?php echo $vo['isi'] ? 'italic' : 'normal' ?>;"/>
                <dl>
                <select name="tcolor" style="color:<?php echo ($vo["tcolor"]); ?>;" onchange="var color=this.options[this.selectedIndex].value;$(this).css('color', color);$(this).parent().siblings('input').css('color', color);">
					<option value="">A</option>
					<option value="#FF0000" style="color:#F00"<?php if($vo['tcolor'] == '#FF0000'): ?>selected<?php endif; ?>>红</option>
					<option value="#FF00FF" style="color:#F0F"<?php if($vo['tcolor'] == '#FF00FF'): ?>selected<?php endif; ?>>红</option>
					<option value="#FF9900" style="color:#F90"<?php if($vo['tcolor'] == '#FF9900'): ?>selected<?php endif; ?>>橙</option>
					<option value="#FFFF00" style="color:#FF0"<?php if($vo['tcolor'] == '#FFFF00'): ?>selected<?php endif; ?>>黄</option>
					<option value="#6600CC" style="color:#60C"<?php if($vo['tcolor'] == '#6600CC'): ?>selected<?php endif; ?>>紫</option>
					<option value="#0000FF" style="color:#00F"<?php if($vo['tcolor'] == '#0000FF'): ?>selected<?php endif; ?>>蓝</option>
					<option value="#0066FF" style="color:#06F"<?php if($vo['tcolor'] == '#0066FF'): ?>selected<?php endif; ?>>蓝</option>
					<option value="#006600" style="color:#060"<?php if($vo['tcolor'] == '#006600'): ?>selected<?php endif; ?>>绿</option>
					<option value="#00FF00" style="color:#0F0"<?php if($vo['tcolor'] == '#00FF00'): ?>selected<?php endif; ?>>绿</option>
				</select>&nbsp;&nbsp;
                <a href="javascript:;" class="b" onclick="o=$(this).parent().siblings('input');if(o.css('font-weight')!='bold'&&o.css('font-weight')!='700') {o.css('font-weight','bold');$(this).parents('form').find('#isbInput').val(1);} else {o.css('font-weight','normal');$(this).parents('form').find('#isbInput').val(0);}">B</a>&nbsp;&nbsp;
                <a href="javascript:;" class="i" onclick="o=$(this).parent().siblings('input');if(o.css('font-style')!='italic') {o.css('font-style','italic');$(this).parents('form').find('#isiInput').val(1);} else {o.css('font-style','normal');$(this).parents('form').find('#isiInput').val(0);}">I</a> 
                </dl>
			</div>
			<div class="unit">
				<label>头条属性：</label>
                <dl><?php $_result=ch2('attribute','where:attrtype=&quot;toutiao&quot;');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sx): $mod = ($i % 2 );++$i;?><label><input type="checkbox" name="attrtt[]" value="<?php echo ($sx["attrvalue"]); ?>"<?php if(in_array($sx['attrvalue'], explode(',', $vo['attrtt']))): ?>checked<?php endif; ?> /><?php echo ($sx["attrname"]); ?></label><?php endforeach; endif; else: echo "" ;endif; ?></dl>
			</div>
			<div class="unit">
				<label>推荐属性：</label>
                <dl><?php $_result=ch2('attribute','where:attrtype=&quot;tuijian&quot;');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sx): $mod = ($i % 2 );++$i;?><label><input type="checkbox" name="attrtj[]" value="<?php echo ($sx["attrvalue"]); ?>"<?php if(in_array($sx['attrvalue'], explode(',', $vo['attrtj']))): ?>checked<?php endif; ?> /><?php echo ($sx["attrname"]); ?></label><?php endforeach; endif; else: echo "" ;endif; ?></dl>
			</div>
			<div class="unit">
				<label>所属分类：</label>
                <input type="text" class="required" size="40" readonly="readonly" id="categoryName_edit_article" name="categoryName" value="<?php echo (getcategoryname($vo["tid"])); ?>"/>
                <a class="unit btn" href="__APP__/Ui/tree/selparent/0/selmore/1/cid/tid_edit_article/cname/categoryName_edit_article" target="dialog" rel="tree" mask="true" title="选择分类" width="600" height="650">选择分类</a>
                <input type="hidden" class="required" id="tid_edit_article" name="tid" value="<?php echo ($vo["tid"]); ?>" />
                <input type="hidden" class="required" name="old_tid" value="<?php echo ($vo["tid"]); ?>" />
			</div>
			<div class="unit">
				<label>外部网址：</label>
				<input type="text" name="outurl" size="40" value="<?php echo ($vo["outurl"]); ?>"/>
                <a class="unit btn" href="javascript:;" onclick="o=$(this).siblings('input');if(o.val()!='')window.open(o.val()); else o.focus();">查 看</a>
			</div>
			<div class="unit">
				<label>关键字：</label>
				<input type="text" name="keywords" size="40" value="<?php echo ($vo["keywords"]); ?>"/>
                <a class="unit btn" href="javascript:;" onclick="setInputFromInput(this,1)">提 取</a>
			</div>
			<div class="unit">
				<label>描述：</label>
				<textarea name="description" style="width:230px;height:80px;"><?php echo (htmlspecialchars($vo["description"])); ?></textarea>
                <a class="unit btn" href="javascript:;" onclick="setInputFromInput(this,2)">提 取</a>
			</div>
			<div class="unit">
				<label>来源：</label>
				<input type="text" name="from" size="40" value="<?php echo ($vo["from"]); ?>" />
			</div>
            <div class="unit">
				<label>作者：</label>
				<input type="text" name="writer" size="40" value="<?php echo ($vo["writer"]); ?>"  />
			</div>
            <?php if($vo['img']!='' && !preg_match('/^\/(?!Public\/)|((https?|ftp):\/\/)/i',$vo['img'])){ ?>
            <div class="unit">
                <label>预览图片：</label>
                <a href="<?php echo (chimg($vo["img"],article)); ?>" target="_blank"><img src="<?php echo (chimg($vo["img"],article,100,100)); ?>" height="40" border="0" /></a><input type="hidden" name="img" value="<?php echo ($vo["img"]); ?>" />
                &nbsp;&nbsp;<a href="__URL__/delfile/id/<?php echo ($vo["id"]); ?>/field/img/navTabId/__MODULE__" target="ajaxTodo" title="你确定要删除图片吗？">删除图片</a>
            </div>	
            <?php }?>
            <div class="unit">
                <label>上传预览图片：</label>
                <input type="file" name="img" />
            </div>	
            <div class="unit">
                <label>外部预览图片：</label>
                <input type="text" name="imgurl" id="imgurl" size="40" value="<?php echo preg_match('/^\/(?!Public\/)|((https?|ftp):\/\/)/i',$vo['img']) ? $vo['img'] : ''; ?>">
            </div>            
			<div class="unit">
				<label>状态：</label>
				<select name="status">
					<option <?php if(($vo["status"]) == "1"): ?>selected<?php endif; ?> value="1">启用</option>
					<option <?php if(($vo["status"]) == "0"): ?>selected<?php endif; ?> value="0">禁用</option>
				</select>
			</div>
			<div class="unit">
				<label>排序值：</label>
				<input type="text" name="sort" size="40" value="<?php echo ($vo["sort"]); ?>"/>
			</div>
			<div class="unit">
				<label>URL重写值：</label>
				<input type="text" name="rewrite" size="40" value="<?php echo ($vo["rewrite"]); ?>"/>
			</div>
			<div class="unit">
				<label>使用模板：</label>
				<input type="text" name="template" id="template" size="40" value="<?php echo ($vo["template"]); ?>"/>
                <a href="__APP__/Ui/seltpl/tplname/template" class="unit btn" target="dialog" rel="btn_tpl" mask="true" title="选择模板" width="600" height="800">选择模板</a>
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
				<label>内容：</label>
                <dl>
				<label><input type="checkbox" name="remoteToLocal" value="1" checked />远程文件本地化</label>
                </dl>
			</div>
			<div class="unit">
				<textarea class="editor" name="content" height="350" tools="full" pagetag upLinkUrl="__APP__/article/upload/" upImgUrl="__APP__/article/upload/" upFlashUrl="__APP__/article/upload/" upMediaUrl="__APP__/article/upload/"><?php echo (htmlspecialchars($vo["content"])); ?></textarea>
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