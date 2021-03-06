<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><title>安装悟空CRM</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="description" content=""><meta name="author" content="悟空CRM"><link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet"><link href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet"><style type="text/css">
  body {
	padding-top: 20px;
	padding-bottom: 20px;
	background-color: #f5f5f5;
  }

  .install {
	max-width: 600px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	background-color: #fff;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 5px;
	   -moz-border-radius: 5px;
			border-radius: 5px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	   -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
			box-shadow: 0 1px 2px rgba(0,0,0,.05);
  }
  .install input[type="text"],
  .install input[type="password"] {
	font-size: 16px;
	height: auto;
	padding: 7px 9px;
	margin:0;
  }
  .install h3 {
	border-bottom:1px solid #e5e5e5;
  }
  .wukong {
	margin-top:30px;
	padding-top:10px;
	border-top:1px solid #e5e5e5;		
  }
  .table td {border:0;}
  .table td label{border:0;line-height:34px;}
  .table td span{border:0;line-height:34px;color:#999999;}

</style><link href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><!-- HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]--><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"></head><body><div class="container"><div class="install"><h3>欢迎安装悟空CRM！</h3><?php if(empty($errors)): if(is_array($warnings)): $i = 0; $__LIST__ = $warnings;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$warning): $mod = ($i % 2 );++$i;?><div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">×</button><?php echo ($warning); ?></div><?php endforeach; endif; else: echo "" ;endif; ?><form action="" method="post"><table class="table table-hover" width="95%" border="0" cellspacing="1" cellpadding="0"><tr><td width=80><label>数据库主机</label></td><td width=230><input type="text" name="DB_HOST" class="text-input" value="localhost" /></td><td><span>一般为localhost</span></td></tr><tr><td><label>端口</label></td><td><input type="text" name="DB_PORT" class="text-input" value="3306" /></td><td><span>一般为3306</span></td></tr><tr><td><label>数据库名</label></td><td><input type="text" name="DB_NAME" class="text-input" placeholder="数据库名"/></td><td><span>将悟空CRM安装到哪个数据库</span></td></tr><tr><td><label>用户名</label></td><td><input type="text" name="DB_USER" class="text-input" placeholder="用户名"/></td><td><span>MySQL用户名</span></td></tr><tr><td><label>密码</label></td><td><input type="text" name="DB_PWD" class="text-input" placeholder="密码"/></td><td><span>MySQL用户的密码</span></td></tr><tr><td><label>表前缀</label></td><td><input type="text" name="DB_PREFIX" class="text-input" value="5k_" placeholder="5k_"/></td><td><span></span></td></tr><tr><td><label>管理员</label></td><td><input type="text" name="name" class="text-input" placeholder="管理员"/></td><td><span>悟空CRM的系统管理员</span></td></tr><tr><td><label>密码</label></td><td><input type="text" name="password" class="text-input" placeholder="密码"/></td><td><span>系统管理员密码</span></td></tr><tr><td></td><td><button class="btn btn-primary" name="submit" type="submit" value="install">安装</button></td><td></td></tr></table></form><?php else: if(is_array($errors)): $i = 0; $__LIST__ = $errors;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$error): $mod = ($i % 2 );++$i;?><div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><?php echo ($error); ?></div><?php endforeach; endif; else: echo "" ;endif; endif; ?><div class="row-fluid wukong"><div class="span3"><img src="__PUBLIC__/img/logo_img.png" alt="悟空CRM"/></div><div class="span9"><p>悟空CRM &copy; 锐骑文化 2013</p><p><small><a href="http://www.5kcrm.com/" target="_blank">使用帮助</a><span class="muted">&middot;</span><a href="http://www.5kcrm.com/" target="_blank">技术支持</a><span class="muted">&middot;</span><a href="http://www.ccds24.com" target="_blank">联系我们</a></small></p></div></div></div></div><div id="dialog-upgrade" class="hide" title="发现新版本"><p>当前版本: <?php echo C("VERSION");?> &nbsp; 发布时间: <?php echo C("RELEASE");?></p><p id="info"></p></div><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script type="text/javascript">
$('#dialog-upgrade').dialog({
	autoOpen: false,
	modal: true,
	width: 600,
	maxHeight: 400,
	position :["center",100],
	buttons: { 
		"Cancel": function () {
			$(this).dialog("close");
		}
	},
});
$(function(){
	$.get("<?php echo U('install/checkVersion');?>", function(data){
		if (data.status) {
			$('#dialog-upgrade').dialog('open');
			$("#dialog-upgrade #info").html("<span style='color:red;'>" + data.info + "</span>");
		}
	});
});
</script></body></html>