<?php
	header('content-type:text/html;charset=utf-8;');
	$conn = new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
	if($conn->connect_error){
		die("OK");
	}
	session_start();
	
	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(!empty($_POST["avia_username"])){
			$user = test_input($_POST["avia_username"]);
			$avia_dengji = test_input($_POST["avia_dengji"]);
			$avia_shenqingyuming = test_input($_POST["avia_shenqingyuming"]);
			$avia_beiyongyuming = test_input($_POST["avia_beiyongyuming"]);
			$avia_yzm = test_input($_POST["avia_yzm"]);
			$avia_betting = test_input($_POST["avia_betting"]);
			$avia_amount = test_input($_POST["avia_amount"]);
			$avia_strn = test_input($_POST["avia_strn"]);
			
			$_SESSION["user"]=$user;
//			$sql = "SELECT*FROM avia_userinfo where info_name='$user'";
			$sql = "SELECT*FROM avia_userinfo";
			$result = $conn->query($sql);
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
					echo $user;
					exit;
				}
			}else{
				echo "没有任何信息";
				exit;
			}
			if(!empty($_POST["iscookie"])){
				setcookie("c_user",$user,time()+864000,"/");
			}
		}
	}
	
	
	
	
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;	
	}
?>