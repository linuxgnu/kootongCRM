<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><title><?php echo C('defaultinfo.name');?> - Powered By 悟空CRM</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="description" content=""/><meta name="author" content="悟空CRM"/><link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" /><link href="__PUBLIC__/css/docs.css" rel="stylesheet"/><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script><script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css"><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" /><![endif]--><!--[if lt IE 9]><link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/><![endif]--><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--></head><body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true"><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div><a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a><?php echo W("Navigation");?></div></div></div><script src="__PUBLIC__/js/PCASClass.js" type="text/javascript"></script><div class="container"><!-- Docs nav ================================================== --><div class="page-header" style="border:none; font-size:14px;"><ul class="nav nav-tabs"><li class="active"><a href="<?php echo U('business/index');?>"><img src="__PUBLIC__/img/shangji.png"/>&nbsp; 商机</a></li><li><a href="<?php echo U('business/analytics');?>"><img src="__PUBLIC__/img/tongji.png"/> &nbsp;统计</a></li><li><a href="http://5kcrm.com/index.php?m=doc&a=index&id=26" target="_blank" style="font-size: 12px;color: rgb(255, 102, 0);"><img width="20px;" src="__PUBLIC__/img/help.png"/> 帮助</a></li></ul></div><?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo ($vv); ?></div><?php endforeach; endif; endforeach; endif; ?><p class="view"><b>视图：</b><img src=" __PUBLIC__/img/by_owner.png"/><a href="<?php echo U('business/index');?>" <?php if($_GET['by']== null): ?>class="active"<?php endif; ?>>全部</a> |
		<a href="<?php echo U('business/index','by=me');?>" <?php if($_GET['by']== 'me'): ?>class="active"<?php endif; ?>>我负责的</a> | 
		<a href="<?php echo U('business/index','by=create');?>" <?php if($_GET['by']== 'create'): ?>class="active"<?php endif; ?>>我创建的</a> | 
		<a href="<?php echo U('business/index','by=sub');?>" <?php if($_GET['by']== 'sub'): ?>class="active"<?php endif; ?>>下属负责</a> | 
		<a href="<?php echo U('business/index','by=subcreate');?>" <?php if($_GET['by']== 'subcreate'): ?>class="active"<?php endif; ?>>下属创建的</a>  &nbsp;  &nbsp; 
		<img src="__PUBLIC__/img/by_time.png"/><a href="<?php echo U('business/index','by=today');?>" <?php if($_GET['by']== 'today'): ?>class="active"<?php endif; ?>>今日需联系</a> | 
		<a href="<?php echo U('business/index','by=week');?>" <?php if($_GET['by']== 'week'): ?>class="active"<?php endif; ?>>本周需联系</a> | 
		<a href="<?php echo U('business/index','by=month');?>" <?php if($_GET['by']== 'month'): ?>class="active"<?php endif; ?>>本月需联系</a> | 
		<a href="<?php echo U('business/index','by=d7');?>" <?php if($_GET['by']== 'd7'): ?>class="active"<?php endif; ?>>7日未联系</a> | 
		<a href="<?php echo U('business/index','by=d15');?>" <?php if($_GET['by']== 'd15'): ?>class="active"<?php endif; ?>>15日未联系</a> | 
		<a href="<?php echo U('business/index','by=d30');?>" <?php if($_GET['by']== 'd30'): ?>class="active"<?php endif; ?>>30日未联系</a> |  
		<a href="<?php echo U('business/index','by=add');?>" <?php if($_GET['by']== 'add'): ?>class="active"<?php endif; ?>>最近创建</a> | 
		<a href="<?php echo U('business/index','by=update');?>" <?php if($_GET['by']== 'update'): ?>class="active"<?php endif; ?>>最近更新</a>  &nbsp;  &nbsp; 
		<a href="<?php echo U('business/index','by=deleted');?>" <?php if($_GET['by']== 'deleted'): ?>class="active"<?php endif; ?>><img src="__PUBLIC__/img/task_garbage.png"/> 回收站</a></p><div class="row"><div class="span12"><ul class="nav pull-left"><?php if($_SESSION['admin']== 1 or $_GET['by']!= 'deleted'): ?><li class="pull-left"><a id="delete"  class="btn" style="margin-right: 5px;"><i class="icon-remove"></i>删除</a></li><?php endif; ?><li class="pull-left"><form class="form-inline" id="searchForm" onsubmit="return checkSearchForm();" action="" method="get"><ul class="nav pull-left"><li class="pull-left"><select id="field" style="width:auto" onchange="changeCondition()" name="field"><option class="" value="">--请选择筛选条件--</option><?php if(is_array($search_field_array)): $i = 0; $__LIST__ = $search_field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($v['field'] == 'status_id'): ?><option class="business_status" value="<?php echo ($v[field]); ?>" rel="business"><?php echo ($v[name]); ?></option><?php else: ?><option class="<?php echo ($v['form_type']); ?>" value="<?php echo ($v[field]); ?>" rel="business"><?php echo ($v[name]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?><option class="role" value="owner_role_id">负责人</option><option class="date" value="create_time">创建时间</option><option class="date" value="update_time">修改时间</option></select>&nbsp;&nbsp;
						</li><li id="conditionContent" class="pull-left"><select id="condition" style="width:auto" name="condition" onchange="changeSearch()"><option value="contains">包含</option><option value="is">是</option><option value="start_with">开始字符</option><option value="end_with">结束字符</option><option value="is_empty">为空</option></select>&nbsp;&nbsp;
						</li><li id="searchContent" class="pull-left"><input id="search" type="text" class="input-medium search-query" name="search"/>&nbsp;&nbsp;
						</li><li class="pull-left"><input type="hidden" name="m" value="business"/><?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?><button type="submit" class="btn"><img src="__PUBLIC__/img/search.png"/>  搜索</button></li></ul></form></li></ul><div class="pull-right"><a class="btn btn-primary" href="<?php echo U('business/add');?>"><i class="icon-plus"></i>&nbsp; 添加商机</a>&nbsp;
				<div class="btn-group"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i>&nbsp; 商机工具 <span class="caret"></span></button><ul class="dropdown-menu"><!-- <li><a href="javascript:return(0);" id="import_excel"  class="link"><i class="icon-down"><i class="icon-upload"></i>导入商机</i></a></li> --><li><a href="<?php echo U('business/excelexport');?>"  onclick="return window.confirm('您确定要导出商机吗 ?');" class="link"><i class="icon-download"></i>导出商机</a></li></ul></div></div></div><div class="span12"><form id="form1"  method="post"><table class="table table-hover table-striped"><?php if(!empty($list)): ?><thead><tr id="childNodes_num"><th><input class="check_all" id="check_all" type="checkbox" /> &nbsp;</th><th width="20px">&nbsp;</th><?php if(is_array($field_array)): $i = 0; $__LIST__ = $field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(C('ismobile') == 1 and $i <= 1): ?><th><?php echo ($vo["name"]); ?></th><?php elseif(C('ismobile') != 1): ?><th><?php echo ($vo["name"]); ?></th><?php endif; endforeach; endif; else: echo "" ;endif; ?><th>负责人</th><th>创建人</th><?php if((C('ismobile') != 1) and ($_GET['by']== 'deleted')): ?><th>删除人</th><th>删除时间</th><?php elseif(C('ismobile') != 1): ?><th>创建时间</th><?php endif; ?><th>操作</th></tr></thead><tfoot><?php if($_GET['by']== 'deleted'): ?><tr><td id="td_colspan"><p>注： <img src="__PUBLIC__/img/task_owner.png"/> 我负责的 &nbsp; <img src="__PUBLIC__/img/task_creator.png"/>我创建的 &nbsp; </p><?php echo ($page); ?></td></tr><?php else: ?><tr><td id="td_colspan"><p>注： <img src="__PUBLIC__/img/task_owner.png"/> 我负责的 &nbsp; <img src="__PUBLIC__/img/task_creator.png"/>我创建的 &nbsp; </p><?php echo ($page); ?></td></tr><?php endif; ?></tfoot><tbody><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><input type="checkbox" class="check_list" name="business_id[]" value="<?php echo ($vo["business_id"]); ?>"/> &nbsp;
							</td><td><?php if(session('role_id') == $vo['owner_role_id'] ): ?><img src="__PUBLIC__/img/task_owner.png"/><?php elseif(session('role_id') == $vo['creator_role_id'] ): ?><img src="__PUBLIC__/img/task_creator.png"/><?php endif; ?></td><?php if(is_array($field_array)): $i = 0; $__LIST__ = $field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if(C('ismobile') == 1 and $i <= 1): ?><td><?php if($v['field'] == 'name'): ?><a href="<?php echo U('business/view', 'id='.$vo['business_id']);?>"><span style="color:#<?php echo ($v['color']); ?>"><?php echo ($vo[$v['field']]); ?></span></a><?php endif; ?></td><?php elseif(C('ismobile') != 1): ?><td><?php if($v['field'] == 'name'): ?><a href="<?php echo U('business/view', 'id='.$vo['business_id']);?>"><span style="color:#<?php echo ($v['color']); ?>"><?php echo ($vo[$v['field']]); ?></span></a><?php elseif($v['field'] == 'contacts_id'): ?><a target="_blank" href="<?php echo U('contacts/view','id='.$vo['contacts_id']);?>"><?php echo ($vo['contacts_name']); ?></a></span><?php elseif($v['field'] == 'customer_id'): ?><a target="_blank" href="<?php echo U('customer/view','id='.$vo['customer_id']);?>"><?php echo ($vo['customer_name']); ?></a><?php elseif($v['field'] == 'nextstep_time' and $vo[$v['field']] < (strtotime(date('Y-m-d'))+86400) and $vo[$v['field']] >= 0 and $vo[$v['field']] > (strtotime(date('Y-m-d')))): ?><span style="color:green"><?php echo (date('Y-m-d',$vo[$v['field']])); ?></span><?php elseif($v['field'] == 'nextstep_time' and $vo[$v['field']] < strtotime(date('Y-m-d')) and $vo[$v['field']] > 0): ?><span style="color:red"><?php echo (date('Y-m-d',$vo[$v['field']])); ?></span><?php elseif($v['form_type'] == 'datetime' and $vo[$v['field']] > 0): ?><span style="color:#<?php echo ($v['color']); ?>"><?php echo (date('Y-m-d',$vo[$v['field']])); ?></span><?php else: ?><span style="color:#<?php echo ($v['color']); ?>"><?php if(!empty($vo[$v['field']])): echo ($vo[$v['field']]); endif; ?></span><?php endif; ?></td><?php endif; endforeach; endif; else: echo "" ;endif; ?><td><?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?></td><td><?php if(!empty($vo["creator"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["creator"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["creator"]["user_name"]); ?></a><?php endif; ?></td></if><?php if($_GET['by']== 'deleted'): if(C('ismobile') != 1): ?><td><a class="role_info" rel="<?php echo ($vo["delete_role"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["delete_role"]["user_name"]); ?></a></td><td><?php echo (date('Y-m-d',$vo["delete_time"])); ?></td><?php endif; ?><td><a href="<?php echo U('business/view','id='.$vo['business_id']);?>" title="查看">查看</a>&nbsp;
								<a href="<?php echo U('business/revert','id='.$vo['business_id']);?>" title="还原">还原</a></td><?php else: if(C('ismobile') != 1): ?><td><?php echo (date('Y-m-d',$vo["create_time"])); ?></td><?php endif; ?><td><a href="<?php echo U('business/view','id='.$vo['business_id']);?>" title="查看">查看</a>&nbsp;
								<a class="advance" rel="<?php echo ($vo["business_id"]); ?>" href="javascript:void(0)">推进</a>&nbsp;
								<a href="<?php echo U('business/edit','id='.$vo['business_id']);?>" title="编辑">编辑</a></td><?php endif; ?></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody><?php else: ?><tr><td>----暂无数据！----</td></tr><?php endif; ?></table></form></div></div></div><div class="hide" id="dialog-import" title="导入数据">loading...</div><div class="hide" id="dialog-role-info" title="员工信息">loading...</div><div class="hide" id="dialog-advance" title="商机推进">loading...</div><script type="text/javascript"><?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=800;<?php endif; ?>
$("#dialog-advance").dialog({
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
$("#dialog-role-info").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100]
});
$(function(){
	$("#check_all").click(function(){
		$("input[class='check_list']").prop('checked', $(this).prop("checked"));
	});
	$("#import_excel").click(function(){
		$('#dialog-import').dialog('open');
		$('#dialog-import').load('<?php echo U("business/excelImport");?>');
	});
});
function changeContent(){
	a = $("#select1  option:selected").val();
	window.location.href="<?php echo U('business/index', 'by=');?>"+a;
}
$(".advance").click(function(){
	id = $(this).attr('rel');
	$('#dialog-advance').dialog('open');
	$('#dialog-advance').load('<?php echo U("business/advance","id=");?>'+id);
});
$(function(){
<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
	$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
	$("#search").prop('value', '<?php echo ($_GET['search']); ?>');
	<?php if($_GET['state'] and $_GET['city']): ?>new PCAS("state","city","<?php echo ($_GET['state']); ?>","<?php echo ($_GET['city']); ?>");<?php endif; else: ?>
$("#field option[value='status_id']").prop("selected", true);changeCondition();<?php endif; ?>
	$('#delete').click(function(){
		if(confirm('你确定要删除?')){
		<?php if($_SESSION['admin']== 1 and $_GET['by']== 'deleted'): ?>$("#form1").attr('action', '<?php echo U("business/completedelete");?>');
			$("#form1").submit();
		<?php else: ?>
			$("#form1").attr('action', '<?php echo U("business/delete");?>');
			$("#form1").submit();<?php endif; ?>
		}
	});
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
})
<?php if($list != null): ?>$nodes_num = document.getElementById("childNodes_num").children.length;
	$("#td_colspan").attr('colspan',$nodes_num);<?php endif; ?></script></body></html>