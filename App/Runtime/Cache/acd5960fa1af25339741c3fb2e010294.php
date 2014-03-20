<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><title><?php echo C('defaultinfo.name');?> - Powered By 悟空CRM</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="description" content=""/><meta name="author" content="悟空CRM"/><link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" /><link href="__PUBLIC__/css/docs.css" rel="stylesheet"/><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script><script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css"><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" /><![endif]--><!--[if lt IE 9]><link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/><![endif]--><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--></head><body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true"><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div><a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a><?php echo W("Navigation");?></div></div></div><script src="__PUBLIC__/js/PCASClass.js" type="text/javascript"></script><div class="container"><!-- Docs nav ================================================== --><div class="page-header" style="border:none; font-size:14px; "><ul class="nav nav-tabs"><li <?php if($_GET['content'] == 'customer' || $_GET['content'] == ''): ?>class="active"<?php endif; ?>><a  href="<?php echo U('customer/index');?>"><img src="__PUBLIC__/img/customer_icon.png"/>&nbsp; 客户</a></li><li <?php if($_GET['content'] == 'resource' ): ?>class="active"<?php endif; ?>><a  href="<?php echo U('customer/index','content=resource');?>"><img src="__PUBLIC__/img/customer_source_icon.png"/>&nbsp; 客户池</a></li><li><a href="<?php echo U('contacts/index');?>"><img src="__PUBLIC__/img/contacts_icon.png"/> &nbsp;联系人</a></li><li><a href="<?php echo U('customer/cares');?>"><img src="__PUBLIC__/img/cares_icon.png"/> &nbsp;客户关怀</a></li><li><a href="<?php echo U('customer/analytics');?>"><img src="__PUBLIC__/img/analytics_icon.png"/> &nbsp;客户统计</a></li><li><a href="http://5kcrm.com/index.php?m=doc&a=index&id=27" target="_blank" style="font-size: 12px;color: rgb(255, 102, 0);"><img width="20px;" src="__PUBLIC__/img/help.png"/> 帮助</a></li></ul></div><?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo ($vv); ?></div><?php endforeach; endif; endforeach; endif; if($_GET['content'] != 'resource'): ?><p class="view"><b><img src="__PUBLIC__/img/view.png"/>  客户视图：</b><img src=" __PUBLIC__/img/by_owner.png"/><a href="<?php echo U('customer/index');?>" <?php if($_GET['by']== null): ?>class="active"<?php endif; ?>>全部</a> |
		<a href="<?php echo U('customer/index','by=me');?>" <?php if($_GET['by']== 'me'): ?>class="active"<?php endif; ?>>我的客户</a> | 
		<a href="<?php echo U('customer/index','by=sub');?>" <?php if($_GET['by']== 'sub'): ?>class="active"<?php endif; ?>>下属客户</a> &nbsp;  &nbsp; 
		<img src="__PUBLIC__/img/by_time.png"/><a href="<?php echo U('customer/index','by=today');?>" <?php if($_GET['by']== 'today'): ?>class="active"<?php endif; ?>>今日新建</a> | 
		<a href="<?php echo U('customer/index','by=week');?>" <?php if($_GET['by']== 'week'): ?>class="active"<?php endif; ?>>本周新建</a> | 
		<a href="<?php echo U('customer/index','by=month');?>" <?php if($_GET['by']== 'month'): ?>class="active"<?php endif; ?>>本月新建</a>   &nbsp;  
		<a href="<?php echo U('customer/index','by=add');?>" <?php if($_GET['by']== 'add'): ?>class="active"<?php endif; ?>>最近创建</a> | 
		<a href="<?php echo U('customer/index','by=update');?>" <?php if($_GET['by']== 'update'): ?>class="active"<?php endif; ?>>最近更新</a> &nbsp;  &nbsp; 
		<a href="<?php echo U('customer/index','by=deleted');?>" <?php if($_GET['by']== 'deleted'): ?>class="active"<?php endif; ?>><img src="__PUBLIC__/img/task_garbage.png"/> 回收站</a></p><?php endif; ?><div class="row"><div class="span12"><ul class="nav pull-left"><?php if($_SESSION['admin']== 1 or $_GET['by']!= 'deleted'): ?><div class="btn-group pull-left"><a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							&nbsp;批量操作
							<span class="caret"></span></a><ul class="dropdown-menu"><li><a id="delete"  style="margin-right: 5px;" href="javascript:void(0)">批量删除</a></li><?php if($_GET['content']== 'resource'): ?><li><a id="batch_receive"  style="margin-right: 5px;" href="javascript:void(0)">批量领取</a></li><li><a id="batch_assign"  style="margin-right: 5px;" href="javascript:void(0)">批量分配</a></li><?php elseif($_GET['by']!= 'deleted'): ?><li><a id="remove"  style="margin-right: 5px;" href="javascript:void(0)">批量放入客户池</a></li><?php endif; ?></ul></div><?php endif; ?><li class="pull-left"><form class="form-inline" id="searchForm" action="index.php" method="get"><ul class="nav pull-left"><li class="pull-left" ><select style="width:auto" id="field" onchange="changeCondition()" name="field"><option class="" value="">--请选择筛选条件--</option><?php if(is_array($field_list)): $i = 0; $__LIST__ = $field_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option class="<?php echo ($v['form_type']); ?>" value="<?php echo ($v[field]); ?>" rel="customer"><?php echo ($v[name]); ?></option><?php endforeach; endif; else: echo "" ;endif; if($_GET['content']!= 'resource'): ?><option class="role" value="owner_role_id">负责人</option><?php endif; ?><option class="date" value="create_time">创建时间</option><option class="date" value="update_time">修改时间</option></select>&nbsp;&nbsp;
						</li><li id="conditionContent" class="pull-left"><select id="condition" style="width:auto" name="condition" onchange="changeSearch()"><option value="contains">包含</option><option value="not_contain">不包含</option><option value="is">是</option><option value="isnot">不是</option><option value="start_with">开始字符</option><option value="end_with">结束字符</option><option value="is_empty">为空</option><option value="is_not_empty">不为空</option></select>&nbsp;&nbsp;
						</li><li id="searchContent" class="pull-left"><input id="search" type="text" class="input-medium search-query" name="search"/>&nbsp;&nbsp;
						</li><li class="pull-left"><input type="hidden" name="m" value="customer"/><?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?><button type="button" id="dosearch" class="btn"><img src="__PUBLIC__/img/search.png"/>  搜索</button>
							&nbsp;
						</li><li class="pull-left"><div class="btn-group"><a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-comment" style="color:rgb(107, 168, 192);"></i>&nbsp;发送短信
									<span class="caret"></span></a><ul class="dropdown-menu"><li><a id="all_send"  href="javascript:void(0)">全部发送</a></li><li><a id="page_send" href="javascript:void(0)">当前页发送</a></li><li><a id="check_send" href="javascript:void(0)">当前页已选中发送</a></li></ul></div><div class="btn-group"><a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-envelope" style="color:rgb(107, 168, 192);"></i>&nbsp;发送邮件
									<span class="caret"></span></a><ul class="dropdown-menu"><li><a id="all_send_email"  href="javascript:void(0)">全部发送</a></li><li><a id="page_send_email" href="javascript:void(0)">当前页发送</a></li><li><a id="check_send_email" href="javascript:void(0)">当前页已选中发送</a></li></ul></div></li></ul><input type="hidden" name="act" id="act" value="search"/><input type="hidden" name="content" <?php if($_GET['content']): ?>value="resource"<?php endif; ?>/></form></li></ul><div class="pull-right"><a href="<?php echo U('Customer/add');?>" class="btn btn-primary"><i class="icon-plus"></i>&nbsp; 新建客户</a>&nbsp;
				<div class="btn-group"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i>&nbsp; 客户工具<span class="caret"></span></button><ul class="dropdown-menu"><!-- <li><a href="<?php echo U('customer/analytics');?>" id="analytics"  class="link"><i class="icon-align-left"></i>客户统计</a></li> --><li><a id="import_excel" class="link" href="javascript:void(0);"><i class="icon-upload"></i> 导入客户</a></li><li><a href="<?php echo U('customer/excelExport');?>" id="excelExport"  class="link"><i class="icon-download"></i> 客户导出</a></li></ul></div></div></div><div class="span12"><form id="form1" action="" method="post"><input type="hidden" name="owner_role" id="hidden_owner_id" value="0"/><input type="hidden" name="message_alert" id="hidden_message" value="0"/><input type="hidden" name="sms_alert" id="hidden_sms" value="0"/><input type="hidden" name="email_alert" id="hidden_email" value="0"/><input type="hidden" name="operating_type" id="operating_type" value=""/><table class="table table-hover table-striped"><?php if($customerlist == null): ?><tr><td>----暂无数据！----</td></tr><?php else: ?><thead><tr id="childNodes_num"><th><input type="checkbox" id="check_all"/></th><?php if(is_array($field_array)): $i = 0; $__LIST__ = $field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(C('ismobile') == 1 and $i <= 1): ?><th><?php echo ($vo["name"]); ?></th><?php elseif(C('ismobile') != 1): ?><th><?php echo ($vo["name"]); ?></th><?php endif; endforeach; endif; else: echo "" ;endif; if($_GET['content']!= 'resource'): ?><th>负责人</th><?php endif; if(C('ismobile') != 1): ?><th>创建人</th><?php endif; if((C('ismobile') != 1) and ($_GET['by']== 'deleted')): ?><th>删除人</th><th>删除时间</th><?php elseif(C('ismobile') != 1): ?><th>创建时间</th><?php endif; if($_GET['content']!= 'resource' && $_GET['by']!= 'deleted'): ?><th>距到期天数</th><?php endif; ?><th>操作</th></tr></thead><tfoot><tr><td id="td_colspan"><?php echo ($page); ?></td></tr></tfoot><tbody><?php if(is_array($customerlist)): $i = 0; $__LIST__ = $customerlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><input name="customer_id[]" class="check_list" type="checkbox" value="<?php echo ($vo["customer_id"]); ?>"/></td><?php if(is_array($field_array)): $i = 0; $__LIST__ = $field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if(C('ismobile') == 1 and $i <= 1): ?><td><?php if($v['field'] == 'name'): ?><a href="<?php echo U('customer/view', 'id='.$vo['customer_id']);?>"><?php endif; ?><span style="color:#<?php echo ($v['color']); ?>"><?php if($v['form_type'] == 'datetime'): echo (date('Y-m-d',$vo[$v['field']])); else: echo ($vo[$v['field']]); endif; ?></span><?php if($v['field'] == 'name'): ?></a><?php endif; ?></td><?php elseif(C('ismobile') != 1): ?><td><?php if($v['field'] == 'name'): ?><a href="<?php echo U('customer/view', 'id='.$vo['customer_id']);?>"><?php endif; ?><span style="color:#<?php echo ($v['color']); ?>"><?php if($v['form_type'] == 'datetime'): echo (date('Y-m-d',$vo[$v['field']])); else: echo ($vo[$v['field']]); endif; ?></span><?php if($v['field'] == 'name'): ?></a><?php endif; ?></td><?php endif; endforeach; endif; else: echo "" ;endif; if($_GET['content']!= 'resource'): ?><td><?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?></td><?php endif; if(C('ismobile') != 1): ?><td><?php if(!empty($vo["creator"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["creator"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["creator"]["user_name"]); ?></a><?php endif; ?></td><?php endif; if((C('ismobile') != 1) and ($_GET['by']== 'deleted')): ?><td><?php if(!empty($vo["delete_role"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["delete_role"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["delete_role"]["user_name"]); ?></a><?php endif; ?></td><td><?php echo (date('Y-m-d',$vo["delete_time"])); ?></td><?php elseif(C('ismobile') != 1): ?><td><?php echo (date('Y-m-d',$vo["create_time"])); ?></td><?php endif; if($_GET['content']!= 'resource' && $_GET['by']!= 'deleted'): ?><td><?php if($vo['days'] <= 7): ?><font color="red"><?php echo ($vo["days"]); ?>天</font><?php else: ?><font color="blue"><?php echo ($vo["days"]); ?>天</font><?php endif; ?></td><?php endif; ?><td><a href="<?php echo U('customer/view', 'id='.$vo['customer_id']);?>">查看</a>&nbsp;
									<?php if($_GET['by']== 'deleted'): ?><a href="<?php echo U('customer/revert', 'id=' . $vo['customer_id']);?>">还原</a>&nbsp;
									<?php else: ?><a href="<?php echo U('customer/edit', 'id='.$vo['customer_id']);?>">编辑</a><?php endif; if($_GET['content']== 'resource'): ?><a rel="<?php echo ($vo['customer_id']); ?>" class="fenpei" href="javascript:void(0)">分配</a> &nbsp;<a href="<?php echo U('customer/receive', 'customer_id='.$vo['customer_id']);?>">领取</a><?php endif; ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody><?php endif; ?></table></form></div></div></div><div class="hide" id="dialog-import" title="导入数据">loading...</div><div class="hide" id="dialog-role-info" title="员工信息">loading...</div><div class="hide" id="dialog-fenpei" title="客户分配">loading...</div><div class="hide" id="dialog-assign" title="线索分配">loading...</div><script type="text/javascript"><?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=600;<?php endif; ?>
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
$("#dialog-fenpei").dialog({
	autoOpen: false,
	modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100],
	buttons: {
		"Ok": function () {
			$('#fenpei_form').submit();
			$(this).dialog("close");
		},
		"Cancel": function () {
			$(this).dialog("close");
		}
	}
});
$("#dialog-assign").dialog({
	autoOpen: false,
	modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100],
	buttons: {
		"Ok": function () {
			var owner_role_id = $('input[name="owner_role_id"]').val();
			var message_alert = $('input:checkbox[name="message_alert"]:checked').val();
			var sms_alert = $('input:checkbox[name="sms_alert"]:checked').val();
			var email_alert = $('input:checkbox[name="email_alert"]:checked').val();
			
			$("#hidden_owner_id").val(owner_role_id);
			$("#hidden_message").val(message_alert);
			$("#hidden_sms").val(sms_alert);
			$("#hidden_email").val(email_alert);
			
			$("#form1").attr('action', '<?php echo U("customer/receive");?>');
			$('#operating_type').val('assign');
			$("#form1").submit();
			$(this).dialog("close");
		},
		"Cancel": function () {
			$(this).dialog("close");
		}
	}
});
function changeContent(){
	a = $("#select1  option:selected").val();
	window.location.href="<?php echo U('customer/index', 'by=');?>"+a;
}
$(function(){
<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
	$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
	$("#search").prop('value', '<?php echo ($_GET['search']); ?>');
	<?php if($_GET['state'] and $_GET['city']): ?>new PCAS("state","city","<?php echo ($_GET['state']); ?>","<?php echo ($_GET['city']); ?>");<?php endif; else: ?>
	$("#field option[value='status_id']").prop("selected", true);changeCondition();<?php endif; ?>	$("#check_all").click(function(){
		$("input[class='check_list']").prop('checked', $(this).prop("checked"));
	});
	$('#delete').click(function(){
		if(confirm('确认删除吗？')){
			<?php if($_SESSION['admin']== 1 and $_GET['by']== 'deleted'): ?>$("#form1").attr('action', '<?php echo U("customer/completedelete","content=".$_GET['content']);?>');
				$("#form1").submit();
			<?php else: ?>
				$("#form1").attr('action', '<?php echo U("customer/delete","content=".$_GET['content']);?>');
				$("#form1").submit();<?php endif; ?>
		}
	});
	$('#remove').click(function(){
		if(confirm('确认放入客户池？')){
			$("#form1").attr('action', '<?php echo U("customer/remove");?>');
			$('#operating_type').attr('value', 'remove');
			$("#form1").submit();
		}
	});
	$("#import_excel").click(function(){
		$('#dialog-import').dialog('open');
		$('#dialog-import').load('<?php echo U("customer/excelimport");?>');
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
			alert('您没有选中任何客户!');
		}else{
			var customer_ids = id_array.join(",");
			window.open("<?php echo U('setting/sendSms', 'model=customer&customer_ids=');?>"+customer_ids);
		}
	});
	$("#check_send_email").click(function(){
		var id_array = new Array();
		$("input[class='check_list']:checked").each(function(){  
			id_array.push($(this).val());
		});
		
		if(id_array.length == 0){
			alert('您没有选中任何客户!');
		}else{
			var customer_ids = id_array.join(",");
			window.open("<?php echo U('setting/sendemail', 'model=customer&customer_ids=');?>"+customer_ids);
		}
	});
	
	$("#page_send").click(function(){
		var id_array = new Array();
		$("input[class='check_list']").each(function(){
			id_array.push($(this).val());
		});
		if(id_array.length == 0){
			alert('您没有选中任何客户!');
		}else{
			var customer_ids = id_array.join(",");
			window.open("<?php echo U('setting/sendSms', 'model=customer&customer_ids=');?>"+customer_ids);
		}
	});
	$("#page_send_email").click(function(){
		var id_array = new Array();
		$("input[class='check_list']").each(function(){
			id_array.push($(this).val());
		});
		if(id_array.length == 0){
			alert('您没有选中任何客户!');
		}else{
			var customer_ids = id_array.join(",");
			window.open("<?php echo U('setting/sendemail', 'model=customer&customer_ids=');?>"+customer_ids);
		}
	});
	$("#all_send_email").click(function(){
		window.open("<?php echo U('setting/sendemail', 'model=customer&customer_ids=all');?>");
	});
	
	$("#all_send").click(function(){
		$("#act").val('sms');
		$("#searchForm").submit();
	});
	
	$(".fenpei").click(function(){
		$customer_id = $(this).attr('rel');
		$('#dialog-fenpei').dialog('open');
		$('#dialog-fenpei').load('<?php echo U("customer/fenpei","customer_id=");?>'+$customer_id);
	});
	$('#batch_assign').click(function(){
		$('#dialog-assign').dialog('open');
		$('#dialog-assign').load('<?php echo U("customer/fenpei");?>');
	});
	$('#batch_receive').click(function(){
		if(confirm('确定要批量领取吗？')){
			$("#form1").attr('action', '<?php echo U("customer/receive");?>');
			$('#operating_type').attr('value', 'receive');
			$("#form1").submit();
		}
	});
	$("#dosearch").click(function(){
		result = checkSearchForm();
		if(result) $("#searchForm").submit();
	});
	
});
<?php if($customerlist != null): ?>$nodes_num = document.getElementById("childNodes_num").children.length;
	$("#td_colspan").attr('colspan',$nodes_num);<?php endif; ?></script></body></html>