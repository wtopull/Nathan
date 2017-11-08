<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(!empty($_POST["admin_name"])){
            if(!empty($_POST["admin_password"])){
                $conn=new mysqli("localhost","asd","asdasd","my_item");
				$conn->query('set names utf8');
                if($conn->connect_error){
                    echo "<script>";
                    echo "alert('登录异常，请重新登录！');";
                    echo "history.go(-1);";
                    echo "</script>";
                    exit;
                }
                $sql="select * from admin where admin_name='".$_POST["admin_name"]."' and admin_password='".$_POST["admin_password"]."'";
                $result=$conn->query($sql);
                if($result->num_rows>0){
                    session_start();
                    $_SESSION["admin"]=$_POST["admin_name"];
                    echo "<script>";
                    echo "window.location='../show.php?cate=1';";
                    echo "</script>";
                }else{
                    echo "<script>";
                    echo "alert('用户名或密码不正确！');";
                    echo "history.go(-1);";
                    echo "</script>";
                    exit;
                }
            }else{
                echo "<script>";
                echo "alert('密码不能为空！');";
                echo "history.go(-1);";
                echo "</script>";
                exit;
            }
        }else{
            echo "<script>";
            echo "alert('用户名不能为空！');";
            echo "history.go(-1);";
            echo "</script>";
            exit;
        }
    }
?>