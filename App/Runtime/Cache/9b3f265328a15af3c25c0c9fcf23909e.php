<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><title><?php echo C('defaultinfo.name');?> - Powered By 悟空CRM</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="description" content=""/><meta name="author" content="悟空CRM"/><link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" /><link href="__PUBLIC__/css/docs.css" rel="stylesheet"/><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script><script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css"><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" /><![endif]--><!--[if lt IE 9]><link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/><![endif]--><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--></head><body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true"><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div><a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a><?php echo W("Navigation");?></div></div></div><div class="container"><!-- Docs nav ================================================== --><div style="margin-top:10px; font-size:14px;"><ul class="nav nav-tabs"><li class="active"><a href="<?php echo U('task/index');?>"><img src="__PUBLIC__/img/renwu.png"/>&nbsp; 任务</a></li><li><a href="<?php echo U('task/analytics');?>"><img src="__PUBLIC__/img/tongji.png"/> &nbsp;统计</a></li><li><a href="http://5kcrm.com/index.php?m=doc&a=index&id=14" target="_blank" style="font-size: 12px;color: rgb(255, 102, 0);"><img width="20px;" src="__PUBLIC__/img/help.png"/> 帮助</a></li></ul></div><?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo ($vv); ?></div><?php endforeach; endif; endforeach; endif; ?><p class="view"><b>视图：</b><img src=" __PUBLIC__/img/by_owner.png"/><a href="<?php echo U('task/index');?>" <?php if($_GET['by']== null): ?>class="active"<?php endif; ?>>全部</a> |
	<a href="<?php echo U('task/index','by=me');?>" <?php if($_GET['by']== 'me'): ?>class="active"<?php endif; ?>>我的任务</a> |
	<a href="<?php echo U('task/index','by=sub');?>" <?php if($_GET['by']== 'sub'): ?>class="active"<?php endif; ?>>下属任务</a> | 
	<a href="<?php echo U('task/index','by=create');?>" <?php if($_GET['by']== 'create'): ?>class="active"<?php endif; ?>>我分配的任务</a>  &nbsp;  &nbsp; 
	<img src=" __PUBLIC__/img/by_status.png"/><a href="<?php echo U('task/index','by=s1');?>" <?php if($_GET['by']== 's1'): ?>class="active"<?php endif; ?>>未启动</a> | 	
	<a href="<?php echo U('task/index','by=s2');?>" <?php if($_GET['by']== 's2'): ?>class="active"<?php endif; ?>>推迟</a> | 	
	<a href="<?php echo U('task/index','by=s3');?>" <?php if($_GET['by']== 's3'): ?>class="active"<?php endif; ?>>进行中</a> | 	
	<a href="<?php echo U('task/index','by=s4');?>" <?php if($_GET['by']== 's4'): ?>class="active"<?php endif; ?>>已完成</a> | 	
	<a href="<?php echo U('task/index','by=closed');?>" <?php if($_GET['by']== 'closed'): ?>class="active"<?php endif; ?>>关闭的</a>  &nbsp;  &nbsp; 
	<img src="__PUBLIC__/img/by_time.png"/><a href="<?php echo U('task/index','by=today');?>" <?php if($_GET['by']== 'today'): ?>class="active"<?php endif; ?>>今日截止</a> | 
	<a href="<?php echo U('task/index','by=week');?>" <?php if($_GET['by']== 'week'): ?>class="active"<?php endif; ?>>本周截止</a> | 
	<a href="<?php echo U('task/index','by=month');?>" <?php if($_GET['by']== 'month'): ?>class="active"<?php endif; ?>>本月截止</a> |
	<a href="<?php echo U('task/index','by=add');?>" <?php if($_GET['by']== 'add'): ?>class="active"<?php endif; ?>>最近分配</a> | 
	<a href="<?php echo U('task/index','by=update');?>" <?php if($_GET['by']== 'update'): ?>class="active"<?php endif; ?>>最近更新</a> &nbsp;  &nbsp; 
	<a href="<?php echo U('task/index','by=deleted');?>" <?php if($_GET['by']== 'deleted'): ?>class="active"<?php endif; ?>><img src="__PUBLIC__/img/task_garbage.png"/> 回收站</a> &nbsp;  &nbsp; 
	</p><div class="row"><div class="span12" style="height:36px;"><ul class="nav pull-left"><li class="pull-left"><?php if(session('?admin') or $_GET['by']!= 'deleted'): ?><a id="delete"  class="btn"><i class="icon-remove"></i>&nbsp;删除</a><?php endif; ?>&nbsp; </li><li class="pull-left"><form class="form-inline" id="searchForm" onsubmit="return checkSearchForm();" action="" method="get"><ul class="nav pull-left"><li class="pull-left">&nbsp; 
						<select id="field" style="width:auto" onchange="changeCondition()" name="field"><option class="all" value="all">任意字段</option><option class="word" value="subject">任务主题</option><option class="role" value="owner_role_id">执行人</option><option class="role" value="creator_role_id">创建人</option><option class="task_status" value="status">任务状态</option><option class="task_priority" value="priority">优先级</option><option class="word" value="description">描述</option><option class="date" value="due_date">截止日期</option><option class="date" value="create_date">创建日期</option><option class="date" value="update_date">更新日期</option></select>&nbsp;&nbsp;
					</li><li id="conditionContent" class="pull-left"><select id="condition" style="width:auto" name="condition" onchange="changeSearch()"><option value="contains">包含</option><option value="is">是</option><option value="start_with">开始字符</option><option value="end_with">结束字符</option><option value="is_empty">为空</option></select>&nbsp;&nbsp;
					</li><li id="searchContent" class="pull-left"><input id="search" type="text" class="input-medium search-query" name="search"/>&nbsp;&nbsp;
					</li><li class="pull-left"><input type="hidden" name="m" value="Task"/><?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?><input type="submit" class="btn" value="搜索"/></li></ul></form></li></ul><div class="pull-right"><a href="<?php echo U('task/add');?>" class="btn btn-primary"><i class="icon-plus"></i>&nbsp; 新建任务</a>&nbsp;
				<div class="btn-group"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i>&nbsp; 任务工具<span class="caret"></span></button><ul class="dropdown-menu"><!--<li><a href="javascript:return(0);" id="import_excel"  class="link">导入任务</a></li>--><li><a href="<?php echo U('task/excelexport');?>"  onclick="return window.confirm(&quot;您确定要导出任务吗 ?&quot;);" class="link"><i class="icon-download"></i> 导出任务</a></li></ul></div></div></div><div class="span12"><form id="form1" action="" method="post"><table class="table table-hover table-striped"><?php if(empty($task_list)): ?><tr><td>----暂无数据！----</td></tr><?php else: ?><thead><tr><th><input type="checkbox" id="control_all" name="control_all"/></th><th width="20px">&nbsp;</th><th>主题</th><th>关联信息</th><th>执行人</th><?php if(C('ismobile') != 1): ?><th>状态</th><th>优先级</th><?php endif; if(C('ismobile') != 1 and $_GET['by']== 'deleted'): ?><th>删除人</th><th>删除时间</th><?php elseif(C('ismobile') != 1): ?><th>创建人</th><th>截止时间</th><?php endif; ?><th>操作</th></tr></thead><tfoot><tr><td colspan="10"><p>注： <img src="__PUBLIC__/img/task_owner.png"/> 我负责的 &nbsp; <img src="__PUBLIC__/img/task_creator.png"/>我分配的 &nbsp; </p><?php echo ($page); ?></td></tr></tfoot><tbody><?php if(is_array($task_list)): $i = 0; $__LIST__ = $task_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><input name="task_id[]" class="check_list" type="checkbox" value="<?php echo ($vo["task_id"]); ?>"/></td><td><?php if(session('role_id') == $vo['owner_role_id'] ): ?><img src="__PUBLIC__/img/task_owner.png"/><?php elseif(session('role_id') == $vo['creator_role_id'] ): ?><img src="__PUBLIC__/img/task_creator.png"/><?php endif; ?></td><td><a href="<?php echo U('task/view','id='.$vo['task_id']);?>"><?php echo ($vo["subject"]); ?></a></td><td><?php echo ($vo["module"]["module_name"]); echo ($vo["module"]["name"]); ?></td><td><?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?></td><?php if(C('ismobile') != 1): ?><td><?php echo ($vo["status"]); ?></td><td><?php echo ($vo["priority"]); ?></td><?php endif; if(C('ismobile') != 1 and $_GET['by']== 'deleted'): ?><td><?php if(!empty($vo["deletor"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["deletor"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["deletor"]["user_name"]); ?></a><?php endif; ?></td><td><?php if(!empty($vo["delete_time"])): echo (date("Y-m-d H:i",$vo["delete_time"])); endif; ?></td><?php elseif(C('ismobile') != 1): ?><td><?php if(!empty($vo["creator"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["creator"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["creator"]["user_name"]); ?></a><?php endif; ?></td><td><?php if($vo['due_date'] <= 0){ }elseif ($vo['diff_days'] > 0) { ?><img src="__PUBLIC__/img/task_mtime.png"/> 还有<?php echo ($vo['diff_days']); ?>天
										<?php } elseif($vo['diff_days'] < 0) { ?><img width="12px" src="__PUBLIC__/img/task_alert.png"/>&nbsp;&nbsp;<span style="color:red;">超期<?php echo abs($vo['diff_days']) ?>天</span><?php } else{ ?><img src="__PUBLIC__/img/task_ltime.png"/>&nbsp;<span style="color:rgb(255, 0, 224);">今天完成</span><?php } ?></td><?php endif; ?><td><a href="<?php echo U('task/view','id='.$vo['task_id']);?>">查看</a>&nbsp;
										<?php if($_GET['by']!= 'deleted'): ?><a href="<?php echo U('task/edit','id='.$vo['task_id']);?>">编辑</a><?php else: ?><a href="<?php echo U('task/revert','id='.$vo['task_id']);?>" title="还原">还原</a><?php endif; if($vo['isclose'] == 0 and $_GET['by']!= 'deleted' and $vo['creator']['role_id'] == $_SESSION['role_id']): ?><a href="<?php echo U('task/close','id='.$vo['task_id']);?>">关闭 &nbsp;</a><?php elseif($_GET['by']!= 'deleted' and $vo['isclose'] == 1): ?>已关闭 &nbsp;<?php endif; ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody><?php endif; ?></table></form></div></div></div><div class="hide" id="dialog-import" title="导入数据">loading...</div><div class="hide" id="dialog-role-info" title="员工信息">loading...</div><script type="text/javascript"><?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=800;<?php endif; ?>
$("#dialog-role-info").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100]
});
$("#dialog-import").dialog({
	autoOpen: false,
	modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100]
});
function changeContent(){
	a = $("#select1  option:selected").val();
	window.location.href="<?php echo U('task/index','by=');?>"+a;
}

$(function(){
<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
	$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
	$("#search").prop('value', '<?php echo ($_GET['search']); ?>');<?php endif; ?>
	$("#control_all").click(function(){
		$("input[class='check_list']").prop('checked', $(this).prop("checked"));
	});
	$('#delete').click(function(){
		if(confirm('你确定要删除?')){
		<?php if($_SESSION['admin']== 1 and $_GET['by']== 'deleted'): ?>$("#form1").attr('action', '<?php echo U("task/completedelete");?>');
			$("#form1").submit();
		<?php else: ?>
			$("#form1").attr('action', '<?php echo U("task/delete");?>');
			$("#form1").submit();<?php endif; ?>
		}
	});
	$("#import_excel").click(function(){
		$('#dialog-import').dialog('open');
		$('#dialog-import').load('<?php echo U("task/excelimport");?>');
	});
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
});
</script></body></html>