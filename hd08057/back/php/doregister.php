<?php
	
	$conn = new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
	if($conn->connect_error){
		die($conn->connect_error);
	}
	$msg = "";
	$jumpUrl = "../register.php";
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$user = $_POST["avia_username"];
		$pass = $_POST["avia_dengji"];
		$email = $_POST["avia_shenqingyuming"];
		$phone = $_POST["avia_beiyongyuming"];
		$string ="";
		for($i=0;$i<count($hobby);$i++){
			$string .= $hobby[$i].",";
		}
		if(!empty($_POST["avia_username"])){
			$user = test_input($_POST["avia_username"]);
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
		if(empty($_POST["avia_dengji"])){
			$msg = "VIP等级不能为空";
			include "tips.php";
			exit;
		}
		if(empty($_POST["avia_shenqingyuming"])){
			$msg = "申请专属域名不能为空";
			include "tips.php";
			exit;
		}
		if(empty($_POST["avia_beiyongyuming"])){
			$msg = "备用专属域名不能为空";
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
	$msg = "注册成功";
	$sql = "insert into avia_shenqing(name,password,email,phone,zone,sex,hobby)values('$user','$pass','$email','$phone','$zone','$sex','$string')";
	if($conn->query($sql)){
		echo "哈哈，成功";
		$msg = "哈哈，成功";
		$jumpUrl = "../login.php";
		include "tips.php";
		exit;	
	}
	
?>