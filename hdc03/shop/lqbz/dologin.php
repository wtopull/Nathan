<?php
	$conn = new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
	if($conn->connect_error){
		die("OK");
	}
	
	session_start();
	$msg = "";
	$jumpUrl = "../login.php";
	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(!empty($_POST["user"])){
			$user = test_input($_POST["user"]);
			$pass = test_input($_POST["password"]);
			$_SESSION["user"]=$user;
			$_SESSION["pass"]=$pass;
//			$fil = fopen("info.txt","a+");
//			while($string=fgets($fil)){
//				$arrInfo = explode("-",test_input($string));
//				if($user==$arrInfo[0]){
//					if($pass==$arrInfo[1]){
//						$msg = "登录成功";
//						include "tips.php";
//						exit;
//					}else{
//						$msg = "密码错误";
//						include "tips.php";
//						exit;
//					}
//				}
//			}
			$sql = "SELECT*FROM notspad where name='$user' and password='$pass'";
			$result = $conn->query($sql);
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
					$msg = "哈哈，成功";
					$jumpUrl = "../index.php";
					include "tips.php";
					exit;
				}
//				echo "OK";
				
			}else{
				echo "NO";
				$msg = "哈哈，失败";
				$jumpUrl = "../login.php";
				include "tips.php";
				exit;
			}
			$msg = "登录失败";
			include "tips.php";
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
