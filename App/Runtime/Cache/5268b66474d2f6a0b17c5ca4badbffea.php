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

    </style><link href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><!-- HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]--><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"></head><body><div class="container"><div class="install"><h3>欢迎安装悟空CRM！</h3><p>配置文件写入成功</p><p>正在创建默认数据 <span class="precent"></span></p><p class="info"></p><div class="progress progress-striped active"><div class="bar" style="width: 0%;"></div></div><div class="row-fluid wukong"><div class="span3"><img src="__PUBLIC__/img/logo_img.png" alt="悟空CRM"/></div><div class="span9"><p>悟空CRM &copy; 锐骑文化 2013</p><p><small><a href="http://www.5kcrm.com/" target="_blank">使用帮助</a><span class="muted">&middot;</span><a href="http://www.5kcrm.com/" target="_blank">技术支持</a><span class="muted">&middot;</span><a href="http://www.ccds24.com" target="_blank">联系我们</a></small></p></div></div></div></div><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script type="text/javascript">
	$(function(){		
		function process(id) {
			$.get('<?php echo U("install/install");?>', {id:id, name:"<?php echo $admin['name']; ?>", password:"<?php echo $admin['password']; ?>"}, function(data){
				$(".bar").css("width", data.info);
				$(".precent").html(data.info);
				if(data.info != '100%') {					
					process(data.data);
				} else {
					$(".progress").removeClass("active");
					$(".info").append("安装成功！<a href='<?php echo U('user/login');?>'>点此登录</a>");
				}
			}, 'json');
		}
		process(0);
	});
	</script></body></html>