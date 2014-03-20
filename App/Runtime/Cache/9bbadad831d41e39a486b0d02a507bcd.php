<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><title><?php echo C('defaultinfo.name');?> - Powered By 悟空CRM</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="description" content=""/><meta name="author" content="悟空CRM"/><link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" /><link href="__PUBLIC__/css/docs.css" rel="stylesheet"/><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script><script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css"><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" /><![endif]--><!--[if lt IE 9]><link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/><![endif]--><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--></head><body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true"><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div><a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a><?php echo W("Navigation");?></div></div></div><script type="text/javascript" src="__PUBLIC__/js/kindeditor-all-min.js"></script><link rel="stylesheet" href="__PUBLIC__/css/kindeditor.css" type="text/css" /><script type="text/javascript"><?php if(C('ismobile') != 1): ?>var editor;
		KindEditor.ready(function(K) {
			editor = K.create('textarea[name="content"]', {
				uploadJson:'<?php echo U("file/editor");?>',
				allowFileManager : true,
				loadStyleMode : false
			});
		});<?php endif; ?></script><div class="container"><div class="page-header" style="border:none; font-size:14px; "><ul class="nav nav-tabs"><li><a href="<?php echo U('setting/sendsms');?>">发送短信</a></li><li class="active"><a href="<?php echo U('setting/sendemail');?>">发送邮件</a></li></ul></div><?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo ($vv); ?></div><?php endforeach; endif; endforeach; endif; if(!empty($contacts)): $first = 0; if(is_array($contacts)): $i = 0; $__LIST__ = $contacts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(!is_email($vo['email'])): if($first==0){ $first = 1; }else{ $first = 2; } if($first == 1): ?><div class="alert alert-warning">部分邮箱由于信息格式不符合，已过滤！<br/>具体如下:<?php endif; echo (trim($vo['email'])); ?> &nbsp; <?php echo ($vo['name']); ?>[客户:<?php echo ($vo['customer_name']); ?>]、<?php endif; endforeach; endif; else: echo "" ;endif; if($first != 0): ?></div><?php endif; endif; ?><div class="row"><div class="span12"></div><div><div class="span2 warning pull-left" style="background-color:#f5f5f5;"><pre><h4>操作提示：</h4>
1、群发邮件时，以换行间隔每个客户，如
   <span style="color:red">123@5kcrm.com
   321@5kcrm.com</span>
2、如需在内容中加入姓名信息，请在邮箱内容中以<span style="color:red">{</span><span style="color:red">name}</span>代替<br><span style="color:red">收件人地址姓名请跟在邮箱后面，如下所示</span>:
   <span style="color:red">123@5kcrm.com,张三
   321@5kcrm.com,李四</span><br>
发件内容中的{name}会自动替换为邮箱之后的姓名
3、<span style="color:red">请不要在短信内容中填写特殊字符,包括换行符。</span></pre></div><form  action="<?php echo U('setting/sendemail');?>" method="post"><div class="pull-left"><div class="pull-left" style="margin-left:30px;"><div class="alert-info alert" style="margin:0px;">收件人邮箱
					<br>(多个收件人换行隔开)</div><div><textarea id="emails" name="emails" style="min-height: 375px;width:200px;"><?php if(!empty($contacts)): if(is_array($contacts)): $i = 0; $__LIST__ = $contacts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(is_email($vo['email'])): echo (trim($vo['email'])); ?>,<?php echo ($vo['name']); ?>,<?php echo ($vo['customer_name']); echo chr(10); endif; endforeach; endif; else: echo "" ;endif; endif; ?></textarea></div></div><div class="pull-left" style="margin-left:30px;"><p><select name="template" id="template" style="width:auto;font-size:12px;" onchange="changeContent()"><option>--选择邮件模板--</option><?php if(is_array($templateList)): $i = 0; $__LIST__ = $templateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v['template_id']); ?>" rel="<?php echo ($v['content']); ?>" id="<?php echo ($v['title']); ?>"><?php echo ($v['subject']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select><a href="<?php echo U('email/index');?>" style="color:red;">设置</a></p><div>邮件主题：<br><input id="title" name="title" style="width:690px;"></input><div><div>邮件内容：<br><textarea id="contented" name="content" placeholder="请阅读左侧操作提示···" style="height: 300px;width:700px;"></textarea><br><input type="submit" class="btn btn-primary" value="发送"/> &nbsp; 
					</div></div></div></form></div></div><!-- End #main-content --></div><script type="text/javascript">
/*function sub(){
	var img = new Array();
	var file = new Array();
	img = $("iframe").contents().find("img").each(function() {
				img.push($(this).attr("data-ke-src"));
			});
	file = $("iframe").contents().find("a").each(function() {
				file.push($(this).attr("href"));
			});
	if(img){
		$.post('<?php echo U("setting/sendemail");?>',
		{img:img,file:file},
		function(data){
			alert(data.info);
		},
		'json');
	}
}*/
/*$(function(){
	$('#submit').click(
		function(){
			var img=[];
			var file=[];
			$("iframe").contents().find("img").each(function(){
				img.push($(this).attr("src"));
			});
			$("iframe").contents().find("a").each(function(){
				file.push($(this).attr("data-ke-src"));
			});
			 
			if(img){
				$.post('<?php echo U("setting/sendemail");?>',
				{img:img,file:file,title:title,emails:emails,content:content},
				function(data){
					alert(data.info);
				},
				'json');
			}

		}
	);
});*/
function changeContent(){
	var a = $('#template option:selected').attr('rel');
	var b = $('#template option:selected').attr('id');
	if(a){
		$('#title').val(b);
		$("iframe").contents().find("body").html(a);
	}else{
		$('#title').val('');
		$("iframe").contents().find("body").html('');
	}
	
}
</script></body></html>