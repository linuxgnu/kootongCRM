<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><title><?php echo C('defaultinfo.name');?> - Powered By 悟空CRM</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="description" content=""/><meta name="author" content="悟空CRM"/><link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" /><link href="__PUBLIC__/css/docs.css" rel="stylesheet"/><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script><script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css"><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" /><![endif]--><!--[if lt IE 9]><link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/><![endif]--><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--></head><body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true"><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div><a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a><?php echo W("Navigation");?></div></div></div><script src="__PUBLIC__/js/PCASClass.js" type="text/javascript"></script><div class="container"><div class="page-header"><h4>系统设置</h4></div><?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo ($vv); ?></div><?php endforeach; endif; endforeach; endif; ?><div class="tabbable"><ul class="nav nav-tabs"><li class="active"><a href="<?php echo U('setting/defaultInfo');?>">系统基本设置</a></li><li><a href="<?php echo U('setting/smtp');?>">SMTP设置</a></li><li><a href="<?php echo U('setting/fields');?>">自定义字段设置</a></li><li><a href="<?php echo U('navigation/setting');?>">系统菜单设置</a></li><li><a href="<?php echo U('setting/weixin');?>">微信公共账号设置</a></li></ul><div class="row"><form class="form-horizontal" enctype="multipart/form-data" action="<?php echo U('setting/defaultInfo');?>" method="post"><table class="span6 table"><thead><tr><th colspan="2">默认信息</th></tr></thead><tbody><tr><td class="tdleft">系统名称：</td><td><input name="name" id="name" type="text" value="<?php echo ($defaultinfo["name"]); ?>"></td></tr><tr><td class="tdleft">系统描述：</td><td><input name="description" id="description" type="text" value="<?php echo ($defaultinfo["description"]); ?>"></td></tr><tr><td class="tdleft">系统Logo：</td><td><input name="logo" type="file"> (建议尺寸：50*50)
								<?php if($defaultinfo['logo'] != ''): ?><br/><img src="<?php echo ($defaultinfo["logo"]); ?>" style="width:50px;"/><?php endif; ?></td></tr><tr><td class="tdleft">默认地区：</td><td><select id="state" name="state" class="input-medium"></select><select id="city" name="city" class="input-medium"></select></td></tr><tr><th colspan="2">安全与调试</th></tr><tr><td class="tdleft">允许上传文件类型：</td><td><input name="allow_file_type" id="name" type="text" value="<?php echo ($defaultinfo["allow_file_type"]); ?>"><br/><span style="color:red;">* 类型间用逗号隔开,如：pdf,xls,doc,txt,jpg </span></td></tr><tr><td class="tdleft">清空缓存：</td><td><input type="button" class="btn" id="clear" value="清空"/></td></tr><tr><td class="tdleft">调试模式：</td><td><input type="button" class="btn" id="opendebug" value="打开"/> &nbsp;
								<input type="button" class="btn" id="closedebug" value="关闭"/></td></tr><tr><th colspan="2">其他设置</th></tr><tr><td class="tdleft">合同提醒时间：</td><td>								提前<input type="text" style="width:50px;" name="contract_alert_time" value="<?php echo (($defaultinfo['contract_alert_time'])?($defaultinfo['contract_alert_time']):30); ?>"/>天
							</td></tr><tr><td class="tdleft">任务分配模式：</td><td><input name="task_model" type="radio" <?php if($defaultinfo["task_model"] != 2): ?>checked="checked"<?php endif; ?> value="1"/>只允许分配给下级 &nbsp;  &nbsp; 
								<input <?php if($defaultinfo["task_model"] == 2): ?>checked="checked"<?php endif; ?>  name="task_model" type="radio" value="2"/>随意分配
							</td></tr><tr><td class="tdleft">客户池回收周期：</td><td><input class="input-small" type="text" id="customer_outdays" name="customer_outdays" value="<?php echo ($customer_outdays); ?>" size="5"/>天
							</td></tr><tr><td class="tdleft">客户领取周期：</td><td><select name="customer_limit_condition" class="input-small"><option value="day" <?php if('day' == $customer_limit_condition): ?>selected="selected"<?php endif; ?>>本天</option><option value="week" <?php if('week' == $customer_limit_condition): ?>selected="selected"<?php endif; ?>>本周</option><option value="month" <?php if('month' == $customer_limit_condition): ?>selected="selected"<?php endif; ?>>本月</option></select>								内限制领取
								<input class="input-small" type="text" id="customer_limit_counts" name="customer_limit_counts" value="<?php echo ($customer_limit_counts); ?>" size="5"/>次
							</td></tr><tr><td class="tdleft">超出天数放入线索池：</td><td><input class="input-small" type="text" id="leads_outdays" name="leads_outdays" value="<?php echo ($leads_outdays); ?>" size="5"/>天
							</td></tr><tr><td>&nbsp;</td><td><input name="submit" class="btn btn-primary" type="submit" value="保存"/></td></tr></tbody></table></form></div></div><!-- End #main-content --></div><script type="text/javascript">$(function(){
	new PCAS("state","city","<?php echo ($defaultinfo["state"]); ?>","<?php echo ($defaultinfo["city"]); ?>");
	$('#clear').click(function(){
		if(confirm('确定要清空缓存?')){
			$.get("<?php echo U('setting/clearcache');?>", function(result){
				if(result.status == 1){
					alert('已清空缓存!');
				}else{
					alert('清空缓存失败!');
				}
			});
		}
	});
	$('#opendebug').click(function(){
		$.get("<?php echo U('setting/opendebug');?>", function(result){
			if(result.status == 1){
				alert('调试模式已开启!');
			}else if(result.status == 2){
				alert('配置文件没有写操作权限!');
			}
		});
	});
	$('#closedebug').click(function(){
		$.get("<?php echo U('setting/closedebug');?>", function(result){
			if(result.status == 1){
				alert('调试模式已关闭!');
			}else if(result.status == 2){
				alert('配置文件没有写操作权限!');
			}
		});
	});
});
</script></body></html>