<?php if (!defined('THINK_PATH')) exit();?><div class="page">
	<div class="layoutBox">
	<form method="post" action="__URL__/edit/navTabId/__MODULE__" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone)">
		<input type="hidden" name="filename" value="<?php echo ($_GET['filename']); ?>" />
		<div class="pageFormContent" layoutH="50">
			<div class="unit">
				<strong>文件路径：<?php echo ($filename); ?></strong>
			</div>
			<div class="unit">
				<textarea name="content" style="width:99%; height:650px;"><?php echo (htmlspecialchars($content)); ?></textarea>
			</div>
		</div>

		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
	
	</div>
</div>