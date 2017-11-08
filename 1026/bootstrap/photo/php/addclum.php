<?php
	$msg = $jumpUrl= "";
	if(!empty($_POST["addclum"])){
		$clum = $_POST["addclum"];
		if(!is_dir("../photo/".$clum)){
			
			mkdir(iconv('utf-8','gbk',"../photo/".$clum));
			
//			mkdir("../photo/".$clum);
			$msg = "添加栏目成功";
			$jumpUrl = "../index.php";
			include "tips.php";
			exit;
		}else{
			$msg = "栏目已存在，请换个名字吧！";
			$jumpUrl = "../uploads.php";
			include "tips.php";
			exit;		
		}	
	}else{
		$msg = "请输入要添加的栏目";
		$jumpUrl = "../uploads.php";
		include "tips.php";
		exit;	
	}
?>