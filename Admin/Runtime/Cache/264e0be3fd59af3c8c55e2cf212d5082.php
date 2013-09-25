<?php if (!defined('THINK_PATH')) exit();?><div class="page">
	<div class="layoutBox">
	<form method="post" action="__URL__/insert/navTabId/__MODULE__" class="pageForm required-validate" enctype="multipart/form-data" onsubmit="return iframeCallback(this,navTabAjaxDone);">
		<div class="pageFormContent" layoutH="10">
			<div class="unit">
				<label>模板分组：</label>
				<input type="text" size="40" name="tplgroup" id="tplgroup" />
                <select onchange="$('#tplgroup').val(this.options[this.selectedIndex].value);">
                <option value="">--清空--</option>
                <?php if(is_array($arr_tplgroup)): $i = 0; $__LIST__ = $arr_tplgroup;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$options): $mod = ($i % 2 );++$i;?><option value="<?php echo ($options["tplgroup"]); ?>"><?php echo ($options["tplgroup"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
			</div>
			<div class="unit">
				<label>模板别名：</label>
				<input type="text" class="required" size="40" name="tplname" />
                <label><input type="checkbox" name="bakold" value="1" />修改前备份旧模板</label>
			</div>
			<div class="unit">
				<label>对应模板：</label>
				<input type="text" class="required" name="tplpath" id="tplpath" size="60" />
                <a href="__APP__/Ui/seltpl/tplname/tplpath" class="unit btn" target="dialog" rel="btn_tpl" mask="true" title="选择模板" width="600" height="800">选择模板</a>
                <a href="javascript:;" onclick="editTpl(this);" class="unit btn">打开编辑</a>
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
				<label>如果是新增的模板，可随意选择一个模板文件，修改目录及文件名即可。可以先编辑再另存到其他位置。支持中文，如{tplroot}default/Test/频道首页.html</label>
			</div>			
			<div id="divTplContent" style="display:none" class="unit">
				<label>模板内容：</label>
				<textarea name="tplContent" id="tplContent" style="width:90%;height:500px;"></textarea>
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
<script language="javascript">
$('#tplContent').val('');
function editTpl(obj){
	if($(obj).text()=='放弃编辑'){
		$('#tplContent').val('');
		$('#divTplContent').hide();
		$(obj).text('打开编辑');
		$('.pageFormContent').height($('.pageFormContent').height()-500);
		alert('已清空模板内容编辑框，提交后不会修改保存对应模板的内容。');
		return;
	}
	if($('#tplpath').val()==''){
		alert('请先选择模板，才能打开编辑'); return;
	}	
	if($('#divTplContent')[0].style.display=='none'){
		$('#divTplContent').show();
		var myheight = (document.documentElement || document.body).clientHeight-$("#header").height()-$("#footer").height()-$('.formBar').height()-$('.tabsPageHeader').height();
		$('.pageFormContent').height(myheight-80);
		$(obj).text('放弃编辑');
		
		$.post('__URL__/view', {tplpath: $('#tplpath').val()}, function(data){
				$('#tplContent').val(data);
				$('.pageFormContent').css('overflow-y','auto');
				$('.pageFormContent').css('overflow-x','hidden');
			});		
	}
}
</script>