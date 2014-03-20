<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><title><?php echo C('defaultinfo.name');?> - Powered By 悟空CRM</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="description" content=""/><meta name="author" content="悟空CRM"/><link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" /><link href="__PUBLIC__/css/docs.css" rel="stylesheet"/><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script><script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css"><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" /><![endif]--><!--[if lt IE 9]><link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/><![endif]--><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--></head><body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true"><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div><a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a><?php echo W("Navigation");?></div></div></div><div class="container"><div class="page-header"><p class="view"><h4>组织架构 -
				<small><a href="<?php echo U('user/department');?>" <?php if(ACTION_NAME == 'department' or ACTION_NAME == 'role'): ?>class="active"<?php endif; ?>>组织结构</a> | 	
				<a href="<?php echo U('user/index','status=1');?>" <?php if(ACTION_NAME == 'index' and $_GET['status']== '1'): ?>class="active"<?php endif; ?>>用户管理</a> | 
				<a href="<?php echo U('user/index', 'status=0');?>" <?php if(ACTION_NAME == 'index' and $_GET['status']== '0'): ?>class="active"<?php endif; ?>>待激活用户</a> | 
				<a href="<?php echo U('user/index', 'status=2');?>" <?php if(ACTION_NAME == 'index' and $_GET['status']== '2'): ?>class="active"<?php endif; ?>>已停用用户</a> |
				<a href="http://5kcrm.com/index.php?m=doc&a=index&id=44" target="_blank" style="font-size: 12px;color: rgb(255, 102, 0);"><img width="15px;" src="__PUBLIC__/img/help.png"/> 帮助</a></small></h4></p></div><?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo ($vv); ?></div><?php endforeach; endif; endforeach; endif; ?><div class="row"><form action="<?php echo U('user/delete');?>" id="user_form" method="post"><div class="span12"><ul class="nav pull-left"><li class="pull-left"><ul class="nav pull-left"><li class="dropdown"><a href="#" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i>&nbsp;<?php echo ($_GET['_URL_[1]']); ?>按类别查看员工<b class="caret"></b></a><ul class="dropdown-menu"><li><a href="javascript:void(0);" class="link" onclick="window.location='<?php echo U('user/index');?>'">全部</a></li><?php if(is_array($categoryList)): $i = 0; $__LIST__ = $categoryList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="javascript:void(0);" class="link" onclick="window.location='<?php echo U('user/index','id='.$vo['category_id']);?>'"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></li></ul></li></ul><div class="pull-right"><a class="btn btn-primary" href="<?php echo U('user/add');?>"><i class="icon-plus"></i>&nbsp; 添加员工</a><?php if(session('?admin')): ?>&nbsp; <a id="add_department" class="btn btn-primary"><i class="icon-plus"></i>&nbsp; 添加部门</a><?php endif; ?>
						&nbsp; <a id="add_role" class="btn btn-primary"><i class="icon-plus"></i>&nbsp; 添加岗位</a></div></div><div class="span12"><table class="table table-hover table-striped"><?php if($user_list == null): ?><tr><td>----暂无数据！----</td></tr><?php else: ?><thead><tr><th><input class="check_all" id="check_all" type="checkbox" /></th><th>用户名</th><th>岗位</th><th>手 机</th><?php if(C('ismobile') != 1): ?><th>性 别</th><th>Email</th><th>联系地址</th><?php endif; ?><th>操作</th></tr></thead><tfoot><tr><td colspan="8"><p>提示: &nbsp; <img style="width:16px;" src="__PUBLIC__/img/admin_img.png"/> &nbsp;管理员用户 &nbsp;  &nbsp; 
										<img style="width:16px;" src="__PUBLIC__/img/user_img.png"/> &nbsp;普通用户</p><div class="pagination"><?php echo ($page); ?></div><!-- End .pagination --><div class="clear"></div></td></tr></tfoot><tbody><?php if(is_array($user_list)): $i = 0; $__LIST__ = $user_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><input class="check_list" name="user_id[]" type="checkbox" value="<?php echo ($vo["user_id"]); ?>"/></td><td><?php if($vo['category_id'] == 1): ?><img style="width:16px;" src="__PUBLIC__/img/admin_img.png"/><?php else: ?><img style="width:16px;" src="__PUBLIC__/img/user_img.png"/><?php endif; ?> &nbsp; <a href="<?php echo U('user/view','id=' . $vo['user_id']);?>"><?php echo ($vo["name"]); ?></a></td><td><?php echo ($vo["department_name"]); ?> - <?php echo ($vo["role_name"]); ?></td><td><?php if(C('ismobile') == 1): ?><a href="tel:<?php echo ($vo["telephone"]); ?>"><?php echo ($vo["telephone"]); ?></a><?php else: echo ($vo["telephone"]); endif; ?></td><?php if(C('ismobile') != 1): ?><td><?php if($vo['sex'] == 2): ?>女<?php elseif($vo['sex'] == 0): ?>未知<?php elseif($vo['sex'] == 1): ?>男<?php endif; ?></td><td><?php echo ($vo["email"]); ?></td><td><?php echo ($vo["address"]); ?></td><?php endif; ?><td><a href="<?php echo U('user/view', 'id=' . $vo['user_id']);?>"><i class="icon-search">&nbsp; 查看</i></a>&nbsp;
									<a href="<?php echo U('user/edit', 'id=' . $vo['user_id']);?>" title="编辑"><i class="icon-edit">&nbsp; 编辑</i></a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody><?php endif; ?></table></div></form></div></div><div id="dialog-message" class="hide" title="分配岗位">loading...</div><?php if(session('?admin')): ?><div id="dialog-message2" class="hide" title="添加部门">loading...</div><?php endif; ?><div id="dialog-message3" class="hide" title="添加岗位">loading...</div></body></html><script type="text/javascript">
	$(function(){
		$("#check_all").click(function(){
			$("input[class='check_list']").prop('checked', $(this).prop("checked"));
		});
		<?php if(session('?admin')): ?>$("#add_department").click(function(){
			$('#dialog-message2').dialog('open');$('#dialog-message2').load('<?php echo U("user/department_add");?>');
		});<?php endif; ?>
		$("#add_role").click(function(){
			$('#dialog-message3').dialog('open');$('#dialog-message3').load('<?php echo U("user/role_add");?>');
		});
		$(".role").click(function(){
			$('#dialog-message').dialog('open');
			id = $(this).attr('rel');
			$('#dialog-message').load('<?php echo U("User/user_role_relation","by=user_role&id=");?>'+id);
		});
		$("#delete_user").click(function(){		
			if(confirm('确认进行删除员工操作？')){
				$('#user_form').submit();
			}
		});
	});
	function searchUser(){
		var objCategory=document.getElementById("categoryList");
		var id=objCategory.options[objCategory.selectedIndex].value;
		window.location="<?php echo U('user/index','id=');?>"+id;
		
	}
	
	function changeContent(){
		a = $("#select1  option:selected").val();
		if(a=='1'){
			window.location.href="<?php echo U('user/index');?>";
		}else if(a=='2'){
			window.location.href="<?php echo U('user/index', 'status=0');?>";
		}else if(a=='3'){
			window.location.href="<?php echo U('user/index', 'status=-1');?>";
		}else if(a=='4'){
			window.location.href="";
		}else if(a=='5'){
			window.location.href="<?php echo U('user/department'); echo U('user/role');?>";
		}
	} 
	<?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=600;<?php endif; ?>
	$('#dialog-message').dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight: 400,
		position :["center",100]
	});
	<?php if(session('?admin')): ?>$('#dialog-message2').dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight: 400,
		position :["center",100],
		buttons: {
			"确认": function () {
				$('#department_add').submit();
				$(this).dialog("close");
			},
			"取消": function () {
				$(this).dialog("close");
			}
		}
	});<?php endif; ?>
	$('#dialog-message3').dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight: 400,
		position :["center",100],
		buttons: {
			"确认": function () {
				$('#role_add').submit();
				$(this).dialog("close");
			},
			"取消": function () {
				$(this).dialog("close");
			}
		}
	});
</script>