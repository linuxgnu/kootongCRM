<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><title><?php echo C('defaultinfo.name');?> - Powered By 悟空CRM</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="description" content=""/><meta name="author" content="悟空CRM"/><link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" /><link href="__PUBLIC__/css/docs.css" rel="stylesheet"/><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script><script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css"><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" /><![endif]--><!--[if lt IE 9]><link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/><![endif]--><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--></head><body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true"><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div><a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a><?php echo W("Navigation");?></div></div></div><div class="container"><div class="page-header"><h4>知识列表</h4></div><?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo ($vv); ?></div><?php endforeach; endif; endforeach; endif; ?><div class="row"><div class="span2 knowledgecate"><ul class="nav nav-list"><li class="active"><a href="javascript:void(0);">按知识类别查看</a></li><li><a <?php if($_GET['category_id'] == null): ?>class="active"<?php endif; ?> href="<?php echo U('knowledge/index');?>"><i class="icon-white icon-chevron-right"></i>全部</a></li><?php if(is_array($categoryList)): $i = 0; $__LIST__ = $categoryList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a <?php if($_GET['category_id'] == $vo['category_id']): ?>class="active"<?php endif; ?> href="<?php echo U('knowledge/index','category_id='.$vo['category_id']);?>"><i class="icon-chevron-right"></i><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="span10"><div class="bulk-actions align-left"><div class="pull-left"><a id="delete"  class="btn" style="margin-right: 5px;"><i class="icon-remove"></i>&nbsp;删除</a> &nbsp;</div><ul class="nav pull-left"><form class="form-inline" id="searchForm" onsubmit="return checkSearchForm();" action="" method="get"><li class="pull-left">
								&nbsp;
								<select style="width:auto" id="field" name="field" id="selectCondition" onchange="changeCondition()"><option class="all" value="all">任意字段</option><option class="word" value="title">标题</option><option class="word" value="content">内容</option><option class="role" value="role_id">作者</option><option class="date" value="create_time">创建时间</option><option class="date" value="update_time">修改时间</option><option class="number" value="hits">点击次数</option></select>&nbsp;&nbsp;
							</li><li id="conditionContent" class="pull-left"><select id="condition" style="width:auto" name="condition" onchange="changeSearch()"><option value="contains">包含</option><option value="is">是</option><option value="start_with">开始字符</option><option value="end_with">结束字符</option><option value="is_empty">为空</option></select>&nbsp;&nbsp;
							</li><li id="searchContent" class="pull-left"><input id="search" type="text" class="input-medium search-query" name="search"/>&nbsp;&nbsp;
							</li><li class="pull-left"><input type="hidden" name="m" value="Knowledge"/><?php if($_GET['by']!= null): ?><input type="hidden" name="category_id" value="<?php echo ($_GET['category_id']); ?>"/><?php endif; ?><button type="submit" class="btn"><img src="__PUBLIC__/img/search.png"/>  搜索</button></li></form></ul><div class="pull-right"><a class="btn btn-primary" href="<?php echo U('knowledge/add');?>"><i class="icon-plus"></i>&nbsp; 添加知识</a>&nbsp;
						<div class="btn-group"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i>&nbsp;知识工具 <span class="caret"></span></button><ul class="dropdown-menu"><li><a href="javascript:return(0);" id="import_excel"  class="link"><i class="icon-upload"></i>&nbsp;导入知识</a></li><li><a href="<?php echo U('knowledge/excelexport');?>"  onclick="return window.confirm(&quot;您确定要导出知识吗 ?&quot;);" class="link"><i class="icon-download"></i>&nbsp;导出知识</a></li></ul></div></div></div></div><div class="span10"><form id="form1"  method="Post"><table class="table table-hover table-striped"><?php if($list == null): ?><tr><td>----暂无数据！----</td></tr><?php else: ?><thead><tr><th><input class="check_all" name="check_all" id="check_all" type="checkbox" /> &nbsp;</th><th>标题</th><th>作者</th><?php if(C('ismobile') != 1): ?><th>类别</th><th>点击数</th><th>更新时间</th><?php endif; ?><th>操作</th></tr></thead><tfoot><tr><td colspan="7"><?php echo ($page); ?></td></tr></tfoot><tbody><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><input class="list" type="checkbox" name="knowledge_id[]" value="<?php echo ($vo["knowledge_id"]); ?>"/></td><td><a href="<?php echo U('knowledge/view','id='.$vo['knowledge_id']);?>"><?php echo ($vo["title"]); ?></a></td><td><?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?></td><?php if(C('ismobile') != 1): ?><td><?php echo ($vo["name"]); ?></td><td><?php echo ($vo["hits"]); ?></td><td><notempty name="vo.update_time"><?php echo (date("Y-m-d",$vo["update_time"])); ?><notempty></td><?php endif; ?><td><a href="<?php echo U('knowledge/view','id='.$vo['knowledge_id']);?>">查看</a> &nbsp;<a href="<?php echo U('knowledge/edit','id='.$vo['knowledge_id']);?>">编辑</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody><?php endif; ?></table></form></div></div></div></div><div class="hide" id="dialog-import" title="导入数据">loading...</div><div class="hide" id="dialog-role-info" title="员工信息">loading...</div><script type="text/javascript">
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
		if(a=='1'){
			window.location.href="<?php echo U('knowledge/index');?>";
		}else if(a=='2'){
			window.location.href="<?php echo U('knowledge/category');?>";
		}else if(a=='3'){
			window.location.href="<?php echo U('knowledge/count');?>";
		}
	}

	function deleteConfirm(id,name){
		if(confirm("是否删除文章"+name)){
			window.location="<?php echo U('knowledge/delete','id=');?>"+id;
		}
	}
	function searchByCategory(){
		var objCategory=document.getElementById("categoryList");
		var id=objCategory.options[objCategory.selectedIndex].value;
		window.location="<?php echo U('knowledge/index','by=all&category_id=');?>"+id;
	}

$(function(){
<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
	$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
	$("#search").prop('value', '<?php echo ($_GET['search']); ?>');<?php endif; ?>	$("#check_all").click(function(){
		$("input[class='list']").prop('checked', $(this).prop("checked"));
	});
	$("#add_category").click(function(){
		$('#dialog-message1').dialog('open');
		$('#dialog-message1').load("<?php echo U('knowledge/categoryAdd');?>");
	});
	$('#delete').click(function(){
		$("#form1").attr('action', '<?php echo U("knowledge/delete");?>');
		$("#form1").submit();
	});
	$("#import_excel").click(function(){
		$('#dialog-import').dialog('open');
		$('#dialog-import').load('<?php echo U("knowledge/excelimport");?>');
	});
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
});
</script></body></html>