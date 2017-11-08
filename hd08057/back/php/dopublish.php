<?php
	$msg = "";
	if($_FILES["upfile"]["name"]){
		if($_FILES["upfile"]["error"]>0){
			echo $_FILES["upfile"]["error"];
		}else{
			$imgSize = 1073741824;
			$filename = $_FILES["upfile"]["name"];
			$filetype = $_FILES["upfile"]["type"];
			$filesize = $_FILES["upfile"]["size"];
			$filetmp = $_FILES["upfile"]["tmp_name"];
			$arrImg = array("image/jpg","image/jpeg","image/png","image/gif");
			if(!in_array($filetype,$arrImg)){
				echo "你上传的不是图片格式";
				exit;
			}
			if($filesize>$imgSize){
				echo "你的图片太大";
			}
			$arr = explode(".",$filename);
			$imgType = array_pop($arr);
			$imgName = time().rand(0,10).".".$imgType;
			$upfil="uploads/".$imgName;
			if(move_uploaded_file($filetmp,"../uploads/".$imgName)){
				echo "上传成功！";	
			};
		}	
	}else{
		echo "请选择上传文件！";	
	}
?>
<?php
//	$conn = new mysqli("23.252.160.209:49670","yuancheng","Yi_yclink%9494","hot_centerdb");
	$conn = new mysqli("localhost", "asd", "asdasd", "my_item");
	$conn->query('set names utf8');
	if($conn->connect_error){
		die($conn->connect_error);
	}
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$article = $_POST["article"];
	}
	$sql = "insert into avia_title(ac_title,ac_tu)VALUES('$article','$upfil')";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			$msg = "Ko";
			exit;
		}
	}else{
		$msg = "oN";
		exit;
	}
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;	
	}
?>
