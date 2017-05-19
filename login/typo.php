<!DOCTYPE html>
<html>
<head>
<title>Wild Animal</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wild Nature Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
 <script type="text/javascript" src="http://cdn.hcharts.cn/jquery/jquery-1.8.3.min.js"></script> 
<script type="text/javascript" src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
 <script type="text/javascript" src="http://cdn.hcharts.cn/highcharts/exporting.js"></script>
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
		//echo $a1;
		//echo $a2[1];

	mysql_free_result($result);
	mysql_close($link);
?>

	
<body>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="services.html">Services</a></li>
					<li class="active"><a href="typo.php">Typo</a></li>
					<li><a href="gallery.html">Photo Gallery</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
	</div>
<!-- //header -->
<!-- typo -->
	
		<div class="alerts">
		  <h3 class="ghj">最新要闻</h3>
		  <?php
	error_reporting(0);//不显示任何报错。
	$link=mysql_connect("localhost","root1","root1") or die("失败".mysql_error());
	mysql_select_db("animaldesign") or die("数据库选择失败");//选择数据库
	$sql="select * from news  order by id";
	mysql_query("set names utf8");//编码方式
	$result=mysql_query($sql) or die("查询失败");//运行数据库语句
		?>
	
 <?php
echo "<table border='1' color='black'>";
	while($a=mysql_fetch_array($result,MYSQL_ASSOC)){
		//echo $a;
		echo "<div class='alert alert-success' role='alert'>";
			echo "<tr>";
			echo "<td>$a[newsname]</td><td>$a[news]</td>";
		echo "</tr>";				
		}
		echo "</table>";
	mysql_free_result($result);
	mysql_close($link);
?>



	
<div class="distracted">
		  <h3 class="ghj">留言墙</h3>
					<?php
					header("Content-type: text/html; charset=utf-8");
					error_reporting(0);//不显示任何报错。
					$link=mysql_connect("localhost","root1","root1") or die("失败".mysql_error());
					mysql_select_db("animaldesign") or die("数据库选择失败");//选择数据库
					mysql_query("set names utf8");//编码方式
					$sql="select * from LeaveMessage order by date desc limit 0,3";
					$result=mysql_query("$sql");//运行数据库语句
					
					while($a=mysql_fetch_array($result,MYSQL_ASSOC)){
					echo "<div class='alert alert-success' role='alert'>";
					echo "
					<font color ='#000088'><strong>$a[content]</strong></font>&nbsp;&nbsp;&nbsp;&nbsp;$a[nickname]&nbsp;&nbsp;&nbsp;&nbsp;$a[date]";
					echo "</div>";
					}
					
					mysql_free_result($result);
					mysql_close($link);
					?>
			  
		</div>
		<div align="center" >
		<form name="formal" method="post" action="LeaveReceive.php">
		<td>
		昵称:</td><td><input size="35"   style="width:500px; height:30px;"  type="text" name="nickname"> </td>
		<td><br/><br/>
		留言:</td><td><input size="35"   style="width:500px; height:150px;"  type="text" type="textarea" name="content"> </td></tr><br/><br/>
		<input type="submit" id="submit" value="提交"></td><td></td></tr>
		</form>
		</div>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>