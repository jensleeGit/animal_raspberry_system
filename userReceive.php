<?php
    error_reporting(0);
	$link=mysql_connect("localhost","root","root") or die("数据库连接失败");//连接服务器和数据库
	mysql_select_db("animaldesign",$link) or die("表选择失败");//选择具体数据库
	mysql_query("set names utf8");//声明传入的值编码，中文编码
		mysql_query("SET NAMES 'GB2312'");
	$sql="insert into news(newsname,news) values('$_POST[newsname]','$_POST[news]')";//sql语句
	//$sql="select * from news";
	$query=mysql_query("$sql");//将语句插入到数据库中，返回布尔型数据，true,false.
	
	if($query){
		echo "<script>alert('留言成功');</script>";
	}
	else{
		echo "<script>alert('留言失败');</script>";
	}
?>