<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><title><?php echo C('defaultinfo.name');?> - Powered By 悟空CRM</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="description" content=""/><meta name="author" content="悟空CRM"/><link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" /><link href="__PUBLIC__/css/docs.css" rel="stylesheet"/><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script><script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css"><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" /><![endif]--><!--[if lt IE 9]><link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/><![endif]--><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--></head><body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true"><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div><a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a><?php echo W("Navigation");?></div></div></div><div class="container"><div class="page-header"><h3><img style="height:30px;" src="__PUBLIC__/img/working_platform.png"/> &nbsp;<span><?php echo (session('name')); ?>的工作台 <a id="add" class="btn btn-primary pull-right" ><i class="icon-plus"></i>&nbsp; 添加组件</a></span></h3></div><?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo ($vv); ?></div><?php endforeach; endif; endforeach; endif; ?><div class="row" id="widgets"><?php if(empty($widget)): ?><div class="span12"><div class="pull-left row"><?php endif; ?><div class="<?php if(empty($widget)): ?>span9<?php else: ?>span12<?php endif; ?>"><?php if(!empty($announcement_list)): ?><h4><img src="__PUBLIC__/img/index_notice.png" style="width:17.5px;"/> 系统公告</h4><div style="padding:10px;font-size: 12px;" class="hero-unit"><?php if(is_array($announcement_list)): $k = 0; $__LIST__ = $announcement_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><p><?php echo ($k); ?>、<span style="font-size: 14px;color:#<?php echo ($vo["color"]); ?>"><?php echo ($vo["title"]); ?></span><?php if((time()-$vo['update_time']) < 86400*7): ?>&nbsp; <img src="./Public/img/new.gif"><?php endif; ?> &nbsp; (更新时间：<?php echo (date("Y-m-d H:i",$vo["update_time"])); ?>)
                        <a rel="<?php echo ($vo['announcement_id']); ?>" href="javascript:void(0);" id="show<?php echo ($vo['announcement_id']); ?>" style="text-decoration: none;" class="pull-right" onclick="javascript:show(<?php echo ($vo['announcement_id']); ?>);"><i class="icon-search"></i> 查看详情</a><a rel="<?php echo ($vo['announcement_id']); ?>" href="javascript:void(0);" id="unshow<?php echo ($vo['announcement_id']); ?>" style="text-decoration: none;" class="pull-right hide"  onclick="javascript:unshow(<?php echo ($vo['announcement_id']); ?>);"><i class="icon-chevron-up"></i> 收起详情</a></p><p><div id="detail<?php echo ($vo['announcement_id']); ?>" class="hide"><?php echo ($vo["content"]); ?></div></p><?php endforeach; endif; else: echo "" ;endif; ?></div><?php endif; ?><h3 style="color:#666666;">欢迎使用悟空CRM!</h3></div><?php if(empty($widget)): ?></div><div class="pull-right row"></div></div><?php endif; if(empty($widget)): echo W('Welcome'); else: if(is_array($widget)): $i = 0; $__LIST__ = $widget;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo W($vo['widget'], $vo); endforeach; endif; else: echo "" ;endif; endif; ?></div><div id="dialog-message" class="hide" title="添加面板组件">loading...</div><div id="dialog-message2" class="hide" title="修改面板组件">loading...</div><div class="hide" id="dialog-role-info" title="员工信息">loading...</div><script type="text/javascript">
$('#dialog-message').dialog({
	autoOpen: false,
	modal: true,
	width: 600,
	maxHeight: 400,
	position :["center",100]
});

$('#dialog-message2').dialog({
	autoOpen: false,
	modal: true,
	width: 600,
	maxHeight: 400,
	position :["center",100]
});
$("#dialog-role-info").dialog({
    autoOpen: false,
    modal: true,
	width: 600,
	maxHeight: 400,
	position: ["center",100]
});
function show(id){
	$("#detail"+id).show();
	$("#show"+id).hide();
	$("#unshow"+id).show();
}
function unshow(id){
	$("#detail"+id).hide();
	$("#unshow"+id).hide();
	$("#show"+id).show();
}
$(function(){
	$("#add").click(
		function(){
			$('#dialog-message').dialog('open');
			$('#dialog-message').load('<?php echo U("index/widget_add");?>');
		}
	);
	$(".update").click(
		function(){
			id = $(this).attr('rel');
			$('#dialog-message2').dialog('open');
			$('#dialog-message2').load("<?php echo U('index/widget_edit','id=');?>"+id);
		}
	);
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
	
});
</script></body></html>