<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><title><?php echo C('defaultinfo.name');?> - Powered By 悟空CRM</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="description" content=""/><meta name="author" content="悟空CRM"/><link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" /><link href="__PUBLIC__/css/docs.css" rel="stylesheet"/><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script><script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css"><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" /><![endif]--><!--[if lt IE 9]><link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/><![endif]--><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--></head><body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true"><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div><a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a><?php echo W("Navigation");?></div></div></div><script src="__PUBLIC__/js/PCASClass.js" type="text/javascript"></script><div class="container"><div class="page-header"><h4>产品列表</h4></div><?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo ($vv); ?></div><?php endforeach; endif; endforeach; endif; ?><div class="row"><div class="span2 knowledgecate"><ul class="nav nav-list"><li class="active"><a href="javascript:void(0);">按产品类别查看</a></li><li><a href="<?php echo U('product/index');?>" <?php if($_GET['category_id'] == null): ?>class="active"<?php endif; ?>><i class="icon-white icon-chevron-right"></i>全部</a></li><?php if(is_array($categoryList)): $i = 0; $__LIST__ = $categoryList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('product/index','category_id='.$vo['category_id']);?>" <?php if($_GET['category_id'] == $vo['category_id']): ?>class="active"<?php endif; ?>><i class="icon-chevron-right"></i><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="span10"><div class="pull-left"><ul class="nav pull-left"><li class="pull-left"><a id="delete"  class="btn" style="margin-right: 5px;"><i class="icon-remove"></i>删除</a></li><li class="pull-left"><form class="form-inline" id="searchForm" onsubmit="return checkSearchForm();" action="index.php" method="get"><ul class="nav pull-left"><li class="pull-left">
										&nbsp;&nbsp;
										<select id="field" style="width:auto" onchange="changeCondition()" name="field"><option class="text" value="all">任意字段</option><?php if(is_array($field_list)): $i = 0; $__LIST__ = $field_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($v['field'] != 'category_id'): ?><option class="<?php echo ($v['form_type']); ?>" value="<?php echo ($v[field]); ?>" rel="product"><?php echo ($v[name]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?><option class="role" value="creator_role_id">创建人</option><option class="date" value="create_time">创建时间</option><option class="date" value="update_time">修改时间</option></select>&nbsp;&nbsp;
									</li><li id="conditionContent" class="pull-left"><select id="condition" style="width:auto" name="condition" onchange="changeSearch()"><option value="contains">包含</option><option value="is">是</option><option value="start_with">开始字符</option><option value="end_with">结束字符</option><option value="is_empty">为空</option></select>&nbsp;&nbsp;
									</li><li id="searchContent" class="pull-left"><input id="search" type="text" class="input-medium search-query" name="search"/>&nbsp;&nbsp;
									</li><li class="pull-left"><input type="hidden" name="m" value="product"/><?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?><button type="submit" class="btn"><img src="__PUBLIC__/img/search.png"/>  搜索</button></li><li class="pull-left"><a href="http://5kcrm.com/index.php?m=doc&a=index&id=28" target="_blank" style="font-size: 12px;color: rgb(255, 102, 0);padding-left:10px;line-height: 25px;"><img width="20px;" src="__PUBLIC__/img/help.png"/> 帮助</a></li></ul></form></li></ul></div><div class="pull-right"><a class="btn btn-primary" href="<?php echo U('product/add');?>"><i class="icon-plus"></i>&nbsp; 添加产品</a>&nbsp;
					<div class="btn-group"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i>&nbsp; 产品工具<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="javascript:return(0);" id="import_excel"  class="link"><i class="icon-down"><i class="icon-upload"></i>导入产品</i></a></li><li><a href="<?php echo U('product/excelexport');?>"  onclick="return window.confirm('您确定要导出产品吗 ?');" class="link"><i class="icon-download"></i>导出产品</a></li></ul></div></div></div><div class="span10"><form id="form1" action="<?php echo U('');?>" method="Post"><table class="table table-hover table-striped"><?php if($list == null): ?><tr><td>----暂无数据！----</td></tr><?php else: ?><thead><tr id="childNodes_num"><th><input class="check_all" id="check_all" type="checkbox" /> &nbsp;</th><?php if(is_array($field_array)): $i = 0; $__LIST__ = $field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><th><?php echo ($vo["name"]); ?></th><?php endforeach; endif; else: echo "" ;endif; ?><th>创建人</th><th>操作</th></tr></thead><tfoot><tr><td id="td_colspan"><?php echo ($page); ?></td></tr></tfoot><tbody><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><input name="product_id[]" class="check_list" type="checkbox" value="<?php echo ($vo["product_id"]); ?>"/></td><?php if(is_array($field_array)): $i = 0; $__LIST__ = $field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><td><?php if($v['field'] == 'category_id'): echo (($categoryList[$vo[$v['field']]]['name'])?($categoryList[$vo[$v['field']]]['name']):'默认'); else: if($v['field'] == 'name'): ?><a href="<?php echo U('product/view', 'id='.$vo['product_id']);?>"><?php endif; ?><span style="color:#<?php echo ($v['color']); ?>"><?php if($v['form_type'] == 'datetime'): echo (date('Y-m-d',$vo[$v['field']] )); else: echo ($vo[$v['field']]); endif; ?></span><?php if($v['field'] == 'name'): ?></a><?php endif; endif; ?></td><?php endforeach; endif; else: echo "" ;endif; ?><td><?php if(!empty($vo["creator"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["creator"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["creator"]["user_name"]); ?></a><?php endif; ?></td><td><a href="<?php echo U('product/view', 'id='.$vo['product_id']);?>">查看</a>&nbsp;
									<?php if($_GET['by']== 'deleted'): ?><a href="<?php echo U('product/revert', 'id=' . $vo['product_id']);?>">还原</a>&nbsp;
									<?php else: ?><a href="<?php echo U('product/edit', 'id='.$vo['product_id']);?>">编辑</a><?php endif; ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody><?php endif; ?></table></form></div></div></div><div class="hide" id="dialog-import" title="导入数据">loading...</div><div class="hide" id="dialog-role-info" title="员工信息">loading...</div><script type="text/javascript"><?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=600;<?php endif; ?>
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
	window.location.href="<?php echo U('product/index', 'by=');?>"+a;
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
			<?php if($_SESSION['admin']== 1 and $_GET['by']== 'deleted'): ?>$("#form1").attr('action', '<?php echo U("product/completedelete");?>');
				$("#form1").submit();
			<?php else: ?>
				$("#form1").attr('action', '<?php echo U("product/delete");?>');
			$("#form1").submit();<?php endif; ?>
		}
	});
	$("#import_excel").click(function(){
		$('#dialog-import').dialog('open');
		$('#dialog-import').load('<?php echo U("product/excelimport");?>');
	});
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
});
<?php if($list != null): ?>$nodes_num = document.getElementById("childNodes_num").children.length;
	$("#td_colspan").attr('colspan',$nodes_num);<?php endif; ?></script></body></html>