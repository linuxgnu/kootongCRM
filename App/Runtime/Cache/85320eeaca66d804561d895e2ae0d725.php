<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><title><?php echo C('defaultinfo.name');?> - Powered By 悟空CRM</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="description" content=""/><meta name="author" content="悟空CRM"/><link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" /><link href="__PUBLIC__/css/docs.css" rel="stylesheet"/><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script><script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css"><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" /><![endif]--><!--[if lt IE 9]><link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/><![endif]--><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--></head><body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true"><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div><a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a><?php echo W("Navigation");?></div></div></div><script type="text/javascript" src="__PUBLIC__/js/kindeditor-all-min.js"></script><script type="text/javascript" src="__PUBLIC__/js/zh_CN.js"></script><script src="__PUBLIC__/js/PCASClass.js" type="text/javascript"></script><script type="text/javascript" src="__PUBLIC__/js/formValidator-4.0.1.min.js" charset="UTF-8"></script><script type="text/javascript" src="__PUBLIC__/js/formValidatorRegex.js" charset="UTF-8"></script><link rel="stylesheet" href="__PUBLIC__/css/kindeditor.css" type="text/css" /><div class="container"><!-- Docs nav ================================================== --><div class="page-header"><h4>添加客户</h4></div><div class="row"><div class="span12"><?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo ($vv); ?></div><?php endforeach; endif; endforeach; endif; ?><form id="form1" action="<?php echo U(customer/add);?>" method="post"><table class="table" width="95%" border="0" cellspacing="1" cellpadding="0"><thead><tr><td>&nbsp;</td><td><input class="btn btn-primary" name="submit" type="submit" value="保存"/>&nbsp; <input class="btn btn-primary" name="submit" type="submit" value="保存并新建"/> &nbsp; <input class="btn" type="button" onclick="javascript:history.go(-1)" value="返回"/> &nbsp; &nbsp; <input type="checkbox" name="create_business1" value="1"/>同时创建商机</td></tr></thead><tfoot><tr><td>&nbsp;</td><td><input class="btn btn-primary" name="submit" type="submit" value="保存"/> &nbsp;<input class="btn btn-primary" name="submit" type="submit" value="保存并新建"/>&nbsp; <input class="btn" type="button" onclick="javascript:history.go(-1)" value="返回"/> &nbsp; &nbsp; <input type="checkbox" name="create_business2" value="1"/>同时创建商机</td></tr></tfoot><tbody><tr><th  colspan="2">主要信息</th></tr><tr><td class="tdleft" width="15%">负责人</td><td><input type="hidden" id="owner_id" name="owner_role_id" value="<?php echo (session('role_id')); ?>"/><input type="text" id="owner_name" value="<?php echo (session('name')); ?>" /> &nbsp;&nbsp;<input class="btn btn-mini" id="remove"  type="button" value="放入客户池"/></td></tr><?php if(is_array($field_list)): $i = 0; $__LIST__ = $field_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['is_main'] == 1): echo ($vo['html']); endif; endforeach; endif; else: echo "" ;endif; ?><tr><th  colspan="2">首要联系人信息</th></tr><tr><tr><td colspan="2"><table class="table table-hover"><tbody><tr><td class="tdleft" >姓名</td><td><input class="user_input" type="text" name="con_name" value="<?php echo ($leads['contacts_name']); ?>"></td><td class="tdleft" >称呼</td><td><input class="user_input" type="text" name="saltname" value="<?php echo ($leads['saltname']); ?>"></td><td class="tdleft" >邮箱</td><td><input class="user_input" name="con_email" type="text"  value="<?php echo ($leads['email']); ?>"/></td></tr><tr><td class="tdleft" >职位</td><td><input class="user_input"  value="<?php echo ($leads['position']); ?>" type="text" name="con_post"/></td><td class="tdleft">QQ</td><td><input class="user_input" name="con_qq" type="text" /></td><td class="tdleft" >手机</td><td><input class="user_input" name="con_telephone" value="<?php echo ($leads['mobile']); ?>" type="text" /></td></tr><tr><td class="tdleft" >备注</td><td colspan="5"><textarea class="span8" rows="3" name="con_description" ></textarea></td></tr></tbody></table></td></tr><tr><th  colspan="2">附加信息</th></tr><?php if(is_array($field_list)): $i = 0; $__LIST__ = $field_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['is_main'] == 0): echo ($vo['html']); endif; endforeach; endif; else: echo "" ;endif; ?></tbody></table><?php if($leads['leads_id']): ?><input type="hidden" name="leads_id" value="<?php echo ($leads['leads_id']); ?>"/><?php endif; ?></form></div></div></div><div id="dialog-role-list" class="hide" title="选择客户所有人">loading...</div><div id="dialog-contacts-add" class="hide" title="添加联系人">loading...</div><div class="hide" id="dialog-validate" title="客户名验重结果">
	有以下客户与该客户名类似
	<div id="search_content"></div></div><script type="text/javascript"><?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=800;<?php endif; ?>
$("#dialog-role-list").dialog({
	autoOpen: false,
	modal: true,
	width: width,
	maxHeight: 400,
	buttons: { 
		"Ok": function () {
			var item = $('input:radio[name="owner"]:checked').val();
			var name = $('input:radio[name="owner"]:checked').parent().next().html();
			if(item){
				$('#owner_name').val(name);
				$('#owner_id').val(item);
			}
			$(this).dialog("close"); 
		},
		"Cancel": function () {
			$(this).dialog("close");
		}
	},
	position: ["center", 100]
});
$("#dialog-contacts-add").dialog({
	autoOpen: false,
	modal: true,
	width: width,
	maxHeight: 400,
	buttons: {
		"Ok": function () {
			
		},
		"Cancel": function () {
			$(this).dialog("close");
		}
	},
	position: ["center", 100]
});
$("#dialog-validate").dialog({
	autoOpen: false,
	modal: true,
	width: 400,
	maxHeight: 400,
	buttons: { 
		"确认": function () {
			$(this).dialog("close"); 
		}
	},
	position: ["center", 100]
});
$(function(){
	$('#owner_name').click(
		function(){
			$('#dialog-role-list').dialog('open');
			$('#dialog-role-list').load("<?php echo U('user/listDialog');?>");
		}
	);
	$('#add_contacts').click(
		function(){
			$('#dialog-role-list').dialog('open');
			$('#dialog-role-list').load("<?php echo U('contacts/add_dialog');?>");
		}
	);
	$('#remove').click(
		function(){
			$('#owner_id').attr('value', '');
			$('#owner_name').attr('value', '');
		}
	);
	$('#name').blur(
		function(){
			name = $('#name').val();
			if(name!=''){
				$.post('<?php echo U("customer/check");?>',
					{
						name:name
					},
					function(data){
						if(data.data != 0){
							$result = '';
							$.each(data.data, function(k, v){
								$result += (k+1)+'、'+v+'</br>';
							});
							$('#dialog-validate').dialog('open');
							$("#search_content").html($result);
						}
					},
				'json');
			} else {
				alert('请填写客户名!');
			}
		}
	)
});
$(function(){
    $.formValidator.initConfig({formID:"form1",debug:false,submitOnce:false,
        onError:function(msg,obj,errorlist){
        alert(msg);
    },
    submitAfterAjaxPrompt : '有数据正在异步验证，请稍等...'
});
<?php if(is_array($field_list)): $i = 0; $__LIST__ = $field_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['is_validate'] == 1): if($vo['form_type'] != 'box' || $vo['setting']['type'] == 'select'): ?>$("#<?php echo ($vo[field]); ?>").formValidator({
	            tipID:"<?php echo ($vo[field]); ?>Tip",
	            <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'>*必填项</span>",
				empty:false,
	            <?php else: ?>
	            onShow:" ",
				empty:true,<?php endif; ?>
	            onFocus:" ",
	            onCorrect:"<span style='color:green;'>√</span>"
	        }).inputValidator({
	            <?php if($vo['is_null'] == 1): ?>min:1,max:<?php echo (($vo[max_length])?($vo[max_length]):"255"); ?>,
	            onshow:"<font style='color:red;'><?php echo ($vo[name]); ?>不能为空</font>",
	            <?php else: ?>
	            min:0,max:<?php echo (($vo[max_length])?($vo[max_length]):"255"); ?>,<?php endif; ?>
	            onErrorMin:"<?php echo ($vo[name]); ?>不能为空",
	            onErrorMax:"<?php echo ($vo[name]); ?>超出最大长度<?php echo (($vo[max_length])?($vo[max_length]):"255"); ?>"
	         });
            <?php if($vo['form_type'] == 'email'): ?>$("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"email",
                dataType:"enum",
                onError:"<?php echo ($vo[name]); ?>格式不正确"
            });
            <?php elseif($vo['form_type'] == 'mobile'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"mobile",
                dataType:"enum",
                onError:"<?php echo ($vo[name]); ?>格式不正确"
            });
            <?php elseif($vo['form_type'] == 'phone'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"tel",
                dataType:"enum",
                onError:"<?php echo ($vo[name]); ?>格式不正确"
            });
            <?php elseif($vo['form_type'] == 'datetime'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"date",
                dataType:"enum",
                onError:"<?php echo ($vo[name]); ?>格式不正确"
            });
            <?php elseif($vo['form_type'] == 'number'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"num",
                dataType:"enum",
                onError:"<?php echo ($vo[name]); ?>格式不正确"
            });<?php endif; if($vo['is_unique'] == 1 && $vo['field']!='name'): ?>$("#<?php echo ($vo[field]); ?>").ajaxValidator({
                dataType : "json",
                type : "GET",
                async : true,
                url : "<?php echo U('customer/validate');?>",
                success : function(data){
                    if( data.status == 1 ) return false;
                    if( data.status == 0 ) return true;
                    return false;
                },
                error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
                onError : "该<?php echo ($vo[name]); ?>不可用，请更换<?php echo ($vo[name]); ?>",
                onWait : "正在对<?php echo ($vo[name]); ?>进行合法性校验，请稍候..."
            });<?php endif; else: if($vo['setting']['type'] == 'checkbox'): ?>$(":checkbox[name='<?php echo ($vo['field']); ?>[]']").formValidator({
                 tipID:"<?php echo ($vo[field]); ?>Tip",
                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'>*必选项</span>",
                 <?php else: ?>
                 onShow:" ",<?php endif; ?>
                 onFocus:" ",
                 onCorrect:"<span style='color:green;'>√</span>"
             }).inputValidator({
             	<?php if($vo['is_null'] == 1): ?>min:1,
                 <?php else: ?>
                 min:0,<?php endif; ?>
             	onError:"请选择<?php echo ($vo[name]); ?>min"
             });
             <?php else: ?>
             $(":radio[name='<?php echo ($vo['field']); ?>']").formValidator({
                 tipID:"<?php echo ($vo[field]); ?>Tip",
                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'>*必选项</span>",
                 <?php else: ?>
                 onShow:" ",<?php endif; ?>
                 onFocus:" ",
                 onCorrect:"<span style='color:green;'>√</span>"
             }).inputValidator({
             	<?php if($vo['is_null'] == 1): ?>min:1,
                 <?php else: ?>
                 min:0,<?php endif; ?>
             	onError:"请选择<?php echo ($vo[name]); ?>min"
             });<?php endif; endif; endif; endforeach; endif; else: echo "" ;endif; ?>
});

</script></body></html>