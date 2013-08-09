<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CMS登录</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       	
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="cms">
        <meta name="author" content="Rick Shi">
        
        <!-- <link rel='stylesheet' type="text/css" href="../Public/css/style.css" /> -->
        <link type="text/css" href="../Public/assets/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="../Public/css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" />
        <link type="text/css" href="../Public/assets/css/font-awesome.min.css" rel="stylesheet" />
        
        <link href="../Public/assets/css/docs.css" rel="stylesheet">
        <link href="../Public/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
        
        <script type="text/javascript" src="../Public/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="../Public/js/jquery-ui-1.9.2.custom.min.js"></script>
        <script type="text/javascript" src="../Public/js/jquery.form.js"></script>
        
        <style type="text/css">
            body{background: #E9E9E9;}
        </style>
    <script type="text/javascript">     
    //<!--
    $(function(){
        $('#form1').ajaxForm({
            beforeSubmit:  checkForm,  
            success:       complete,  
            dataType: 'json'
        });
        function complete(data){
            if (data.status===1){
                window.location.href = "<?php echo U('Index/index');?>";
            }else{
                alert(data.info);
                var timenow = new Date().getTime();
                var url="<?php echo U('Public/verify',array('t'=>'"+timenow+"'));?>";
                $('#verifyImg').attr('src',url);
            }
        }
        function checkForm(){
            if( '' === $.trim($('#account').val())){
                //$('#result').html('用户名不能为空!').show();
                alert('用户名不能为空!');
                return false;
            }
            if( '' === $.trim($('#password').val())){
                //$('#result').html('密码不能为空!').show();
                alert('密码不能为空!');
                return false;
            }
            if( '' === $.trim($('#verify').val())){
                //$('#result').html('验证码不能为空!').show();
                alert('验证码不能为空!');
                return false;
            } 
        }
        $('#verifyImg').click(function(){
            //重载验证码
            var timenow = new Date().getTime();
            var url="<?php echo U('Public/verify',array('t'=>'"+timenow+"'));?>";
            $('#verifyImg').attr('src',url);
       	
        });
        
    });
    //-->
    </script>
    </head>
    <body>
        <div class="login">
            <!-- <div class="version">企业网站版</div> -->
            <!-- <div>此Cms后台 建议使用Chrome</div> -->
            <form method='post' name="login" id="form1" action="<?php echo U('Public/checkLogin');?>" >
                <div class="hero-unit">
                    <label>用户名：</label>
                    <input type="text" class="ipt3" id="account" name="account">
                    <label>密 码：</label>
                    <input type="password" class="ipt3" id="password" name="password">
                    <label>验证码：</label>
                    <input type="text" class="ipt2" id="verify" name="verify">
                    <br />
                    <img id="verifyImg" src="<?php echo U('Public/verify');?>" border="0" alt="点击刷新验证码" style="cursor:pointer; margin-left: 5px;" align="absmiddle">
                    <input type="hidden" name="ajax" value="1">
                    <input type="submit" id="submit" value="登 录" class="btn4 button">
                </div>
            </form>
            <div id="result" class="red"></div>
            <div class="shuom">
            	<!-- <a href="http://www.yufu5.com" target="_blank">www.yufu5.com</a> -->
            </div>
        </div>
	<script type="text/javascript" charset="utf-8">
		$('.button').button();
	</script>
    </body>
</html>