<?php
    if(!empty($_GET["ac_id"])){
		$id=$_GET["ac_id"];
	    $msg=$jumpUrl="";
	$conn = new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
	if($conn->connect_error){
		die($conn->connect_error);
	}
	$sql = "DELETE FROM wenzhang where ac_id='$id'";
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