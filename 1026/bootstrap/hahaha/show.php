<?php
    include "header.php";
    $showId="";
    if(!empty($_GET['showId'])){
        $showId=$_GET['showId'];
    }
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
<?php
    $conn=new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
    if(!$conn->connect_error){
        $sql="select * from article where ac_id='$showId';";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            $row=$result->fetch_assoc();
?>


        <li><a href="list.php?ac_column=<?php echo $row['ac_column']; ?>"><?php echo $row["ac_column"]; ?></a></li>
        <li class="active"><?php echo $row['ac_title']; ?></li>
    </ol>
    <!--------------pageHeader----------------->
    <div class="page-header text-center">
        <h2><?php echo $row['ac_title']; ?></h2>
        <p>作者：<span class="bg-info">admin</span>&nbsp;&nbsp;&nbsp;发布时间：<span class="bg-info"><?php echo $row['ac_date']; ?></span></p>
    </div>

    <div class="content">
        <?php echo $row['ac_content']; ?>
    </div>

    <div class="list-group">
        <h5 class="list-group-item list-group-item-success">相关文章</h5>
<?php
    $sql2="select * from article where ac_keyword='".$row['ac_keyword']."';";
    $result2=$conn->query($sql2);
    if($result2->num_rows>0){
        while($row2=$result2->fetch_assoc()){
?>
            <a class="list-group-item" href="show.php?showId=<?php echo $row2['ac_id']; ?>"><span class="glyphicon glyphicon-star-empty"></span> <?php echo $row2['ac_title']; ?></a>

<?php
        }
    }
?>
    </div>
    <?php
    }else{
        echo "<li class='active'></li></ol>";
        echo "没有数据";
    }
    }
    ?>
    <!---------------footer----------------->
    <p class="foot_self">
        Copyright©1999-2017 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP备10218183号-88 京ICP证161188号
    </p>
</div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>