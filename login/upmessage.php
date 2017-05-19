<!DOCTYPE html>
<html>
<head>
<head><title>Wild Animal控制台</title></head>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="keywords" content="Wild Nature Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<body>
<!-- header -->
	<div class="header">
	<div class="container">
		<div class="header-nav">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				
					<div class="logo">
						<a class="navbar-brand" href="index.html">返回登陆界面<span></span></a>
						<div class="leaf">
							<span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
						</div>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
					<li class="active"><a href="upnew.php">新闻板块</a></li>
					<li class="active"><a href="upmessage.php">留言板块</a></li>
					<li class="active"><a href="upmanager.php">管理员板块</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
	</div>
<!-- //header -->
<!-- typo -->
		
		<div class="alerts">
		<div align="center" >
		  <h3 class="ghj">留言板块</h3>
<?php
	error_reporting(0);
	$link=mysql_connect("localhost","root1","root1") or die("失败".mysql_error());
	mysql_select_db("animaldesign") or die("数据库选择失败");
header("Content-type: text/html; charset=utf-8");
	error_reporting(0);//不显示任何报错。

	$sqlleave="select * from LeaveMessage ";
	$resultleave=mysql_query("$sqlleave");//运行数据库语句
//===============================================================输出留言板数据库===========================
	echo "<table border='1' color='black'>";
	while($a=mysql_fetch_array($resultleave,MYSQL_ASSOC)){
		echo "<div class='alert alert-success' role='alert'>";
		echo "<tr>";
		echo "<td>$a[id]</td><td>$a[content]</td><td>$a[nickname]</td><td>$a[date]</td> ";
		echo "</tr>";
	}
	echo "</table>";
	mysql_free_result($result);
	mysql_close($link);
?>
	
         <td>删除留言板</td> 
   <table border='1'>
    <form name="formal1" method="post" action="messagedel.php">
    <td>
    留言板ID:</td><td><input type="text" name="id"> </td></tr>
    <tr>
	<tr>
   <td>
    <input type="submit" id="submit1" value="删除"></td><td></td></tr>
   </form>
</table>	
        <td>前台用户意见显示</td> 

<?php
	error_reporting(0);
	$link=mysql_connect("localhost","root1","root1") or die("失败".mysql_error());
	mysql_select_db("animaldesign") or die("数据库选择失败");
header("Content-type: text/html; charset=utf-8");
	error_reporting(0);//不显示任何报错。

	$sqlleave="select * from touristadvice ";
	$resultleave=mysql_query("$sqlleave");//运行数据库语句
//===============================================================输出留言板数据库===========================
	echo "<table border='1' color='black'>";
	while($a=mysql_fetch_array($resultleave,MYSQL_ASSOC)){
		echo "<div class='alert alert-success' role='alert'>";
		echo "<tr>";
		echo "<td>$a[id]</td><td>$a[Tourist_Name]</td><td>$a[Tourist_Email]</td><td>$a[Tourist_Tel]</td> <td>$a[Tourist_Advise]</td> ";
		echo "</tr>";
	}
	echo "</table>";
	mysql_free_result($result);
	mysql_close($link);
?>
<!-- //typo -->

<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>