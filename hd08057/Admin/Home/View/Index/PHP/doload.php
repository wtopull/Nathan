<?php
	$conn = new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
	if($conn->connect_error){
		die("OK");
	}
	session_start();
	$msg = "";
	$jumpUrl = "../index.html";
	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(!empty($_POST["user"])){
			$user = test_input($_POST["user"]);
			$pass = test_input($_POST["pass"]);
			$_SESSION["user"]=$user;
			$_SESSION["pass"]=$pass;
			$sql = "SELECT*FROM user_info where info_user='$user' and info_password='$pass'";
			$result = $conn->query($sql);
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
					$msg = "Ko";
					$jumpUrl = "../mess.html";
					include "tips.php";
					exit;
				}
			}else{
				$msg = "oN";
				$jumpUrl = "../index.html";
				include "tips.php";
				exit;
			}
			$msg = "登录失败";
			exit;
			if(!empty($_POST["iscookie"])){
				setcookie("c_user",$user,time()+864000,"/");
			}
		}else{
			$msg = "用户名不能为空";
			include "tips.php";
			exit;	
		}
	}
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;	
	}
?>
