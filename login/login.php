<?php
    error_reporting(0);
	$link=mysql_connect("localhost","root1","root1") or die("数据库连接失败");//连接服务器和数据库
	mysql_select_db("animaldesign",$link) or die("表选择失败");//选择具体数据库
	mysql_query("set names utf8");//声明传入的值编码，中文编码
	
	$sql="SELECT id FROM manager WHERE (name='$_POST[username]') AND (psd='$_POST[passwd]') limit 1";//sql语句
	$query=mysql_query("$sql");//返回布尔型数据，true,false.
	//$a=mysql_fetch_row($query,MYSQL_ASSOC);
	echo "$a=mysql_fetch_row($query,MYSQL_ASSOC)";
	if($a=mysql_fetch_row($query,MYSQL_ASSOC))
	{
		Header('Location: index.php');
	}
	else{
		//echo "<script>alert('登录失败，账号或密码错误请重新登录');</script>";
	    Header('Location:	index.html ');
	}
?>
