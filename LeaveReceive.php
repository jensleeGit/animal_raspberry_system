<?php
	error_reporting(0);
	$link=mysql_connect("localhost","root1","root1") or die("数据库连接失败");//连接服务器和数据库
	mysql_select_db("animaldesign",$link) or die("表选择失败");//选择具体数据库
	mysql_query("set names gb2312");
	mysql_query("set names utf8");//声明传入的值编码，中文编码
	$date=date("Y-m-d H:i:s");
    $sql="insert into LeaveMessage(`nickname`,`content`,`date`)values('$_POST[nickname]','$_POST[content]',now())";
	//$sql="select * from LeaveMessage";//leave";
	$query=mysql_query("$sql");//将语句插入到数据库中，返回布尔型数据，true,false.
	
	if($query){
		echo"<script>alert('留言成功');history.go(-1);</script>";  
		
	}
	else{
		echo"<script>alert('留言失败');history.go(-1);</script>";  
	}
	

?>