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
        <li class="active">搜索</li>
    </ol>
    <!---------------搜索----------------->
    <div class="text-center sear_self">
        <form class="form-inline" action="showlist.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="search" placeholder="请输入要搜索的内容">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" name="submit" value="搜索">
            </div>
        </form>
    </div>
</div>
    <div class="container">
        <!-------footer--------->
        <!--<nav class="navbar navbar-default navbar-fixed-bottom">
            <div class="container" style="text-align:center;">
                Copyright©1999-2017 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP备10218183号-88 京ICP证161188号
            </div>
        </nav>-->
        <p class="foot_self" style="text-align:center; margin-top:100px; ">
        Copyright©1999-2017 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP备10218183号-88 京ICP证161188号
        </p>
    </div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
