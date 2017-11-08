<?php
	
	$conn = new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
	if($conn->connect_error){
		die($conn->connect_error);
	}
	$msg = "";
	$jumpUrl = "../register.php";
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$user = $_POST["userName"];
		$pass = $_POST["pass"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$zone = $_POST["zone"];
		$sex = $_POST["inlineRadioOptions"];
		$hobby = $_POST["hobby"];
		$string ="";
		for($i=0;$i<count($hobby);$i++){
			$string .= $hobby[$i].",";
		}
		if(!empty($_POST["userName"])){
			$user = test_input($_POST["userName"]);
			if(!preg_match("/^[a-zA-Z]\w{5,11}$/",$user)){
				$msg = "用户名格式不正确";
				include "tips.php";
				exit;	
			}
		}else{
			$msg = "用户名不能为空";
			include "tips.php";
			exit;
		}
		if(!empty($_POST["pass"])){
			$pass = test_input($_POST["pass"]);
			if(!preg_match("/^[a-zA-Z0-9]\w{5,11}$/",$pass)){
				$msg = "密码格式不正确";
				include "tips.php";
				$jumpUrl = "register.php";
				exit;
			}
		}else{
			$msg = "密码不能为空";
			include "tips.php";
			exit;
		}
	}else{
		$msg = "提交的方式不正确";
		include "tips.php";
		exit;	
	}
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;	
	}
	$msg = "注册成功";
	$sql = "insert into notspad(name,password,email,phone,zone,sex,hobby)values('$user','$pass','$email','$phone','$zone','$sex','$string')";
	if($conn->query($sql)){
		echo "哈哈，成功";
		$msg = "哈哈，成功";
		$jumpUrl = "../login.php";
		include "tips.php";
		exit;	
	}
	
?>