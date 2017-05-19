<?php
	error_reporting(0);//不显示任何报错。
	$link=mysql_connect("localhost","root1","root1") or die("失败".mysql_error());
	mysql_select_db("animaldesign") or die("数据库选择失败");//选择数据库
	$sql="select  * from news ";
	mysql_query("set names utf8");//编码方式
	$result=mysql_query($sql) or die("查询失败");//运行数据库语句
		if($query){
		echo "<script>alert('留言成功');</script>";
	}
	else{
		echo "<script>alert('留言失败');</script>";
	}


	echo "<table border='10' color='black'>";
	while($a=mysql_fetch_array($result,MYSQL_ASSOC)){
		//echo $a;
		echo "<tr>";
			echo "<td>$a[newsname]</td><td>$a[news]</td>";
		echo "</tr>";				
		}
	echo "</table>";
	mysql_free_result($result);
	mysql_close($link);
?>