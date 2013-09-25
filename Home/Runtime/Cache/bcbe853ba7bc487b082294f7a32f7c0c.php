<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Theme/Front/default/style.css" />
<script type="text/javascript" src="__PUBLIC__/Js/lib/sea.js" id="seajsnode"></script>

<script type="text/javascript">
        seajs.config({
            alias: {
                'jquery': '__PUBLIC__/Js/lib/jquery-1.10.2.min.js',
                'bpopup': '__PUBLIC__/Js/lib/jquery.bpopup.min.js',
                'carouFredSel':'__PUBLIC__/Js/lib/jquery.carouFredSel-6.2.0-packed.js',
                'dot':'__PUBLIC__/Js/lib/doT.min.js'
            },
            base:'__PUBLIC__/Js',
            preload:['jquery']
        });
        seajs.use('china_robot');
    </script>

<!-- <script language="javascript" src="__PUBLIC__/Js/jquery.js"></script>
<script language="javascript" src="__PUBLIC__/Plugin/selectbox/selectbox.js">--> 
<!--下拉菜单美化--> 
</script>
<style type="text/css">
#nav_<?php echo (($parentCids[0])?($parentCids[0]):0); ?>{ 
	/*font-weight:bolder; color:#F00*/
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
                            <a href="#" class="first-child">注册</a>
                            <a href="#">登陆</a>
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
                         <?php $_result=ch1('class','0','13','class0:0');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li id="nav_<?php echo ($vo["classid"]); ?>">            	           
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
    <div class="short-img"><img src="__PUBLIC__/Theme/Front/images/about-short-pic03.png" alt=""/></div>
  </div>
</section>
<section class="word-download pg-part-bg">
  <div class="wrap row-fluid">
    <span12>
      <p class="text">上海机器人设计应用中心致力于提供最专业全面的交易信息和服务。您可以通过应用中心轻松提交您的机器人产权转让、销售、和租赁服务。我们在收到您的服务申请后会有专员与您联系，通过审核后即可发布。</p>
    </span12>
  </div>
</section>
<section class="tab-top">
  <div class="tabs">
    <a href="<?php echo U('Index/question');?>" class="selected">专业咨询</a>
    <a href="<?php echo U('Index/faq');?>">专家解答</a>
  </div>
</section>
<section class="applyfor">
  <div class="wrap">
    <div class="apply-form">
      <form action="" class="form-horizontal">
        <h1 class="title-line3">
          <span>咨询人个人信息</span><hr>
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
          <div class="span6 control-group">
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
          <div class="span6 control-group">
            <label class="control-label">邮箱：</label>
            <div class="controls">
              <input type="text"  placeholder="" class="input-block-level">
            </div>
          </div>
        </div>
        <h1 class="title-line3">
          <span>咨询问题类别</span><em class="help-inline">以下内容均为必填项，我们会尽快回复收到的咨询。</em><hr>
        </h1>

        <div class="row-fluid">
          <div class="span6 control-group">
            <label class="control-label">问题类别：</label>
            <div class="controls">
              <select name="" class="input-block-level">
                <option value="">机器人使用方法</option>
              </select>
            </div>
          </div>
          <div class="span6 control-group">
            <label class="control-label">其他类别：</label>
            <div class="controls">
              <input type="text"  placeholder="" class="input-block-level">
            </div>
          </div>
        </div>
        <h1 class="title-line3">
          <span>咨询问题内容</span><hr>
        </h1>
        <div class="row-fluid">
          <div class="span12 control-group">
            <label class="control-label">向谁提问：</label>
            <div class="controls">
              <input type="text"  placeholder="" class="input-block-level">
            </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span12 control-group">
            <label class="control-label">问题内容：</label>
            <div class="controls">
              <textarea class="input-block-level" name="" style="height: 80px"></textarea>
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
                <li class="first-child">
                    <h1><a href="<?php echo U('Index/about');?>">关于我们</a></h1>
                  <a href="<?php echo U('Index/about');?>">园区介绍</a>
                  <a href="<?php echo U('Index/join_us');?>">加入协会</a>
                </li>
                <li>
                    <h1><a href="<?php echo U('Index/product');?>">产品展示</a></h1>
                  <a href="<?php echo U('Index/product',array(id=>1));?>">教育</a>
                  <a href="<?php echo U('Index/product',array(id=>2));?>">医用</a>
                  <a href="<?php echo U('Index/product',array(id=>3));?>">益智</a>
                  <a href="<?php echo U('Index/product',array(id=>4));?>">民用</a>
                  <a href="<?php echo U('Index/product',array(id=>5));?>">工业 </a>
                </li>
                <li>
                    <h1><a href="<?php echo U('Index/service');?>">专业服务</a></h1>
                    <a href="<?php echo U('Index/service',array(id=>1));?>">租赁</a>
                    <a href="<?php echo U('Index/service',array(id=>2));?>">销售</a>
                    <a href="<?php echo U('Index/service',array(id=>3));?>">转让</a>
                </li>
                <li>
                    <h1><a href="<?php echo U('Index/question');?>">专家在线</a></h1>
                    <a href="<?php echo U('Index/question');?>">专家咨询</a>
                    <a href="<?php echo U('Index/faq');?>">专家解答</a>
                </li>
                <li>
                    <h1><a href="<?php echo U('Index/press');?>">媒体关系</a></h1>
                  <a href="<?php echo U('Index/trends');?>">行业动态</a>
                  <a href="<?php echo U('Index/press');?>">公司新闻</a>
                  <a href="<?php echo U('Index/download');?>">资料下载</a>
                </li>
                <li>
                    <h1><a href="<?php echo U('Index/join_us');?>#contact">联系我们</a></h1>
                </li>
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