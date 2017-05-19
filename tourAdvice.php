<?php
	error_reporting(0);
	$link=mysql_connect("localhost","root1","root1") or die("数据库连接失败");//连接服务器和数据库
	mysql_select_db("animaldesign",$link) or die("表选择失败");//选择具体数据库
	mysql_query("set names utf8");//声明传入的值编码，中文编码
	$sql="insert into touristadvice(Tourist_Name,Tourist_Email,Tourist_Tel,Tourist_Advise)values('$_POST[tourname]','$_POST[tourEmail]','$_POST[tourtel]','$_POST[touradvise]')";//sql语句
	//$sql="select * from InsideSite";
	$query=mysql_query("$sql");//将语句插入到数据库中，返回布尔型数据，true,false.
	
	if($query){
		echo "<script>alert('信息发送成功 ');</script>";
	}
	else{
		echo "<script>alert('b');</script>";
	}

?>
<?php
$url="http://localhost/animal/contact.html"; ?>
<html>
<head>
<meta http-equiv="refresh" content="2;
url=<?php echo $url; ?>">
</head>
</html>
