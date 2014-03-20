<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><title><?php echo C('defaultinfo.name');?> - Powered By 悟空CRM</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="description" content=""/><meta name="author" content="悟空CRM"/><link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" /><link href="__PUBLIC__/css/docs.css" rel="stylesheet"/><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script><script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css"><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" /><![endif]--><!--[if lt IE 9]><link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/><![endif]--><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--></head><body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true"><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div><a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a><?php echo W("Navigation");?></div></div></div><div class="container"><div class="page-header" style="border:none; font-size:14px; "><ul class="nav nav-tabs"><li class="active"><a href="<?php echo U('setting/sendsms');?>">发送短信</a></li><li><a href="<?php echo U('setting/sendemail');?>">发送邮件</a></li></ul></div><?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo ($vv); ?></div><?php endforeach; endif; endforeach; endif; if(!empty($contacts)): $first = 0; if(is_array($contacts)): $i = 0; $__LIST__ = $contacts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(!is_phone($vo['telephone'])): if($first==0){ $first = 1; }else{ $first = 2; } if($first == 1): ?><div class="alert alert-warning">部分号码由于信息格式不符合，已过滤！<br/>具体如下:<?php endif; echo (trim($vo['telephone'])); ?> &nbsp; <?php echo ($vo['name']); ?>[客户:<?php echo ($vo['customer_name']); ?>]、<?php endif; endforeach; endif; else: echo "" ;endif; if($first != 0): ?></div><?php endif; endif; ?><div class="row"><div class="span12"><h4>当前剩余短信: <?php if($current_sms_num < 100): ?><font color="red"><?php echo ($current_sms_num); ?> 条  请注意短信条数，余额不足将导致无法发送!</font><?php else: echo ($current_sms_num); ?> 条<?php endif; ?></h4></div><div><div class="span3 warning pull-left" style="background-color:#f5f5f5;"><pre><h4>操作提示：</h4>
1、手机号码标准格式为：<span style="color:red">13166337788</span>
2、群组发送短信时，以换行间隔每个客户，如
   <span style="color:red">13166337788
   13166337799</span>
2、如需在短信中加入姓名信息，请在短信内容中以<span style="color:red">{</span><span style="color:red">$name}</span>代替，<span style="color:red">手机格式必须如下</span>:
   <span style="color:red">13166337788,张三
   13166337799,李四</span>
3、<span style="color:red">请不要在短信内容中填写特殊字符,包括换行符。</span>
4、短信内容不能多于65个字
（其中空格 数字 字母 汉字均为一个字）
5、同一手机号间隔发送时间不得少于20秒
8、请仔细阅读页面右方的使用说明，请严格按照系统设定标准格式发送短信
				</pre></div><form  action="<?php echo U('setting/sendsms');?>" method="post"><div class="pull-left"><div class="pull-left" style="margin-left:30px;"><div class="alert-info alert" style="margin:0px;width:220px;">在此输入收件人手机号<br/>&nbsp;注意:多个联系人换行隔开</div><div><textarea  name="phoneNum" style="min-height: 500px;width:260px;"><?php if(!empty($contacts)): if(is_array($contacts)): $i = 0; $__LIST__ = $contacts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(is_phone($vo['telephone'])): echo (trim($vo['telephone'])); ?>,<?php echo ($vo['name']); ?>,<?php echo ($vo['customer_name']); echo chr(10); endif; endforeach; endif; else: echo "" ;endif; endif; ?></textarea></div></div><div class="pull-left" style="margin-left:30px;"><p><select name="template" id="template" style="width:auto;font-size:12px;" onchange="changeContent()"><option>--选择短信模板--</option><?php if(is_array($templateList)): $i = 0; $__LIST__ = $templateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v['template_id']); ?>" rel="<?php echo ($v['content']); ?>"><?php echo ($v['subject']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select><a href="<?php echo U('sms/index');?>" style="color:red;">设置</a></p><div class="alert-info alert" style="margin:0px;width:200px;">在此输入短信内容<br/>&nbsp;注意:<span style="color:red">请务必阅读左侧操作提示!</span></div><div><textarea id="smsContent" name="smsContent" placeholder="在这里填写短信内容……" style="height: 300px;width:240px;"></textarea><p>您还可以输入 <span id="contentCount" style="color:red;">55</span> 个字……</p><p><span id="selecttime" style="display:none;">选择时间：<input type="text" id="sendtime" style="width:auto;" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" name="sendtime" class="Wdate"/></span><br/><input type="submit" onclick="发送过程可能会需要一些时间，请不要急用关闭此页面!" class="btn btn-primary" value="发送"/> &nbsp; 
						<input type="checkbox" name="settime" value="1" id="settime"/>定时发送 &nbsp; <br/></p></div></div></div></form><div class="span3 warning  pull-left" style="background-color:#f5f5f5;"><pre><h4>使用说明：</h4>（您使用本系统发送短信，就表明您同意并接受以下内容）
				
1.不得发送包含以下内容、文字的短信息内容： 非法的、骚扰性的、中伤他人的、辱骂性 的、恐吓性的、伤害性的、庸俗的、淫秽 的信息；教唆他人构成犯罪行为的信息、 危害国家安全的信息；及任何不符合国家 法律、国际惯例、地方法律规定的信息。

2.不能违反运营商规定，不得发送竞争对手产 品的广告，不能按手机号段形式进行广告 业务的宣传等，不能发送与本行业无关和 移动运营商限制和禁止发送的短信内容， 特别是广告类信息，群发短信等，对违反 此声明产生的一切后果由发送者及其单位 承担。

3.最好不要在晚22:00至早7:00时段发送短信， 以免引起客户反感。
				</pre></div></div></div><!-- End #main-content --></div><script type="text/javascript">
$(document).ready(function(){
    $("#smsContent").keydown(function(){
        var curLength=$("#smsContent").val().length;
        if(curLength == 55){
            alert("已超过一条短信的长度，将按多条短信分条发送！" );
			$("#contentCount").hide();
        }else if(curLength < 55){
            $("#contentCount").html(55-$("#smsContent").val().length);
			$("#contentCount").show();
        }else{
			$("#contentCount").hide();
		}
    })
})
$("#settime").click(
	function() {
		if ($("#settime").prop("checked")==true) {
			$("#selecttime").show();
		}else{
			$("#selecttime").hide();
		}
	}	
);

function changeContent(){
	var a = $('#template option:selected').attr('rel');
	if(a){
		$('#smsContent').html(a);
	}else{
		$('#smsContent').html('');
	}
	
}
</script></body></html>