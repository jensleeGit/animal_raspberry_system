<?php
    error_reporting(0);
	$link=mysql_connect("localhost","root1","root1") or die("失败".mysql_error());
	mysql_select_db("animaldesign",$link) or die("表选择失败");//选择具体数据库
	mysql_query("set names utf8");//声明传入的值编码，中文编码
	//mysql_query("SET NAMES 'GB2312'");
    $sql="insert into manager(`name`,`psd`)values('$_POST[name]','$_POST[psd]')";
	
	$query=mysql_query("$sql");//将语句插入到数据库中，返回布尔型数据，true,false.
	
	if($query){
		echo "<script>alert('成功');</script>";
		Header('Location: index.php');
		
	}
	else{
		echo "<script>alert('失败');</script>";
		Header('Location: index.php');
	}
?>