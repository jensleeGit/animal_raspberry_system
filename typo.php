<!DOCTYPE html>
<html>
<head>
<title>Wild Animal</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="keywords" content="Wild Nature Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
 <script type="text/javascript" src="http://cdn.hcharts.cn/jquery/jquery-1.8.3.min.js"></script> 
<script type="text/javascript" src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
 <script type="text/javascript" src="http://cdn.hcharts.cn/highcharts/exporting.js"></script>
<?php
	error_reporting(0);
	$link=mysql_connect("localhost","root1","root1") or die("失败".mysql_error());
	mysql_select_db("animaldesign") or die("数据库选择失败");
	$sql="select * from InsideSite order by ISid desc LIMIT 0,12";
	mysql_query("set names utf8");
	$result=mysql_query($sql) or die("查询失败");
	while($a=mysql_fetch_array($result,MYSQL_ASSOC)){
		$a1[] = $a[Lum];
		$a2[] = $a[Hum];
		$a3[] = $a[Tem];
		}

//=======================================================================js部分代码============================================================
 echo "<script>
 $(function () {
    $('#container').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: '最新温湿度变化曲线'
        },
        subtitle: {
            text: '来源: Wild Animal探测器'
        },
        xAxis: {
            categories: ['0:00', '2:00', '4:00', '6:00', '8:00', '10:00', '12:00', '14:00', '16:00', '18:00', '20:00', '22:00']
        },
        yAxis: {
            title: {
                text: '温度 (буC)湿度(%)光强(lux)'
            }
        },
        tooltip: {
            enabled: false,
            formatter: function() {
                return '<b>'+ this.series.name +'</b><br/>'+this.x +': '+ this.y +'буC';
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: '亮度',
            data: [$a1[0], $a1[1], $a1[2], $a1[3], $a1[4], $a1[5], $a1[6], $a1[7], $a1[8], $a1[9], $a1[10], $a1[11]]
			//data: [$a1, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }, {
            name: '湿度',
			data: [$a2[0], $a2[1], $a2[2], $a2[3], $a2[4], $a2[5], $a2[6], $a2[7], $a2[8], $a2[9], $a2[10], $a2[11]]
            //data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }, {
            name: '温度',
			data: [$a3[0], $a3[1], $a3[2], $a3[3], $a3[4], $a3[5], $a3[6], $a3[7], $a3[8], $a3[9], $a3[10], $a3[11]]
            //data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }]
    });
});				</script> ";
//=======================================================================js部分代码============================================================
	mysql_free_result($result);
	mysql_close($link);
?>
<!-- start-smoth-scrolling -->
<link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	<div class="header">
	<div class="container">
		<div class="header-nav">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<a class="navbar-brand" href="index.html">Wild <span>Nature</span></a>
						<div class="leaf">
							<span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
						</div>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
					<li><a href="index.html">主页</a></li>
					<li><a href="about.html">关于</a></li>
					<li><a href="services.html">服务</a></li>
					<li class="active"><a href="typo.php">介绍</a></li>
					<li><a href="gallery.html">动物集锦</a></li>
					<li><a href="contact.html">联系我们</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
	</div>
<!-- //header -->
<!-- typo -->
	<div class="typo">
	<div class="container">
		<div class="headdings">
			<div id="container" style="min-width:700px;height:400px"></div>
			
			
		</div>

		
		<div class="alerts">
		  <h3 class="ghj">最新要闻</h3>
		  <?php
	error_reporting(0);//不显示任何报错。
	$link=mysql_connect("localhost","root1","root1") or die("失败".mysql_error());
	mysql_select_db("animaldesign") or die("数据库选择失败");//选择数据库
	$sql="select * from news  order by id desc limit 0, 4";
	mysql_query("set names utf8");//编码方式
	$result=mysql_query($sql) or die("查询失败");//运行数据库语句
		?>
	
 <?php

	while($a=mysql_fetch_array($result,MYSQL_ASSOC)){
		//echo $a;
		echo "<div class='alert alert-success' role='alert'>";
			echo "
			<font color ='#000066'><strong>$a[newsname]:</strong></font>$a[news]
			";
			echo "</div>";
		}
	
	mysql_free_result($result);
	mysql_close($link);
?>



		<div class="distracted">
		  <h3 class="ghj">留言墙</h3>
					<?php
					header("Content-type: text/html; charset=utf-8");
					error_reporting(0);//不显示任何报错。
					$link=mysql_connect("localhost","root1","root1") or die("失败".mysql_error());
					mysql_select_db("animaldesign") or die("数据库选择失败");//选择数据库
					mysql_query("set names utf8");//编码方式
					$sql="select * from LeaveMessage order by date desc limit 0,3";
					$result=mysql_query("$sql");//运行数据库语句
					
					while($a=mysql_fetch_array($result,MYSQL_ASSOC)){
					echo "<div class='alert alert-success' role='alert'>";
					echo "
					<font color ='#000088'><strong>$a[content]</strong></font>&nbsp;&nbsp;&nbsp;&nbsp;$a[nickname]&nbsp;&nbsp;&nbsp;&nbsp;$a[date]";
					echo "</div>";
					}
					
					mysql_free_result($result);
					mysql_close($link);
					?>
			  
		</div>
	
		<div align="center" >
		<form name="formal" method="post" action="LeaveReceive.php">
		<td>
		昵称:</td><td><input size="35"   style="width:500px; height:30px;"  type="text" name="nickname"> </td>
		<td><br/><br/>
		留言:</td><td><input size="35"   style="width:500px; height:150px;"  type="text" type="textarea" name="content"> </td></tr><br/><br/>
		<input type="submit" id="submit" value="提交"></td><td></td></tr>
		</form>
		
		</div>
	</div>
	</div>
<!-- //typo -->
<!-- footer -->
	<div class="footer">
		<div class="footer-grids">
		  <div class="container">
			  <div class="col-md-3 footer-grid">
					<h4>服务</h4>
					<ul>
						<li><a href="#">退还费用</a></li>
						<li><a href="#">景区急救</a></li>
						<li><a href="#">景区志愿服务</a></li>
						<li><a href="#">景区必需品</a></li>
						<li><a href="#">自动呼叫</a></li>
					</ul>
			  </div>
			 <div class="col-md-3 footer-grid">
					<h4>景区信息</h4>
					<ul>
						<li><a href="#">景区信息</a></li>
						<li><a href="#">景区</a></li>
						<li><a href="#">景区建筑</a></li>
						<li><a href="about.html">我们的员工</a></li>
				  </ul>
			 </div>
			 <div class="col-md-3 footer-grid">
					<h4>更多消息</h4>
					<ul>
						<li><a href="about.html">关于我们</a></li>
						<li><a href="contact.html">景区政策</a></li>
						<li><a href="contact.html">政策条目</a></li>
						<li><a href="contact.html">景区地图</a></li>
					</ul>
			 </div>
			 <div class="col-md-3 footer-grid contact-grid">
					<h4>联系我们</h4>
					<ul>
						<li><span class="c-icon"> </span>服务提供厂商</li>
						<li><span class="c-icon1"> </span><a href="mailto:info@example.com">jingqutuandui1@zl.com</a></li>
						<li><span class="c-icon2"> </span>景区团队</li>
					</ul>
					<ul class="social-icons">
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="thumb"> </a></li>
					</ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		</div>
	</div>
	<div class="copy">
		 <p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>