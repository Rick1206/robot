<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CMS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <frameset frameborder=0 framespacing=0 border=0 rows="88,*,32">
        <frame src="<?php echo U('Public/top');?>" name="top" frameborder=0 noresize scrolling='no' marginwidth=0 marginheight=0>
        <frameset frameborder=0  framespacing=0 border=0 cols="160,8, *" id="frame-body">
            <frame src="<?php echo U('Public/menu');?>" frameborder=0 id="menu-frame" name="menu">
            <frame src="<?php echo U('Public/drag');?>" frameborder="no" scrolling="no" id="drag-frame" name="drag-frame" >
            <frame src="<?php echo U('Public/main');?>" frameborder=0 id="main-frame" name="main">
        </frameset>
        <frame src="<?php echo U('Public/bottom');?>" name="bottom" frameborder=0 noresize scrolling='no' marginwidth=0 marginheight=0>
    </frameset>
    <noframes></noframes>
</html>