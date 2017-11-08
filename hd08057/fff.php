<?php
	header('content-type:text/html;charset=utf-8;');
	
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$user1 = $_POST["name_a1"];
		$user2 = $_POST["name_a2"];
		$user3 = $_POST["name_a3"];
		$user4 = $_POST["name_a4"];
		if(empty($_POST["name_a1"])){
			echo '<script type="text/javascript" charset="UTF-8">alert("会员账号不能为空"); history.back();</script>';
			exit;
		}else{
			echo $user1;
		}
		if(empty($_POST["name_a2"])){
			echo '<script type="text/javascript" charset="UTF-8">alert("会员账号不能为空"); history.back();</script>';
			exit;
		}else{
			echo $user2;
		}
		if(empty($_POST["name_a3"])){
			echo '<script type="text/javascript" charset="UTF-8">alert("会员账号不能为空"); history.back();</script>';
		}else{
			echo $user3;
		}
	}
?>
			

