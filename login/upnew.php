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
		  <h3 class="ghj">新闻板块</h3>
<?php
	error_reporting(0);
	$link=mysql_connect("localhost","root1","root1") or die("失败".mysql_error());
	mysql_select_db("animaldesign") or die("数据库选择失败");

//===============================================================查询news数据库===========================
	$sqlnews="select * from news  order by id";
	mysql_query("set names utf8");//编码方式
	$resultnews=mysql_query($sqlnews) or die("查询失败");//运行数据库语句
//===============================================================输出news数据库===========================
echo "<table border='1' color='black'>";
	while($a=mysql_fetch_array($resultnews,MYSQL_ASSOC)){
		//echo $a;
		echo "<div class='alert alert-success' role='alert'>";
			echo "<tr>";
			echo "<td>$a[id]</td><td>$a[newsname]</td><td>$a[news]</td>";
		echo "</tr>";				
		}
		echo "</div>";
		echo "</table>";

		mysql_free_result($result);
	mysql_close($link);
?>
	
	  <td>删除新闻</td> 
   <table border='1'>
    <form name="formal1" method="post" action="newdel.php">
    <td>
    新闻ID:</td><td><input type="text" name="id"> </td></tr>
    <tr>
   <tr>
   <td>
    <input type="submit" id="submit1" value="删除"></td><td></td></tr>
   </form>
   </table>
   <td>添加新闻</td> 
<form name="formal" method="post" action="newsReceive.php">
		<td>
		新闻题目:</td><td><input size="35"   style="width:500px; height:30px;"  type="text" name="newsname"> </td>
		<td><br/><br/>
	    新闻内容:</td><td><input size="35"   style="width:500px; height:150px;"  type="text" type="textarea" name="news"> </td></tr><br/><br/>
		<input type="submit" id="submit" value="发布"></td><td></td></tr>
</form>
		
		</div>
	</div>
	</div>
<!-- //typo -->

<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>