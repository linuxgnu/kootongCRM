<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><title><?php echo C('defaultinfo.name');?> - Powered By 悟空CRM</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="description" content=""/><meta name="author" content="悟空CRM"/><link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" /><link href="__PUBLIC__/css/docs.css" rel="stylesheet"/><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script><script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css"><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" /><![endif]--><!--[if lt IE 9]><link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/><![endif]--><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--></head><body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true"><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div><a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a><?php echo W("Navigation");?></div></div></div><div class="container"><!-- Docs nav ================================================== --><div class="page-header"><h4>日志</h4></div><?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo ($vv); ?></div><?php endforeach; endif; endforeach; endif; ?><p class="view"><b>视图：</b><img src=" __PUBLIC__/img/by_owner.png"/><a href="<?php echo U('action_log/index');?>" <?php if($_GET['by']== null): ?>class="active"<?php endif; ?>>全部</a> |
	<a href="<?php echo U('action_log/index','by=me');?>" <?php if($_GET['by']== 'me'): ?>class="active"<?php endif; ?>>我的日志</a> |
	<img src="__PUBLIC__/img/by_time.png"/><a href="<?php echo U('action_log/index','by=today');?>" <?php if($_GET['by']== 'today'): ?>class="active"<?php endif; ?>>今天的</a> | 
	<a href="<?php echo U('action_log/index','by=week');?>" <?php if($_GET['by']== 'week'): ?>class="active"<?php endif; ?>>本周的</a> | 
	<a href="<?php echo U('action_log/index','by=month');?>" <?php if($_GET['by']== 'month'): ?>class="active"<?php endif; ?>>本月的</a>  &nbsp; 
	<a href="<?php echo U('action_log/index','by=add');?>" <?php if($_GET['by']== 'add'): ?>class="active"<?php endif; ?>>最近创建</a></p><div class="row"><div class="span2 knowledgecate"><ul class="nav nav-list"><li class="active"><a href="javascript:void(0);">按日志类型查看</a></li><li><a href="<?php echo U('action_log/index','by='.$_GET['by']);?>" <?php if($_GET['module'] == null): ?>class="active"<?php endif; ?>><i class="icon-white icon-chevron-right"></i>全部</a></li><li><a href="<?php echo U('action_log/index','module=business&by='.$_GET['by']);?>" <?php if($_GET['module'] == 'business'): ?>class="active"<?php endif; ?>><i class="icon-chevron-right"></i>商机</a></li><li><a href="<?php echo U('action_log/index','module=product&by='.$_GET['by']);?>" <?php if($_GET['module'] == 'product'): ?>class="active"<?php endif; ?>><i class="icon-chevron-right"></i>产品</a></li><li><a href="<?php echo U('action_log/index','module=customer&by='.$_GET['by']);?>" <?php if($_GET['module'] == 'customer'): ?>class="active"<?php endif; ?>><i class="icon-chevron-right"></i>客户</a></li><li><a href="<?php echo U('action_log/index','module=leads&by='.$_GET['by']);?>" <?php if($_GET['module'] == 'leads'): ?>class="active"<?php endif; ?>><i class="icon-chevron-right"></i>线索</a></li></ul></div><div class="span10"><p style="font-size:14px;"><b>筛选条件：</b><a <?php if($_GET['act'] == null): ?>class="active"<?php endif; ?> href="<?php echo U('ActionLog/index','by='.$_GET['by'].'&type=1');?>">全部操作</a> &nbsp; | &nbsp; 
				<a <?php if($_GET['act'] == 'add'): ?>class="active"<?php endif; ?> href="<?php echo U('ActionLog/index','by='.$_GET['by'].'&act=add');?>">添加</a> &nbsp; | &nbsp; 
				<a <?php if($_GET['act'] == 'edit'): ?>class="active"<?php endif; ?> href="<?php echo U('ActionLog/index','by='.$_GET['by'].'&act=edit');?>">编辑</a> &nbsp; | &nbsp; 
				<a <?php if($_GET['act'] == 'delete'): ?>class="active"<?php endif; ?> href="<?php echo U('ActionLog/index','by='.$_GET['by'].'&act=delete');?>">删除</a> &nbsp; | &nbsp; 
				<a <?php if($_GET['act'] == 'completedelete'): ?>class="active"<?php endif; ?> href="<?php echo U('ActionLog/index','task&by='.$_GET['by'].'&act=completedelete');?>">回收站</a> &nbsp; | &nbsp; 
			</p><ul class="nav pull-left"><li class="pull-left"><a id="delete" class="btn" style="margin-right: 5px;"><i class="icon-remove"></i>&nbsp;删除</a></li><li class="pull-left"><form class="form-inline" id="searchForm" onsubmit="return checkSearchForm();" action="index.php" method="get"><ul class="nav pull-left"><li class="pull-left">
								&nbsp;
								<select id="field" style="width:auto" onchange="changeCondition()" name="field"><option class="word" value="content">操作人</option><option class="date" value="create_time">操作时间</option></select>&nbsp;&nbsp;
							</li><li id="conditionContent" class="pull-left"><select id="condition" style="width:auto" name="condition" onchange="changeSearch()"><option value="contains">包含</option><option value="not_contain">不包含</option><option value="is">是</option><option value="isnot">不是</option><option value="start_with">开始字符</option><option value="end_with">结束字符</option><option value="is_empty">为空</option><option value="is_not_empty">不为空</option></select>&nbsp;&nbsp;
							</li><li id="searchContent" class="pull-left"><input id="search" type="text" class="input-medium search-query" name="search"/>&nbsp;&nbsp;</li><li class="pull-left"><input type="hidden" name="m" value="action_log"/><?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; if($_GET['act']!= null): ?><input type="hidden" name="act" value="<?php echo ($_GET['act']); ?>"/><?php endif; if($_GET['module']!= null): ?><input type="hidden" name="module" value="<?php echo ($_GET['module']); ?>"/><?php endif; ?><button type="submit" class="btn"><img src="__PUBLIC__/img/search.png"/>  搜索</button></li></ul></form></li></ul></div><div class="span10"><form id="form1" method="post"><table class="table table-hover table-striped"><?php if($list == null): ?><tr><td>----暂无数据！----</td></tr><?php else: ?><thead><tr><th><input id="control_all" class="control_all" type="checkbox" /></th><th>操作人</th><th>模块</th><th>内容</th><th>时间</th></tr></thead><tbody><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><input class="log_id" type="checkbox" name="log_id[]" value="<?php echo ($vo["log_id"]); ?>"/></td><td><?php if(!empty($vo["creator"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["creator"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["creator"]["user_name"]); ?></a><?php endif; ?></td><td><?php echo ($vo["module_name"]); ?></a></td><td><?php echo ($vo["content"]); ?></a></td><td><?php echo (date("Y-m-d H:i:s",$vo["create_time"])); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody><?php endif; ?></table></form></div></div></div><div class="hide" id="dialog-role-info" title="员工信息">loading...</div><script type="text/javascript">
$("#dialog-role-info").dialog({
    autoOpen: false,
    modal: true,
	width: 600,
	maxHeight: 400,
	position: ["center",100]
});
$(function(){
	<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
		$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
		$("#search").prop('value', '<?php echo ($_GET['search']); ?>');<?php endif; ?>
	$('#delete').click(function(){
		if(confirm('你确定要删除?')){
			$("#form1").attr('action', '<?php echo U("log/log_delete");?>');
			$("#form1").submit();
		}
	});
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
})
</script></body></html>