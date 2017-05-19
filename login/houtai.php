<html>
<head><title>Wild Animal控制台</title></head>
</html>
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
echo "</table>";
//echo "<button type='button'>Click Me!<tton>"

//===============================================================查询留言板数据库===========================
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
<html>
<head></head>
<style type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
body{text-align:center}
</style>
<td>添加新闻</td> 
<body>
<table border='1'>
<tr>
<form name="formal" method="post" action="newsReceive.php">
<td>
newstitle:</td><td><input type="textarea" name="newsname"> </td></tr>
<tr>
<td>
news:</td><td><input type="textarea" name="news"> </td></tr>
<tr>
<td>
<input type="submit" id="submit" value="添加"></td><td></td></tr>
</form>
</table>
<td>添加管理员</td> ";
<table border='1'>
<form name="formal" method="post" action="managerReceiver.php">
<td>
账号:</td><td><input type="text" name="name"> </td></tr>
<tr>
<td>
密码:</td><td><input type="text" name="psd"> </td></tr>
<tr>
<td>
<input type="submit" id="submit" value="添加"></td><td></td></tr>
</form>
</table>

</body>
</html>