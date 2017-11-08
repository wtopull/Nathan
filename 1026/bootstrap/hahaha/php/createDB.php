<?php
    $conn=new mysqli("localhost","asd","asdasd");
	$conn->query('set names utf8');
    if($conn->connect_error){
        echo "连接数据库错误";
    }
    $sql="CREATE DATABASE mydata;";
    $sql.="use mydata;";
    $sql.="create table userInfo(
        userId int(11) unsigned auto_increment primary key,
        username varchar(32) not null,
        password varchar(32) not null,
        email varchar(62) not null,
        telphone varchar(11) not null,
        province varchar(24),
        sex varchar(3),
        likes varchar(255),
        reg_time TIMESTAMP
);";
    if(!$conn->multi_query($sql)){
        echo "创建数据库失败";
    }else{
        echo "创建数据库成功";
    }
?>