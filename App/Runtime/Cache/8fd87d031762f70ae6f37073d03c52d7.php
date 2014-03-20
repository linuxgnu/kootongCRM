<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><title><?php echo C('defaultinfo.name');?> - Powered By 悟空CRM</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="description" content=""/><meta name="author" content="悟空CRM"/><link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" /><link href="__PUBLIC__/css/docs.css" rel="stylesheet"/><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script><script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css"><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" /><![endif]--><!--[if lt IE 9]><link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/><![endif]--><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--></head><body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true"><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div><a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a><?php echo W("Navigation");?></div></div></div><div class="container"><!-- Docs nav ================================================== --><div class="page-header"><h4>短消息</h4></div><?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo ($vv); ?></div><?php endforeach; endif; endforeach; endif; ?><div class="pull-right"><a href="javascript:void(0);" id="send"  class="btn btn-primary"><i class="icon-pencil"></i>&nbsp; 写信</a></div><ul class="nav nav-tabs"><li id="n1" <?php if((strtolower($_GET['type']) != 'send')): ?>class="active"<?php endif; ?>><a id="t1" href="#tab1" data-toggle="tab">收件箱(<span style="color:red"><?php echo ($new_num); ?></span>/<?php echo ($receive_list_num); ?>)</a></li><li id="n2" <?php if((strtolower($_GET['type']) == 'send')): ?>class="active"<?php endif; ?>><a id="t2" href="#tab2" data-toggle="tab">发件箱(<?php echo ($send_list_num); ?>)</a></li></ul><div class="row"><div class="tab-content"><div class="span12 nav"><div class="pull-left"><ul class="nav pull-left"><li class="pull-left"><a  <?php if((strtolower($_GET['type']) != 'send')): ?>id="delete_receive"<?php else: ?>id="delete_send"<?php endif; ?> class="btn delete" style="margin-right: 5px;"><i class="icon-remove"></i>删除</a></li><li class="pull-left"><form class="form-inline" id="searchForm" onsubmit="return checkSearchForm();" action='' method="get"><ul class="nav pull-left"><li class="pull-left">
										&nbsp;&nbsp;
										<select id="field" style="width:auto" onchange="changeCondition()" name="field"><option class="" value="">--选择筛选条件--</option><option class="text" value="content">内容</option><?php if((strtolower($_GET['type']) != 'send')): ?><option class="text" value="from_role_id">发件人</option><?php else: ?><option class="text" value="to_role_id">收件人</option><?php endif; ?><option class="date" value="send_time">发送时间</option><option class="date" value="read_time">阅读时间</option></select>&nbsp;&nbsp;
									</li><li id="conditionContent" class="pull-left"><select id="condition" style="width:auto" name="condition" onchange="changeSearch()"><option value="contains">包含</option><option value="is">是</option><option value="start_with">开始字符</option><option value="end_with">结束字符</option><option value="is_empty">为空</option></select>&nbsp;&nbsp;
									</li><li id="searchContent" class="pull-left"><input id="search" type="text" class="input-medium search-query" name="search"/>&nbsp;&nbsp;
									</li><li class="pull-left"><input type="hidden" name="m" value="message"/><input type="hidden" name="type" id="type" value="<?php echo $_GET['type'];?>"/><?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?><button type="submit" class="btn"><img src="__PUBLIC__/img/search.png"/>  搜索</button></li></ul></form></li></ul></div></div><div <?php if((strtolower($_GET['type']) != 'send')): ?>class="tab-pane active"<?php else: ?>class="tab-pane"<?php endif; ?> id="tab1"><div class="span12"><form id="form1"  method="post"><table class="table table-hover table-striped"><?php if($receive_list == null): ?><tr><td>----暂无数据！----</td></tr><?php else: ?><thead><tr><th><input class="receive_check_all" id="receive_check_all" type="checkbox" /> &nbsp;</th><th>内容</th><th>发件人</th><th>阅读时间</th><th>发送时间</th></tr></thead><tfoot><tr><td colspan="8"><?php echo ($receive_page); ?></td></tr></tfoot><tbody><?php if(is_array($receive_list)): $i = 0; $__LIST__ = $receive_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><input type="checkbox" class="receive_check_list" name="message_id[]" value="<?php echo ($vo["message_id"]); ?>"/> &nbsp;
							</td><td><a <?php if($vo["read_time"] == 0): ?>style="color:red;"<?php endif; ?> href="<?php echo U('message/view','id='.$vo['message_id']);?>" title="查看"><?php echo (mb_substr($vo["content"],0,20,'utf-8')); ?>……</a></td><td><?php if(!empty($vo['from_role_id'])): echo ($vo["from_name"]); else: ?>系统管理员<?php endif; ?></td><td><?php if($vo["read_time"] == 0): ?><font color="red">未读</font><?php else: echo (date("Y-m-d H:i:s",$vo["read_time"])); endif; ?></td><td><?php echo (date("Y-m-d H:i:s",$vo["send_time"])); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody><?php endif; ?></table></form></div></div><div <?php if((strtolower($_GET['type']) == 'send')): ?>class="tab-pane active"<?php else: ?>class="tab-pane"<?php endif; ?> id="tab2"><div class="span12"><form id="form2"  method="post"><table class="table table-hover"><?php if($send_list == null): ?><tr><td>----暂无数据！----</td></tr><?php else: ?><thead><tr><th><input class="send_check_all" id="send_check_all" type="checkbox" /> &nbsp;</th><th>内容</th><th>收件人</th><th>阅读时间</th><th>发送时间</th></tr></thead><tfoot><tr><td colspan="8"><?php echo ($send_page); ?></td></tr></tfoot><tbody><?php if(is_array($send_list)): $i = 0; $__LIST__ = $send_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><input type="checkbox" class="send_check_list" name="message_id[]" value="<?php echo ($vo["message_id"]); ?>"/> &nbsp;
							</td><td><a href="<?php echo U('message/view','id='.$vo['message_id']);?>" title="查看"><?php echo (mb_substr($vo["content"],0,20,'utf-8')); ?>……</a></td><td><?php if($vo.to_name): echo ($vo["to_name"]); else: ?>系统邮件<?php endif; ?></td><td><?php if($vo["read_time"] == 0): ?>未读<?php else: echo (date("Y-m-d H:i:s",$vo["read_time"])); endif; ?></td><td><?php echo (date("Y-m-d H:i:s",$vo["send_time"])); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody><?php endif; ?></table></form></div></div></div></div></div><div class="hide" id="dialog-send" title="写站内信">loading...</div><script type="text/javascript">
$("#dialog-send").dialog({
    autoOpen: false,
    modal: true,
	width: 800,
	maxHeight: 600,
	position: ["center",100]
});
$(function(){
	<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
	$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
	$("#search").prop('value', '<?php echo ($_GET['search']); ?>');
	<?php else: ?>
	$("#field option[value='status_id']").prop("selected", true);changeCondition();<?php endif; ?>
	$("#receive_check_all").click(function(){
		$("input[class='receive_check_list']").prop('checked', $(this).prop("checked"));
	});
	$("#send_check_all").click(function(){
		$("input[class='send_check_list']").prop('checked', $(this).prop("checked"));
	});
	$("#send").click(function(){
		$('#dialog-send').dialog('open');
		$('#dialog-send').load('<?php echo U("message/send");?>');
	});
	
});
function changeContent(){
	a = $("#select1  option:selected").val();
	window.location.href="<?php echo U('message/index', 'by=');?>"+a;
}
$(function(){
	$('#delete_receive').click(function(){
		if(confirm('你确定要删除?')){
			$("#form1").attr('action', '<?php echo U("message/delete", "model=receive");?>');
			$("#form1").submit();
		}
	});
	$('#delete_send').click(function(){
		if(confirm('你确定要删除?')){
			$("#form2").attr('action', '<?php echo U("message/delete", "model=send");?>');
			$("#form2").submit();
		}
	});
	$('#t1').click(function(){
		$result = '<option class="" value="">--选择筛选条件--</option><option class="text" value="content">内容</option><option class="text" value="from_role_id">发件人</option><option class="date" value="send_time">发送时间</option><option class="date" value="read_time">阅读时间</option>';
		$("#field").html($result);
		$("#type").val('send1');
		$(".delete").attr('id','delete_receive').unbind();
		$('#delete_receive').click(function(){
			if(confirm('你确定要删除receive?')){
				$("#form1").attr('action', '<?php echo U("message/delete", "model=receive");?>');
				$("#form1").submit();
			}
		});
					
	});
	$('#t2').click(function(){
		$result = '<option class="" value="">--选择筛选条件--</option><option class="text" value="content">内容</option><option class="text" value="to_role_id">收件人</option><option class="date" value="send_time">发送时间</option><option class="date" value="read_time">阅读时间</option>';
		$("#type").val('send');
		$("#field").html($result);
		$(".delete").attr('id','delete_send').unbind();
		$('#delete_send').click(function(){
			if(confirm('你确定要删除1?')){
				$("#form2").attr('action', '<?php echo U("message/delete", "model=send");?>');
				$("#form2").submit();
			}
		});
	});
	
})
</script></body></html>