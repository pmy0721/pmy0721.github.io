<?php
	header("content-type:text/html;charset=utf-8");
	//$con = mysql_connect("IP","name","password");
	$conn=mysqli_connect("wzqvtifulbts.mysql.sae.sina.com.cn","pmy_0721","pmy19980528","pmy_0721");

	if (!$conn)
  	{
  	die('Could not connect: ' . mysqli_error($conn));
  	}
	//mysql_select_db("my_db", $con);

	//设置客户端和连接字符集
	mysqli_query($conn,"set names utf8");

	$sql="INSERT INTO contactme_db (name, message) VALUES('$_POST[name]','$_POST[message]')";
	//if (!mysql_query($sql,$con))
	if (!mysqli_query($conn,$sql))
  	{
  	die('Error: ' . mysqli_error($conn));
  	}
	//echo "您的学校是：".$_POST["school"]."<br/>";
	//echo "您的专业是：".$_POST["major"]."<br/>";
	//echo "您的姓名是：".$_POST["name"]."<br/>";
	mysqli_close($conn);
?>
