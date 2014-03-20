<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="utf-8"><title><?php echo C('defaultinfo.name');?> - Powered By 悟空CRM</title><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="description" content=""/><meta name="author" content="悟空CRM"/><link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet"><link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" /><link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" /><link href="__PUBLIC__/css/docs.css" rel="stylesheet"/><link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/><script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script><script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css"><![endif]--><!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css"><![endif]--><!--[if IE 7]><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" /><![endif]--><!--[if lt IE 9]><link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/><![endif]--><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--></head><body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true"><div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container"><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div><a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a><?php echo W("Navigation");?></div></div></div><script src="__PUBLIC__/js/chart/highcharts.js"></script><script src="__PUBLIC__/js/chart/modules/exporting.js"></script><script src="__PUBLIC__/js/chart/modules/funnel.js"></script><div class="container"><div class="page-header" style="border:none; font-size:14px;"><ul class="nav nav-tabs"><li><a href="<?php echo U('business/index');?>"><img src="__PUBLIC__/img/shangji.png"/>&nbsp; 商机</a></li><li class="active"><a href="<?php echo U('business/analytics');?>"><img src="__PUBLIC__/img/tongji.png"/> &nbsp;统计</a></li></ul></div><?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo ($vv); ?></div><?php endforeach; endif; endforeach; endif; ?><div class="row"><div class="span12"><ul class="nav pull-left"><li class="pull-left"><form class="form-inline" id="searchForm" onsubmit="return checkSearchForm();" action="" method="get"><ul class="nav pull-left"><li class="pull-left">
								选择部门：&nbsp; <select style="width:auto" name="department" id="department" onchange="changeRole()"><option class="all" value="all">全部</option><?php if(is_array($departmentList)): $i = 0; $__LIST__ = $departmentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["department_id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select>&nbsp;&nbsp;
							</li><li class="pull-left">
								选择员工：&nbsp; <select style="width:auto" name="role" id="role" onchange="changeCondition()"><option class="all" value="all">全部</option><?php if(is_array($roleList)): $i = 0; $__LIST__ = $roleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["role_id"]); ?>"><?php echo ($vo["role_name"]); ?>-<?php echo ($vo["user_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select>&nbsp;&nbsp;
							</li><li class="pull-left">
								选择日期：&nbsp; 从<input type="text" id="start_time" name="start_time" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" class="Wdate" value="<?php echo ($_GET['start_time']); ?>"/>至<input type="text" id="end_time" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" name="end_time" class="Wdate" value="<?php echo ($_GET['end_time']); ?>" />&nbsp;&nbsp;
							</li><li class="pull-left"><input type="hidden" name="m" value="business"/><input type="hidden" name="a" value="analytics"/><?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?><button type="submit" class="btn">搜索</button></li></ul></form></li></ul></div><div class="span2 knowledgecate"><ul class="nav nav-list"><li class="active"><a href="javascript:void(0);">选择统计内容</a></li><li id="report"><a id="show_report" class="active" href="javascript:void(0)"><i class="icon-white icon-chevron-right"></i>商机统计报表</a></li><li id="status"><a id="show_status" href="javascript:void(0)"><i class="icon-white icon-chevron-right"></i>销售漏斗图</a></li><li id="money"><a id="show_money" href="javascript:void(0)"><i class="icon-white icon-chevron-right"></i>商机金额图</a></li><li id="source"><a id="show_source" href="javascript:void(0)"><i class="icon-white icon-chevron-right"></i>来源统计图</a></li><li id="day"><a id="show_day" href="javascript:void(0)"><i class="icon-white icon-chevron-right"></i>趋势分析(按日)</a></li></ul></div><div class="span10"><div id="report_content"><table class="table table-hover"><thead><tr><th>员工</th><th>添加商机</th><th>负责商机</th><th>成交商机</th><th>跟进中商机</th></tr></thead><tfoot><tr><td>共计:</td><td colspan="4"><span style="color:red;">添加商机：<?php echo ($total_report["add_count"]); ?> 条 &nbsp; 有人负责的商机：<?php echo ($total_report["own_count"]); ?> 条 &nbsp; 成交的商机：<?php echo ($total_report["success_count"]); ?> 条 &nbsp; 跟进中的商机:<?php echo ($total_report["deal_count"]); ?> 条</span></td></tr></tfoot><tbody><?php if(is_array($reportList)): $i = 0; $__LIST__ = $reportList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><a class="role_info" rel="<?php echo ($vo["user"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["user"]["user_name"]); ?></a></td><td><?php echo ($vo["add_count"]); ?></td><td><a href="<?php echo U('business/index');?>&field=owner_role_id&search=<?php echo ($vo["user"]["role_id"]); ?>&by=sub"><?php echo ($vo["own_count"]); ?></a></td><td><a href="<?php echo U('business/index');?>&field=owner_role_id&search=<?php echo ($vo["user"]["role_id"]); ?>&by=transformed"><?php echo ($vo["success_count"]); ?></a></td><td><?php echo ($vo["deal_count"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table></div><div id="source_content" class="hidden"><div id="an_chart" class="span6"><div id="canvas_resource" style="min-width: 500px; height: 500px;margin: 0 auto">暂无数据!</div></div></div><div id="status_content" class="hidden"><div id="an_chart" class="span6"><div id="canvas_status"  style="min-width: 500px; height: 500px;margin: 0 auto">暂无数据!</div></div></div><div id="money_content" class="hidden"><div id="an_chart" class="span6"><div id="canvas_money" style="width: 500px; height: 500px; margin: 0 auto">暂无数据!</div></div></div><div id="day_content" class="hidden"><div id="an_chart"><div id="canvas_day" style="width:98%;height:600px; margin: 0 auto">暂无数据!</div></div></div></div></div></div><div class="hide" id="dialog-import" title="导入数据">loading...</div><div class="hide" id="dialog-role-info" title="员工信息">loading...</div><script type="text/javascript"><?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=800;<?php endif; ?>
	$("#dialog-role-info").dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight: 400,
		position: ["center",100]
	});
	
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
	
	$(function () {
		var chart1;
		$(document).ready(function () {
			Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function(color) {
				return {
					radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
					stops: [
						[0, color],
						[1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
					]
				};
			});
			<?php if($total_report["add_count"] > 0): ?>// Build the chart1
			$('#canvas_resource').highcharts({
				chart1: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false
				},
				title: {
					text: '商机来源统计 (共计<?php echo ($total_report["add_count"]); ?>条)'
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>',
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: true,
							color: '#000000',
							connectorColor: '#000000',
							formatter: function() {
								return '<b>'+ this.point.name +'</b>: '+ this.percentage.toFixed(1) +' %';
							}
						}
					}
				},
				series: [{
					type: 'pie',
					name: '来源占比',
					data: [
						<?php echo ($source_count); ?>
					]
				}]
			});
			
			
			var chart2;
			// Build the chart2
			$('#canvas_money').highcharts({
				chart2: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false
				},
				title: {
					text: '商机金额统计 (共计<?php echo ($total_report["add_count"]); ?>条)'
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>',
					percentageDecimals: 1
				},	
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false
						},
						showInLegend: true
					}
				},
				series: [{
					type: 'pie',
					name: '金额占比',
					data: [
						<?php echo ($money_count); ?>
					]
				}]
			});
			
			var chart3;
			// Build the chart3
			$('#canvas_day').highcharts({
				chart3: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false
				},
            title: {
                text: '趋势分析(按日)'
            },
            xAxis: {
                categories: [<?php echo ($day_count); ?>],
				labels: { 
				  step:5,	
				}
            },
            yAxis: {
                title: {
                    text: null
                },
				min: 0,
            },
            legend: {
                align: 'left',
                verticalAlign: 'top',
                y: 20,
                floating: true,
                borderWidth: 0
            },
            tooltip: {
                shared: true,
                crosshairs: true
            },			
			plotOptions: {
                series: {
                    cursor: 'pointer',
                    point: {
                        events: {
                            click: function() {
                                hs.htmlExpand(null, {
                                    pageOrigin: {
                                        x: this.pageX,
                                        y: this.pageY
                                    },
                                    headingText: this.series.name,
                                    maincontentText: Highcharts.dateFormat('%A, %b %e, %Y', this.x) +':<br/> '+
                                        this.y +' visits',
                                    width: 200
                                });
                            }
                        }
                    },
                    marker: {
                        lineWidth: 1
                    }
                }
            },			
            series: [{
                name: '创建商机',
                data: [<?php echo ($day_create_count); ?>],
            }, {
                name: '赢单商机',
                data: [<?php echo ($day_success_count); ?>],
            }]
        });
			
			$('#canvas_status').highcharts({
				chart: {
					type: 'funnel',
					marginRight: 100
				},
				title: {
					text: '销售漏斗 (共计<?php echo ($total_report["add_count"]); ?>条)',
					x: -50
				},
				plotOptions: {
					series: {
						dataLabels: {
							enabled: true,
							format: '<b>{point.name}</b> ({point.y:,.0f})',
							color: 'black',
							softConnector: true
						},
						neckWidth: '30%',
						neckHeight: '25%'
						
						//-- Other available options
						// height: pixels or percent
						// width: pixels or percent
					}
				},
				legend: {
					enabled: false
				},
				series: [{
					name: '阶段商机数',
					data: [
						<?php echo ($status_count); ?>
					]
				}]
			});<?php endif; ?>
		});
	});
	
	function changeRole(){
		department_id = $("#department option:selected").val();
		$.ajax({
			type:'get',
			url:'index.php?m=user&a=getrolebydepartment&department_id='+department_id,
			async:true,
			success:function(data){
				options = '<option value="all">全部</option>';
				if(data.data != null){
					$.each(data.data, function(k, v){
						options += '<option value="'+v.role_id+'">'+v.role_name+"-"+v.user_name+'</option>';
					});
				}
				$("#role").html(options);
				<?php if($_GET['role']): ?>$("#role option[value='<?php echo ($_GET['role']); ?>']").prop("selected", true);<?php endif; ?>
			},
			dataType:'json'});
	}
	
	<?php if($_GET['department'] and $_GET['department'] != 'all'): ?>$("#department option[value='<?php echo ($_GET['department']); ?>']").prop("selected", true); 
	changeRole();<?php endif; if($_GET['department'] == 'all'): ?>$("#role option[value='<?php echo ($_GET['role']); ?>']").prop("selected", true);<?php endif; ?>	$(function(){
		$("#show_report").click(function(){
			$(this).addClass('active').parent().siblings().find('a').removeClass('active');
			$("#report_content").removeClass('hidden').siblings().addClass('hidden');
		});
		$("#show_status").click(function(){
			$(this).addClass('active').parent().siblings().find('a').removeClass('active');
			$("#status_content").removeClass('hidden').siblings().addClass('hidden');
		});
		$("#show_source").click(function(){
			$(this).addClass('active').parent().siblings().find('a').removeClass('active');
			$("#source_content").removeClass('hidden').siblings().addClass('hidden');
		});
		$("#show_money").click(function(){
			$(this).addClass('active').parent().siblings().find('a').removeClass('active');
			$("#money_content").removeClass('hidden').siblings().addClass('hidden');
		});
		$("#show_day").click(function(){
			$(this).addClass('active').parent().siblings().find('a').removeClass('active');
			$("#day_content").removeClass('hidden').siblings().addClass('hidden');
		});
	});
</script></body></html>