<?php
    if(!empty($_GET["id"])){
		$id=$_GET["id"];
	    $msg=$jumpUrl="";
	$conn = new mysqli("23.252.160.209:49670","yuancheng","Yi_yclink%9494","hot_centerdb");
//	$conn = new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
	if($conn->connect_error){
		die($conn->connect_error);
	}
	$sql = "DELETE FROM avia_title where id='$id'";
  	$conn->query($sql);
	if($conn->query($sql)){
		$msg="删除成功";
		$jumpUrl="../mess.php";
		include "tips.php";
	}else{
		$msg="删除失败";
		$jumpUrl="../mess.php";
		include "tips.php";
	}
	}
?>