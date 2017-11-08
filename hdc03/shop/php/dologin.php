<?php
	$conn = new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
	if($conn->connect_error){
		die($conn->connect_error);
	}
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$username = $_POST["username"];
		$dengji = $_POST["dengji"];
		$shenqingyuming = $_POST["shenqingyuming"];
		$beiyongyuming = $_POST["beiyongyuming"];
		$code_input = $_POST["code_input"];
		
		if(!empty($_POST["userName"])){
			$user = test_input($_POST["username"]);
			if(!preg_match("/^[a-zA-Z]\w{5,11}$/",$username)){
				echo "<script type='text/javascript'>alert('格式不正确');</script>";
				exit;	
			}
		}else{
			echo "<script type='text/javascript'>alert('用户名不能为空');</script>";
			exit;	
		}
		function test_input($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;	
		}
		echo "<script type='text/javascript'>alert('注册成功');</script>";
		$sql = "insert into avia_shenqing(username,dengji,shenqingyuming,beiyongyuming)values('$username','$dengji','$email','$shenqingyuming','$beiyongyuming')";
		if($conn->query($sql)){
			echo "<script type='text/javascript'>alert('注册成功');</script>";
			exit;	
		}
		
		
		
	}