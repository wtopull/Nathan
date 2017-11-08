<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="keywords" content="web前端个人简历,web前端旅记点滴,旅记点滴博客,旅记点滴,旅记点滴前端工程师">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>旅记点滴</title>
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="css/_self.css" type="text/css" rel="stylesheet">
    <!-- [if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body{ margin:0; padding-top:51px;}
    </style>
</head>
<body>
<!------------------nav-------------------------->
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">首页</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav  navbar-left">
                <li><a href="web_info.php">IT资讯</a></li>
                <li><a href="resume.html">站长简介</a></li>
                <!--<li><a href="select.php">课程选择</a></li>-->
                <li><a href="vote.php">投票</a></li>
                <li><a href="search.php">搜索</a></li>
                <?php
                if(isset($_SESSION["user"])){
                    echo "<li><a>".$_SESSION["user"]."</a></li>";
                }else{
                    if(isset($_COOKIE["user"])){
                        echo "<li><a>".$_COOKIE["user"]."</a></li>";
                    }else{
                        ?>
                        <li><a href="register.php">注册</a></li>
                        <?php
                    }
                }
                if(isset($_SESSION["user"])){
                    echo "<li><a href='php/destroy.php'>注销</a><li>";
                }else{
                    if(isset($_COOKIE["user"])){
                        echo "<li><a href='php/destroy.php'>注销</a><li>";
                    }else {
                        ?>
                        <li><a href="login.php">登录</a></li>
                        <?php
                    }
                }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" >关于我们</a></li>
            </ul>
        </div>
    </div>
</nav>
