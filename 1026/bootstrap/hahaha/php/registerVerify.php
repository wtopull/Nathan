<?php
$user=$password=$password_sure=$email=$phone=$province=$sex=$like=$accept="";
$msg="";
$url="../register.php";
$str="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if($_POST["userName"]!=""){
        $user=test_input($_POST["userName"]);
        if(!preg_match("/^[0-9a-zA-Z]+$/",$user)){
            $msg="用户名必须是字母或数字组成！";
            include "message.php";
            exit;
        }
    }else{
        $msg="用户名不能为空！";
        include "message.php";
        exit;
    }
    if($_POST["password"]!=""){
        $password=test_input($_POST["password"]);
        if(!preg_match("/^\w{6}\w*$/",$password)){
            $msg="密码至少需六位，且不能由特殊字符组成！";
            include "message.php";
            exit;
        }
    }else{
        $msg="密码不能为空！";
        include "message.php";
        exit;
    }
    if($_POST["password_sure"]!=""){
        $password_sure=test_input($_POST["password_sure"]);
        if($password!=$password_sure){
            $msg="两次密码不相同！";
            include "message.php";
            exit;
        }
    }else{
        $msg="请确认密码！";
        include "message.php";
        exit;
    }
    if($_POST["email"]!=""){
        $email=test_input($_POST["email"]);
        if(!preg_match("/^\w+@\w+\.\w+$/",$email)){
            $msg="邮箱格式不对！";
            include "message.php";
            exit;
        }
    }else{
        $msg="邮箱不能为空！";
        include "message.php";
        exit;
    }
    if($_POST["phone"]!=""){
        $phone=test_input($_POST["phone"]);
        if(!preg_match("/^1(3|4|5|7|8)[0-9]{9}$/",$phone)){
            $msg="手机号码格式不对！";
            include "message.php";
            exit;
        }
    }else{
        $msg="手机号码不能为空！";
        include "message.php";
        exit;
    }
    $province=test_input($_POST["province"]);
    $sex=test_input($_POST["sex"]);
    $like=$_POST["like"];
    $likes="";
    for($i=0;$i<count($like);$i++){
        $likes.=$like[$i]." | ";
    }
/*        if($_POST["accept"][0]==""){
            $msg="您未接受《用户协议》，注册失败！";
            include "message.php";
            exit;
        }*/

//写入文件方式注册
    /*$file="../userInfo/userinfo.txt";
    $f=fopen($file,"a+");
    while($str=fgets($f)){
        $arrInfo=explode(",",$str);
        if($user==test_input($arrInfo[0])){
            $msg="用户名已存在！";
            fclose($f);
            include "message.php";
            exit;
        }
    }
    if(fwrite($f,$user.",".$password."\r\n")){
        fclose($f);
        include "success.php";
    };*/


//写入数据库
    $conn=new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
    if($conn->connect_error){
        $msg="连接数据库失败！";
        include "message.php";
        exit;
    }else{
        $sql="insert into userInfo(username,password,email,telphone,province,sex,likes)values('$user','$password','$email','$phone','$province','$sex','$likes');";
        if($conn->query($sql)){
            include "success.php";
        }
    }


}
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>
