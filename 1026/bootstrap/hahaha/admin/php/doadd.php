<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(!empty($_POST["ac_title"])){
            $ac_title=$_POST["ac_title"];
        }else{
            echo "<script>";
            echo "alert('请填写文章标题！');";
            echo "history.go(-1)";
            echo "</script>";
            exit;
        }
        if(!empty($_POST["ac_column"])){
            $ac_column=$_POST["ac_column"];
        }else{
            echo "<script>";
            echo "alert('请选择栏目名称！');";
            echo "history.go(-1)";
            echo "</script>";
            exit;
        }
        $ac_desc=$_POST["ac_desc"];
        if(strlen($ac_desc)==0){
            echo "<script>";
            echo "alert('请填写文章描述！');";
            echo "history.go(-1)";
            echo "</script>";
            exit;
        }
        if(!empty($_POST["ac_keyword"])){
            $ac_keyword=$_POST["ac_keyword"];
        }else{
            echo "<script>";
            echo "alert('请填写关键字！');";
            echo "history.go(-1)";
            echo "</script>";
            exit;
        }
        if(!empty($_POST["editorValue"])){
            $ac_content=$_POST["editorValue"];
        }else{
            echo "<script>";
            echo "alert('请输入文章内容！');";
            echo "history.go(-1)";
            echo "</script>";
            exit;
        }
        if($_FILES["ac_thum"]["name"]){
            if($_FILES["ac_thum"]["error"]>0){
                echo "<script>";
                echo "alert('上传图片出错，请重新上传！');";
                echo "history.go(-1)";
                echo "</script>";
                exit;
            }else{
                $fileName=$_FILES["ac_thum"]["name"];
                $fileTmp=$_FILES["ac_thum"]["tmp_name"];
                $arr=explode(".",$fileName);
                $imgType=array_pop($arr);
                $imgName=time().rand(1,10).".".$imgType;
                if(move_uploaded_file($fileTmp,"../../ac_images/".$imgName)){
                    $imgsrc="ac_images/".$imgName;
                }else{
                    echo "<script>";
                    echo "alert('上传图片出错，请重新上传！');";
                    echo "history.go(-1);";
                    echo "</script>";
                    exit;
                }
            }
        }else{
            echo "<script>";
            echo "alert('请上传图片');";
            echo "history.go(-1)";
            echo "</script>";
            exit;
        }
    }
    $conn=new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
    if($conn->connect_error){
        echo "<script>";
        echo "alert('连接超时，添加失败！');";
        echo "history.go(-1);";
        echo "</script>";
        exit;
    }
    $sql="insert into article(ac_title,ac_column,ac_describe,ac_keyword,ac_content,ac_thum)value('$ac_title','$ac_column','$ac_desc','$ac_keyword','$ac_content','$imgsrc')";
    if($conn->query($sql)){
        echo "<script>";
        echo "alert('添加成功！');";
        echo "window.location='../add.php';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('添加失败！');";
        echo "history.go(-1);";
        echo "</script>";
        exit;
    }

    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
?>