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
            <li class="active">IT资讯</li>
        </ol>
        <!--------content---------->
<?php
    $conn=new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
    if($conn->connect_error){
        die("连接数据库出错！");
    }
?>
        <div class="row">
            <div class="col-md-6">
                <div class="list-group">
                    <h4 class="list-group-item list-group-item-success"><a href="list.php?ac_column=Web前端开发"><span class="glyphicon glyphicon-user"></span> Web前端开发</a></h4>
<?php
    $sql="select * from article where ac_column='Web前端开发' limit 0,4;";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
?>
            <a class="list-group-item" href="show.php?showId=<?php echo $row['ac_id'];?>"><?php echo $row['ac_title']?></a>
<?php
        }
    }
?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list-group">
                    <h4 class="list-group-item list-group-item-info"><a href="list.php?ac_column=UI设计"><span class="glyphicon glyphicon-question-sign"></span> UI设计</a></h4>
                    <?php
                    $sql="select * from article where ac_column='UI设计' limit 0,4;";
                    $result=$conn->query($sql);
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            ?>
                            <a class="list-group-item" href="show.php?showId=<?php echo $row['ac_id'];?>"><?php echo $row['ac_title']?></a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list-group">
                    <h4 class="list-group-item list-group-item-default"><a href="list.php?ac_column=PHP开发"><span class="glyphicon glyphicon-th-large"></span> PHP开发</a></h4>
                    <?php
                    $sql="select * from article where ac_column='PHP开发' limit 0,4;";
                    $result=$conn->query($sql);
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            ?>
                            <a class="list-group-item" href="show.php?showId=<?php echo $row['ac_id'];?>"><?php echo $row['ac_title']?></a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list-group">
                    <h4 class="list-group-item list-group-item-danger"><a href="list.php?ac_column=JAVA开发"><span class="glyphicon glyphicon-list-alt"></span> JAVA开发</a></h4>
                    <?php
                    $sql="select * from article where ac_column='JAVA开发' limit 0,4;";
                    $result=$conn->query($sql);
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            ?>
                            <a class="list-group-item" href="show.php?showId=<?php echo $row['ac_id'];?>"><?php echo $row['ac_title']?></a>
                            <?php
                        }
                    }
                    ?>

                </div>
            </div>
            <div class="col-md-6">
                <div class="list-group">
                    <h4 class="list-group-item list-group-item-warning"><a href="list.php?ac_column=网络营销"><span class="glyphicon glyphicon-list"></span> 网络营销</a></h4>
                    <?php
                    $sql="select * from article where ac_column='网络营销' limit 0,4;";
                    $result=$conn->query($sql);
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            ?>
                            <a class="list-group-item" href="show.php?showId=<?php echo $row['ac_id'];?>"><?php echo $row['ac_title']?></a>
                            <?php
                        }
                    }
                    ?>

                </div>
            </div>

        </div>
        <!-------footer--------->
        <p class="foot_self">
            Copyright©1999-2017 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP备10218183号-88 京ICP证161188号
        </p>
    </div>
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>