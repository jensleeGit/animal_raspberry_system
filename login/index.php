<!DOCTYPE HTML>
<html>
<head>
<title>Wild Animal后台系统</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="keywords" content="Wild Animal后台系统" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Baumans' rel='stylesheet' type='text/css'>
<!-- start-->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
<!--header start here-->
 <div class="header">
	<div class="container">
		 <div class="header-main">
				<div class="logo">
					<h1><a href="index.html">Wild Animal后台系统</a></h1>
				</div>
				<div class="top-nav">
				<hr>
				<nav class="cl-effect-20">
					   <span class="menu"> <img src="images/icon.png" alt=""/></span>
					<ul class="res">
					    <li><a href="index.php">管理首页</a></li> <!--<li><a href="index.html" class="active">首页</a></li>-->
						<li><a href="message.php">游客留言</a></li> 
						<li><a href="mirror.php">室内监控</a></li>
						<li><a href="news.php">新闻版块</a></li>
				   </ul>
				</nav>
					<!-- script-for-menu -->
						 <script>
						   $( "span.menu" ).click(function() {
							 $( "ul.res" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>
		        <!-- /script-for-menu -->
				</div>
		 <div class="clearfix"> </div>
	  </div>
	</div>
 </div>
</div>
<!--header end here-->
<!--typo start here-->
<?php
	error_reporting(0);
	$link=mysql_connect("localhost","root1","root1") or die("失败".mysql_error());
	mysql_select_db("animaldesign") or die("数据库选择失败");

//===============================================================查询news数据库===========================
	$sqlnews="select * from manager";
	mysql_query("set names utf8");//编码方式
	$resultnews=mysql_query($sqlnews) or die("查询失败");//运行数据库语句
//===============================================================输出news数据库===========================
	echo "<div class=\"typrography\">";
		echo "<div class=\"container\">";
		
			echo "<div class=\"page-header\">";
				echo "<h1>管理员</h1>";
			echo "</div>";
			while($a=mysql_fetch_array($resultnews,MYSQL_ASSOC)){
				echo "<div class=\"alert alert-info\" role=\"alert\">";
					echo "<table border='1'><tr><td>&nbsp&nbsp$a[id]&nbsp&nbsp</td><td>&nbsp&nbsp$a[name]&nbsp&nbsp</td></tr></table>";
				echo "</div>";				
			}
			
		echo "</div>";
	echo "</div>";
//=============================================================
?>


	<div class="typrography">
		<div class="container">
			<div class="page-header">
				<h1>添加管理员</h1>
			</div>
			<div class="alert alert-info" role="alert">
			<table border='1'>
				<form name="formal" method="post" action="managerReceiver.php">
					<tr>
						<td>账号:</td>
						<td><input type="text" name="name"> </td>
					</tr>
					<tr>
						<td>密码:</td>
						<td><input type="text" name="psd"> </td>
					</tr>
					<tr>
						<td><input type="submit" id="submit" value="添加"></td>
					</tr>
			
				</form>
			</div>
			</table>
		</div>
	</div>
	

	<div class="typrography">
		<div class="container">
			<div class="page-header">
				<h1>删除管理员</h1>
			</div>
			<div class="alert alert-info" role="alert">
			<table border='1'>
				<form name="formal" method="post" action="managerdel.php">
					<tr>
						<td>ID号:</td>
						<td><input type="text" name="id"> </td>
					</tr>
					<!--<tr>
						<td>密码:</td>
						<td><input type="text" name="psd"> </td>
					</tr>-->
					<tr>
						<td><input type="submit" id="submit" value="删除"></td>
					</tr>
			</div>
				</form>
			</table>
			</div>
		</div>
	</div>
	
<!--typo end here-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="copy-right">
			   <p>Copyright &copy; 2017.TongZhang All rights reserved.<a target="_blank" href="###">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
		</div>
	</div>
</div>
<!--footer end here-->
</body>
</html>