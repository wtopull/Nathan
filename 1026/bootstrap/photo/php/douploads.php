<?php
	$msg = $jumpUrl= "";
	$clunm = $_POST["clunm"];
	if($clunm == "请选择目录"){
		$msg = "请选择目录";
		$jumpUrl = "../uploads.php";
		include "tips.php";
		exit;	
	}
	if($_FILES["upfile"]["name"]){
		if($_FILES["upfile"]["error"]>0){
			$msg = "上传文件出错";
			$jumpUrl = "../uploads.php";
			include "tips.php";
			exit;
		}else{
		$filename = $_FILES["upfile"]["name"];
		$filesize = $_FILES["upfile"]["size"];
		$filetype = $_FILES["upfile"]["type"];
		$filetem = $_FILES["upfile"]["tmp_name"];
		$max_img = 1024*1024*1024*1024;
		if($filesize>$max_img){
			$msg = "你上传的图片太大了，请换一张";
			$jumpUrl = "../uploads.php";
			include "tips.php";
			exit;
		}
		$arrimg = array(
			"image/jpg",
			"image/jpeg",
			"image/png",
			"image/gif",
			"image/bmp"
		);
		if(!in_array($filetype,$arrimg)){
			$msg = "你上传的不是图片格式";
			$jumpUrl = "../uploads.php";
			include "tips.php";
			exit;
		}
		$imginfo = explode(".",$filename);
		$imgtype = array_pop($imginfo);
		$imgname = time().rand(0,10).".".$imgtype;
		//防中文名乱码
		$files1 = iconv('GB2312','UTF-8',$filetem);
		if(move_uploaded_file($files1,"../photo/".$clunm."/".$imgname)){
			$msg = "图片上传成功";
			$jumpUrl = "../index.php";
			include "tips.php";
			exit;		
		};
		}
	}else{
		$msg = "请选择上传文件";
		$jumpUrl = "../uploads.php";
		include "tips.php";
		exit;	
	}
?>