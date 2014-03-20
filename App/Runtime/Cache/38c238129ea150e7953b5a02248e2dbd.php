<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><title><?php echo C('defaultinfo.name');?> - Powered By 悟空CRM</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="description" content=""/><meta name="author" content="悟空CRM"/><link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" /><link href="__PUBLIC__/css/docs.css" rel="stylesheet"/><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script><script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css"><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" /><![endif]--><!--[if lt IE 9]><link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/><![endif]--><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--></head><body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true"><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div><a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a><?php echo W("Navigation");?></div></div></div><div class="container"><!-- Docs nav ================================================== --><div class="page-header" style="border:none; font-size:14px;"><ul class="nav nav-tabs"><li><a  href="<?php echo U('customer/index');?>"><img src="__PUBLIC__/img/customer_icon.png"/>&nbsp; 客户</a></li><li><a  href="<?php echo U('customer/index','content=resource');?>"><img src="__PUBLIC__/img/customer_source_icon.png"/>&nbsp; 客户池</a></li><li class="active"><a href="<?php echo U('contacts/index');?>"><img src="__PUBLIC__/img/contacts_icon.png"/> &nbsp;联系人</a></li><li><a href="<?php echo U('customer/cares');?>"><img src="__PUBLIC__/img/cares_icon.png"/> &nbsp;客户关怀</a></li><li><a href="<?php echo U('customer/analytics');?>"><img src="__PUBLIC__/img/analytics_icon.png"/> &nbsp;客户统计</a></li></ul></div><?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo ($vv); ?></div><?php endforeach; endif; endforeach; endif; ?><p class="view"><b><img src="__PUBLIC__/img/view.png"/> 联系人视图：</b><img src=" __PUBLIC__/img/by_owner.png"/><a href="<?php echo U('contacts/index');?>" <?php if($_GET['by']== null): ?>class="active"<?php endif; ?>>全部</a> |
		<a href="<?php echo U('contacts/index','by=me');?>" <?php if($_GET['by']== 'me'): ?>class="active"<?php endif; ?>>我负责</a> | 
		<a href="<?php echo U('contacts/index','by=sub');?>" <?php if($_GET['by']== 'sub'): ?>class="active"<?php endif; ?>>下属负责</a>  &nbsp;  &nbsp; 
		<img src="__PUBLIC__/img/by_time.png"/><a href="<?php echo U('contacts/index','by=today');?>" <?php if($_GET['by']== 'today'): ?>class="active"<?php endif; ?>>今日添加</a> | 
		<a href="<?php echo U('contacts/index','by=week');?>" <?php if($_GET['by']== 'week'): ?>class="active"<?php endif; ?>>本周添加</a> | 
		<a href="<?php echo U('contacts/index','by=month');?>" <?php if($_GET['by']== 'month'): ?>class="active"<?php endif; ?>>本月添加</a>   &nbsp;  
		
		<a href="<?php echo U('contacts/index','by=add');?>" <?php if($_GET['by']== 'add'): ?>class="active"<?php endif; ?>>最近创建</a> | 
		<a href="<?php echo U('contacts/index','by=update');?>" <?php if($_GET['by']== 'update'): ?>class="active"<?php endif; ?>>最近更新</a> &nbsp;  &nbsp; 
		<a href="<?php echo U('contacts/index','by=deleted');?>" <?php if($_GET['by']== 'deleted'): ?>class="active"<?php endif; ?>><img src="__PUBLIC__/img/task_garbage.png"/> 回收站</a></p><div class="row"><div class="span12"><ul class="nav pull-left"><?php if($_SESSION['admin']== 1 or $_GET['by']!= 'deleted'): ?><li class="pull-left"><a id="delete"  class="btn" style="margin-right: 5px;"><i class="icon-remove"></i>删除</a></li><?php endif; ?><li class="pull-left"><form class="form-inline" id="searchForm" onsubmit="return checkSearchForm();" action="index.php" method="get"><ul class="nav pull-left"><li class="pull-left"><select style="width:auto" id="field" name="field" onchange="changeCondition()"><option class="all" value="all">任意字段</option><option class="word" value="name">联系人姓名</option><option class="role" value="owner_role_id">负责人</option><option class="word" value="telephone">电话</option><option class="word" value="qq">QQ</option><option class="word" value="saltname">尊称</option><option class="word" value="email">邮箱</option><option class="word" value="address">地址</option><option class="word" value="post">职位</option><option class="word" value="description">备注</option><option class="date" value="create_time">创建时间</option><option class="date" value="update_time">修改时间</option></select>&nbsp;&nbsp;
						</li><li id="conditionContent" class="pull-left"><select id="condition" style="width:auto" name="condition" onchange="changeSearch()"><option value="contains">包含</option><option value="not_contain">不包含</option><option value="is">是</option><option value="isnot">不是</option><option value="start_with">开始字符</option><option value="end_with">结束字符</option><option value="is_empty">为空</option><option value="is_not_empty">不为空</option></select>&nbsp;&nbsp;
						</li><li id="searchContent" class="pull-left"><input id="search" type="text" class="input-medium search-query" name="search"/>&nbsp;&nbsp;
						</li><li class="pull-left"><input type="hidden" name="m" value="contacts"/><?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?><button type="submit" class="btn"><img src="__PUBLIC__/img/search.png"/>  搜索 </button>&nbsp;
						</li><li class="pull-left"><div class="btn-group"><a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-comment" style="color:rgb(107, 168, 192);"></i>&nbsp;发送短信
									<span class="caret"></span></a><ul class="dropdown-menu"><li><a id="page_send" href="javascript:void(0)">当前页发送</a></li><li><a id="check_send" href="javascript:void(0)">当前页已选中发送</a></li></ul></div><div class="btn-group"><a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-envelope" style="color:rgb(107, 168, 192);"></i>&nbsp;发送邮件
									<span class="caret"></span></a><ul class="dropdown-menu"><li><a id="page_send_email" href="javascript:void(0)">当前页发送</a></li><li><a id="check_send_email" href="javascript:void(0)">当前页已选中发送</a></li></ul></div></li></ul></form></li></ul><div class="row pull-right"><a href="<?php echo U('contacts/add');?>" class="btn btn-primary"><i class="icon-plus">&nbsp; 新建联系人</i></a>&nbsp;
				<div class="btn-group"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"> &nbsp; 联系人工具 </i><span class="caret"></span></button><ul class="dropdown-menu"><li><a href="javascript:return(0);" id="import_excel"  class="link"><i class="icon-upload"> &nbsp;导入联系人</i></a></li><li><a href="<?php echo U('contacts/excelexport');?>"  onclick="return window.confirm(&quot;您确定要导出联系人吗 ?&quot;);" class="link"><i class="icon-download"> &nbsp;导出联系人</i></a></li></ul></div></div></div><div class="span12"><form id="form1" action="" method="post"><table class="table table-hover table-striped"><?php if($contactsList == null): ?><tr><td>----暂无数据！----</td></tr><?php else: ?><thead><tr><th><input class="check_all" id="check_all" type="checkbox" /> &nbsp;</th><th>联系人名</th><?php if(C('ismobile') != 1): ?><th>尊称</th><?php endif; ?><th>所属客户</th><th>手 机</th><?php if(C('ismobile') != 1): ?><th>QQ</th><th>Email</th></a><th>负责人</th><th>创建人</th><th>创建时间</th><?php endif; if((C('ismobile') != 1) and ($_GET['by']== 'deleted')): ?><th>删除人</th><th>删除时间</th><?php endif; ?><th>操作</th></tr></thead><tfoot><tr><?php if($_GET['by']== 'deleted'): ?><tr><td colspan="12"><?php echo ($page); ?></td></tr><?php else: ?><tr><td colspan="10"><?php echo ($page); ?></td></tr><?php endif; ?></tr></tfoot><tbody><?php if(is_array($contactsList)): $i = 0; $__LIST__ = $contactsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><input type="checkbox" class="check_list" name="contacts_id[]" value="<?php echo ($vo["contacts_id"]); ?>"/>&nbsp;
								</td><td><a href="<?php echo U('contacts/view', 'id='.$vo['contacts_id']);?>"><?php echo ($vo["name"]); ?></a></td><?php if(C('ismobile') != 1): ?><td><?php echo ($vo["saltname"]); ?></td><?php endif; ?><td><a href="<?php echo U('customer/view', 'id='.$vo['customer']['customer_id']);?>"><?php echo ($vo["customer"]["name"]); ?></a></td><td><?php if(C('ismobile') != 1 ): echo ($vo["telephone"]); else: ?><a href="tel://<?php echo ($vo["telephone"]); ?>"><?php echo ($vo["telephone"]); ?></a><?php endif; ?></td><?php if(C('ismobile') != 1): ?><td><?php echo ($vo["qq"]); ?></td><td><?php echo ($vo["email"]); ?></td><td><?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?></td><td><?php if(!empty($vo["creator"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["creator"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["creator"]["user_name"]); ?></a><?php endif; ?></td><td><?php echo (date('Y-m-d H:i',$vo["create_time"])); ?></td><?php endif; if((C('ismobile') != 1) and ($_GET['by']== 'deleted')): ?><td><a class="role_info" rel="<?php echo ($vo["delete_role"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["delete_role"]["user_name"]); ?></a></td><td><?php echo (date('Y-m-d H:i',$vo["delete_time"])); ?></td><?php endif; if($_GET['by']== 'deleted'): ?><td><a href="<?php echo U('contacts/view', 'id='.$vo['contacts_id']);?>">查看</a>&nbsp;
										<a href="<?php echo U('contacts/revert', 'id='.$vo['contacts_id']);?>">还原</a></td><?php else: ?><td><a href="<?php echo U('contacts/view', 'id='.$vo['contacts_id']);?>">查看</a>&nbsp;
										<a href="<?php echo U('contacts/edit', 'id='.$vo['contacts_id']);?>">编辑</a></td><?php endif; ?></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody><?php endif; ?></table></form></div></div></div><div class="hide" id="dialog-import" title="导入数据">loading...</div><div class="hide" id="dialog-role-info" title="员工信息">loading...</div><script type="text/javascript">
$("#dialog-import").dialog({
	autoOpen: false,
	modal: true,
	width: 600,
	maxHeight: 400,
	position: ["center",100]
});
$("#dialog-role-info").dialog({
    autoOpen: false,
    modal: true,
	width: 600,
	maxHeight: 400,
	position: ["center",100]
});
function changeContent(){
	a = $("#select1  option:selected").val();
	window.location.href="<?php echo U('contacts/index', 'by=');?>"+a;
}

$(function(){
<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
	$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
	$("#search").prop('value', '<?php echo ($_GET['search']); ?>');<?php endif; ?>
	$("#check_all").click(function(){
		$("input[class='check_list']").prop('checked', $(this).prop("checked"));
	});
	$('#delete').click(function(){
		if(confirm('你确定要删除?')){
		<?php if($_SESSION['admin']== 1 and $_GET['by']== 'deleted'): ?>$("#form1").attr('action', '<?php echo U("contacts/completedelete");?>');
			$("#form1").submit();
		<?php else: ?>
			$("#form1").attr('action', '<?php echo U("contacts/delete");?>');
			$("#form1").submit();<?php endif; ?>
		}
	});
	$("#import_excel").click(function(){
		$('#dialog-import').dialog('open');
		$('#dialog-import').load('<?php echo U("contacts/excelimport");?>');
	});
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
	$("#check_send").click(function(){
		var id_array = new Array();
		$("input[class='check_list']:checked").each(function(){  
			id_array.push($(this).val());
		});
		
		if(id_array.length == 0){
			alert('您没有选中任何联系人!');
		}else{
			var contacts_ids = id_array.join(",");
			window.location.href="<?php echo U('setting/sendSms', 'model=contacts&contacts_ids=');?>"+contacts_ids;
		}
	});
	$("#check_send_email").click(function(){
		var id_array = new Array();
		$("input[class='check_list']:checked").each(function(){  
			id_array.push($(this).val());
		});
		
		if(id_array.length == 0){
			alert('您没有选中任何联系人!');
		}else{
			var contacts_ids = id_array.join(",");
			window.location.href="<?php echo U('setting/sendemail', 'model=contacts&contacts_ids=');?>"+contacts_ids;
		}
	});
	$("#page_send").click(function(){
		var id_array = new Array();
		$("input[class='check_list']").each(function(){
			id_array.push($(this).val());
		});
		if(id_array.length == 0){
			alert('您没有选中任何联系人!');
		}else{
			var contacts_ids = id_array.join(",");
			window.location.href="<?php echo U('setting/sendSms', 'model=contacts&contacts_ids=');?>"+contacts_ids;
		}
	});
	$("#page_send_email").click(function(){
		var id_array = new Array();
		$("input[class='check_list']").each(function(){
			id_array.push($(this).val());
		});
		if(id_array.length == 0){
			alert('您没有选中任何联系人!');
		}else{
			var contacts_ids = id_array.join(",");
			window.location.href="<?php echo U('setting/sendemail', 'model=contacts&contacts_ids=');?>"+contacts_ids;
		}
	});
})
</script></body></html>