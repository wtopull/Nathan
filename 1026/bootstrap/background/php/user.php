<?php
	$conn = new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
//	if($conn->connect_error){
//		die("OK");
//	}else{
//		echo "no";
//	}
	$sql = "select*from user_info where info_user='wtopull' and info_password='kgdjvkdx' or info_user='abcd' and info_password='123456'";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			$stri = $row["info_user"];
		}
	}
?>