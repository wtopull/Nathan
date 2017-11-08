<?php
	header('content-type:text/html;charset=utf-8;');
	$test1 = $_POST['test1'];
	$test2 = $_POST['test2'];

//	if($_SERVER['REQUEST_METHOD']=="POST"){
//		if(isset($_POST['but1']) && $_POST['but1'] == "butTest1"){
//			if(empty($_POST["test1"])){
//				echo '<script type="text/javascript">alert("1会员账号不能为空"); history.back();</script>';
//			}else{
//				echo "test1不为空";
//			}
//		}
//		if(isset($_POST["but2"]) && $_POST["but2"] == "butTest2"){
//			
//			if(!empty($_POST["test2"])){
//				echo "test2不为空";
//			}else{
//				echo '<script type="text/javascript">alert("2会员账号不能为空"); history.back();</script>';
//			}
//		}
//	}
	
	
	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($_POST['but1']) && $_POST['but1'] == "butTest1"){
			if(empty($_POST["test1"])){
				echo '<script type="text/javascript">alert("1会员账号不能为空"); history.back();</script>';
			}else{
				echo "test1不为空";
			}
		}
		if(isset($_POST["but2"]) && $_POST["but2"] == "butTest2"){
			
			if(!empty($_POST["test2"])){
				echo "test2不为空";
			}else{
				echo '<script type="text/javascript">alert("2会员账号不能为空"); history.back();</script>';
			}
		}
	}
?>