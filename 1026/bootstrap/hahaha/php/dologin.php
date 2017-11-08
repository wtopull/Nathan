<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST"){

/*        if(file_exists("../userInfo/userinfo.txt")){
            $f=fopen("../userInfo/userinfo.txt","r");
            while($str=fgets($f)){
                $arrInfo=explode(",",$str);
                if($_POST["user"]==test_input($arrInfo[0])){
                    $pass=test_input($arrInfo[1]);
                    if($pass==$_POST["password"]){
                        if(!isset($_SESSION["user"])){
                            $_SESSION["user"]=$_POST["user"];
                        }
                        if(!empty($_POST["allow"])){
                            setcookie("user",$_POST["user"],time()+864000,"/");
                            setcookie("password",$_POST["password"],time()+864000,"/");
                        }else{
                            setcookie("user",$_POST["user"],time()-1,"/");
                            setcookie("password",$_POST["password"],time()-1,"/");
                        }
                        echo "<script type='text/javascript'>";
                        echo "window.location.href='../index.php'";
                        echo "</script>";
                    }else{
                        $msg="密码错误！";
                        $url="../login.php";
                        include "message.php";
                    }

                }else{
                    $msg="用户名不存在！请注册";
                    $url="../register.php";
                    include "message.php";
                }
            }

        }else{
            $msg="用户名不存在！请注册";
            $url="../register.php";
            include "message.php";
        }*/
        $conn=new mysqli("localhost","asd","asdasd","my_item");
		$conn->query('set names utf8');
        if($conn->connect_error){
            $msg="网络超时，请重新登录！";
            $url="../login.php";
            include "message.php";
            exit;
        }
        $user = $_POST['user'];
        $pass = $_POST["password"];
        $sql="select * from userinfo where username='$user'";
        $sql2="select username from userinfo where username='$user' and password='$pass'";
        $result=$conn->query($sql);
        if($result->num_rows>0){

            $result2=$conn->query($sql2);
            if($result2->num_rows>0){
                $msg="登录成功！";
                $url="../index.php";
                include "success.php";
            }else{
                $msg="密码错误！";
                $url="../login.php";
                include "message.php";
                exit;
            }
        }else{
            $msg="用户名不存在！";
            $url="../login.php";
            include "message.php";
            exit;
        }
            if(!isset($_SESSION["user"])){
                $_SESSION["user"]=$_POST["user"];
            }
            if(!empty($_POST["allow"])){
                setcookie("user",$_POST["user"],time()+864000,"/");
                setcookie("password",$_POST["password"],time()+864000,"/");
            }else{
                setcookie("user",$_POST["user"],time()-1,"/");
                setcookie("password",$_POST["password"],time()-1,"/");
            }
            echo "<script type='text/javascript'>";
            echo "window.location.href='../index.php'";
            echo "</script>";
    }
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

?>