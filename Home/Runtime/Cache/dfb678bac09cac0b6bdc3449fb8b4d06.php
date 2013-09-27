<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />
<!--[if lt IE 9]><script type="text/javascript">"abbr,article,aside,audio,bdi,canvas,data,datalist,details,figcaption,figure,footer,header,hgroup,mark,meter,nav,output,progress,section,summary,subline,time,video".replace(/\w+/g,function(n){document.createElement(n)})</script><![endif]-->
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Theme/Front/default/style.css" />
<script type="text/javascript" src="__PUBLIC__/js/lib/sea.js" id="seajsnode"></script>

<script type="text/javascript">
        seajs.config({
            alias: {
                'jquery': '__PUBLIC__/js/lib/jquery-1.10.2.min.js',
                'bpopup': '__PUBLIC__/js/lib/jquery.bpopup.min.js',
                'carouFredSel':'__PUBLIC__/js/lib/jquery.carouFredSel-6.2.0-packed.js',
                'dot':'__PUBLIC__/js/lib/doT.min.js'
            },
            base:'__PUBLIC__/js',
            preload:['jquery']
        });
        seajs.use('china_robot');
    </script>
</script>
<style type="text/css">
#nav_<?php echo (($parentCids[0])?($parentCids[0]):0); ?>{ 
	background-color: #0080FF;
	}

</style>
</head>
<body>
	
	<header>
    <div class="nav-bar wrap">
        <div class="row-fluid">
            <div class="span3">
                <div class="logo">
                    <a href="__ROOT__"></a>
                </div>
            </div>
            <div class="span9">
                <div class="login-bar">
                    <div class="l-wrap">
                        <div class="login">
                            <a href="javascript:;" class="first-child register-s">注册</a>
                            <a href="javascript:;" class="login-s">登陆</a>
                        </div>
                        <div class="lang"><span class="icon-earth"></span><a href="#" class="tar-lang"><span>English</span></a></div>
                        <div class="search">
                            <form action="__APP__/Index/search/" method="post">
                                <input type="text" name="keyword" class="input-text" placeholder="搜索"/>
                                <input type="hidden" name="keytype" value="article,video" />
                                <button type="submit"></button>
                            </form>
                        </div>
                    </div>
                </div>
                <nav class="nav">
                    <ul>
                        <li id="nav_0"><a href="<?php echo (C("SITE_URL")); ?>/" class="first-child">首页</a></li>
                         <?php $_result=ch1('category','0','13','class0:60');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li id="nav_<?php echo ($vo["classid"]); ?>">            	           
				                <a href="<?php echo ($vo["url"]); ?>" ><?php echo ($vo["classtitle"]); ?></a>
				                <?php $vo['sub_nav'] = ch1('class',$vo['classid']);?>
				                <?php if(!empty($vo["sub_nav"])): ?><div class="drop-down">
				                        <?php if(is_array($vo["sub_nav"])): $i = 0; $__LIST__ = $vo["sub_nav"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><a href="<?php echo ($sub["url"]); ?>" id="nav_<?php echo ($sub["classid"]); ?>"><?php echo ($sub["classtitle"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
				                        <div class="clear"></div>                
				                    </div><?php endif; ?>         
				            </li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="bg-mask"></div>
</header>


<section class="pg-head">
  <div class="wrap">
    <div class="short">
      <h1>机器人改变世界 人类新成员</h1>
      <p>自主机器人系列产品整体技术性能达到国内同类产品的先进水平 <br>
        运用于我国汽车、电子电器等行业</p>
      <a href="" class="more">了解更多</a>
    </div>
    <div class="short-img"><img src="__PUBLIC__/Theme/Front/images/about-short-pic02.png" alt=""/></div>
  </div>
</section>
<section class="word-download pg-part-bg">
  <div class="wrap row-fluid">
    <div class="span4">
      <div class="span4">
        <img src="__PUBLIC__/Theme/Front/images/icon-word.png" alt=""/>
      </div>
      <div class="span8">
        <h3>机器人产品交易申请表</h3>
        <a href="#" target="_blank" class="download">点击下载</a>
      </div>
    </div>
    <div class="span7">
      <p class="text">上海机器人设计应用中心致力于提供最专业全面的交易信息和服务。您可以通过应用中心轻松提交您的机器人产权转让、销售、和租赁服务。我们在收到您的服务申请后会有专员与您联系，通过审核后即可发布。</p>
    </div>
  </div>
</section>
<section class="tab-top">
  <div class="tabs">
  	
  	<?php $cid = $App['vars']['id'] ? $App['vars']['id'] : $_GET['id'];?>
    <?php $childClassList = ch1('class','292');?>
    <?php if(!empty($childClassList)): if(is_array($childClassList)): $k = 0; $__LIST__ = $childClassList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><a href="<?php echo ($vo["url"]); ?>" class="<?php if(($cid == '292') AND ($k == '1')): ?>selected
    			<?php elseif($vo['classid'] == $cid): ?>
    			selected<?php endif; ?>"><?php echo ($vo["classtitle"]); ?></a><?php endforeach; endif; else: echo "" ;endif; endif; ?>
    
  </div>
</section>
<section class="applyfor">
  <div class="wrap">
    <h1 class="title-line"><span>机器人产品交易申请表</span><hr></h1>
    <p>以下内容均为必填项，我们会妥善保管您的个人信息和所填内容。</p>
    <div class="apply-form">
      <form action="" class="form-horizontal">
        <h1 class="title-line3">
          <span>一、交易的产品信息</span><hr>
        </h1>
        <div class="row-fluid">
          <div class="span6 control-group">
            <label class="control-label">产品名称：</label>
            <div class="controls">
              <input type="text"  placeholder="" class="input-block-level">
            </div>
          </div>
          <div class="span6">
            <label class="control-label">型号：</label>
            <div class="controls">
              <input type="text"  placeholder="" class="input-block-level">
            </div>
          </div>
        </div>
        <h1 class="title-line3">
          <span>二、交易需求</span><hr>
        </h1>
        <div class="row-fluid">
          <div class="span6 control-group">
            <label class="control-label">机器类别：</label>
            <div class="controls">
              <label class="radio inline">
                <input type="radio" name="pdt-class" value="教育"> 教育
              </label>
              <label class="radio inline">
                <input type="radio" name="pdt-class" value="医用"> 医用
              </label>
              <label class="radio inline">
                <input type="radio" name="pdt-class" value="益智"> 益智
              </label>
              <label class="radio inline">
                <input type="radio" name="pdt-class" value="民用"> 民用
              </label>
              <label class="radio inline">
                <input type="radio" name="pdt-class" value="工业"> 工业
              </label>
            </div>
          </div>
          <div class="span6 control-group">
            <label class="control-label">交易类型：</label>
            <div class="controls">
		     <?php if(!empty($childClassList)): if(is_array($childClassList)): $k = 0; $__LIST__ = $childClassList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><label class="radio inline">
                <input type="radio" name="pdt-class2"
                <?php if(($cid == '292') AND ($k == '1')): ?>checked
		    			<?php elseif($vo['classid'] == $cid): ?>
		    			checked<?php endif; ?>
                 value="<?php echo ($vo["classtitle"]); ?>" ><?php echo ($vo["classtitle"]); ?>
              </label><?php endforeach; endif; else: echo "" ;endif; endif; ?>
              
            
            </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span6 control-group">
            <label class="control-label">需求数量：</label>
            <div class="controls">
              <input type="text"  placeholder="" class="input-block-level">
            </div>
          </div>
          <div class="span6">
            <label class="control-label">租赁时长：</label>
            <div class="controls">
              <input type="text"  placeholder="" class="input-block-level">
            </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span12 control-group">
            <label class="control-label">备注说明：</label>
            <div class="controls">
              <textarea class="input-block-level" name="" style="height: 80px"></textarea>
            </div>
          </div>
        </div>
        <h1 class="title-line3">
          <span>三、申请人信息</span><hr>
        </h1>
        <div class="row-fluid">
          <div class="span6 control-group">
            <label class="control-label">姓名：</label>
            <div class="controls">
              <input type="text"  placeholder="" class="input-block-level">
            </div>
          </div>
          <div class="span6">
            <label class="control-label">职位：</label>
            <div class="controls">
              <input type="text"  placeholder="" class="input-block-level">
            </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span6 control-group">
            <label class="control-label">公司：</label>
            <div class="controls">
              <input type="text"  placeholder="" class="input-block-level">
            </div>
          </div>
          <div class="span6">
            <label class="control-label">联系电话：</label>
            <div class="controls">
              <input type="text"  placeholder="" class="input-block-level">
            </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span6 control-group">
            <label class="control-label">联系地址：</label>
            <div class="controls">
              <input type="text"  placeholder="" class="input-block-level">
            </div>
          </div>
          <div class="span6">
            <label class="control-label">邮箱：</label>
            <div class="controls">
              <input type="text"  placeholder="" class="input-block-level">
            </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span12 text-center">
            <button class="submit" type="submit">提交申请</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
	<footer>
	<div class="map-list">
		<div class="wrap">
			<ul class="list">
				<?php $_result=ch1('category','0','13','class0:60');if(is_array($_result)): $k = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li <?php if($k == '1'): ?>class="first-child"<?php endif; ?>>
						<h1><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["classtitle"]); ?></a></h1>
						<?php $vo['sub_nav'] = ch1('class',$vo['classid']);?>
						<?php if(!empty($vo["sub_nav"])): if(is_array($vo["sub_nav"])): $i = 0; $__LIST__ = $vo["sub_nav"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><a href="<?php echo ($sub["url"]); ?>"><?php echo ($sub["classtitle"]); ?></a><?php endforeach; endif; else: echo "" ;endif; endif; ?>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>
			<div class="email">
				<a href="">email</a>
				<span class="icon-email"></span>
			</div>
		</div>
	</div>
	<div class="wrap">
		<div class="row-fluid footer-end">
			<div class="span3">
				<a href="">网站地图</a>
				<span>|</span>
				<a href="">联系我们</a>
				<span>|</span>
				<a href="">隐私条款</a>
			</div>
			<div class="span6">
				<span>Copyright Reserved ? China Robot industry Design Application Center</span>
			</div>
			<div class="span3">
				<span class="s">Powered by <a href="http://www.emporioasia.com.cn/" target="_blank">EmporioAsia</a></span>
			</div>
		</div>
	</div>
</footer>
</body>
</html>