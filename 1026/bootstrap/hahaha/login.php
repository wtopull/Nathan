<?php
    include "header.php";
?>

<div class="container">
    <!-----------------------banner----------------------->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="image/zbk_05.jpg" alt="">
            </div>
            <div class="item">
                <img src="image/zbk_05.jpg" alt="">
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-------------路径导航---------------->
    <ol class="breadcrumb">
        <li><a href="index.php">首页</a></li>
        <li class="active">登录</li>
    </ol>
    <!--------------登录表单-------------->
    <form class="form-horizontal" method="post" action="php/dologin.php">
        <div class="form-group">
            <label for="userName" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <?php
                    if(isset($_COOKIE["user"])){
                        echo "<input type='text' class='form-control' id='userName' name='user' value='".$_COOKIE["user"]."'>";
                    }else{
                ?>
                <input type="text" class="form-control" id="userName" name="user" placeholder="用户名">
                <?php
                    }
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <?php
                if(isset($_COOKIE["password"])){
                    echo "<input type='password' class='form-control' id='password' name='password' value='".$_COOKIE["password"]."'>";
                }else{
                    ?>
                    <input type="password" class="form-control" id="password" name="password" placeholder="输入密码">
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <?php
                    if(isset($_COOKIE["password"])){
                        echo "<input type='checkbox' name='allow' value='true' checked>十天内自动登录";
                    }else{
                ?>
                    <input type="checkbox" name="allow" value="true">十天内自动登录
                <?php
                    }
                ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">登录</button>
                <button type="reset" class="btn btn-default">重置</button>
                <a href="register.php" class="btn btn-danger">没有账号，去注册</a>
            </div>
        </div>
    </form>
    <!---------------footer----------------->
    <p class="foot_self">
        Copyright©1999-2017 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP备10218183号-88 京ICP证161188号
    </p>
</div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>