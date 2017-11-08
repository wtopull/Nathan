<?php
    include "header.php";

    $conn=new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
    if($conn->connect_error){
        die("连接数据库异常！");
    }
    $ac_column='';
    $n=0;
    $start=0;
    $pageId=1;
    $pageSize=5;
    if(!empty($_GET['pageId'])){
        $pageId=$_GET['pageId'];
        $start=($pageId-1)*$pageSize;
    }
    if(!empty($_GET['ac_column'])){
        $ac_column=$_GET['ac_column'];
        $sql="select * from article where ac_column='$ac_column';";
        $pageSql="select * from article where ac_column='$ac_column' limit $start,$pageSize;";
    }else{
        $ac_column="全部内容";
        $sql="select * from article";
        $pageSql="select * from article limit $start,$pageSize;";
    }
    $result=$conn->query($sql);
    $totalSize=$result->num_rows;
    $res=$conn->query($pageSql);
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
        <li class="active"><?php echo $ac_column; ?></li>
    </ol>
    <!------------pageHeader------------>
    <div class="page-header">
        <h1 style="font-family: '宋体'"><?php echo $ac_column;?></h1>
    </div>
    <!--------------content------------->
    <ul class="container-fluid list-unstyled list-li" style="padding:0 0 20px 20px;line-height:30px;">
<?php
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
            $n++;
?>
            <li class="row"><span class="col-md-10"><a href="show.php?showId=<?php echo $row['ac_id']; ?>"><?php echo $row['ac_title']; ?></a></span><span class="col-md-2"><?php echo $row['ac_date']; ?></span></li>

<?php
            if($n%5==0){
                echo "<li class='row' style='height:30px;'></li>";
            }
        }
    }else{
        echo "<li>没有数据</li>";
    }
?>
    </ul>
    <!---------------分页--------------->
    <div style="text-align:center">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li>
                    <a href="list.php?ac_column=<?php if($ac_column=='全部内容'){ echo '';}else{ echo $ac_column;}?>&pageId=<?php if($pageId<=1){ echo 1;}else{ echo $pageId-1;}?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
<?php
    $pages=ceil($totalSize/$pageSize);
    for($i=1;$i<=$pages;$i++){
?>
        <li class="<?php if($i==$pageId){ echo 'active';}?>"><a href="list.php?ac_column=<?php if($ac_column=='全部内容'){ echo '';}else{ echo $ac_column;}?>&pageId=<?php echo $i;?>"><?php echo $i; ?></a></li>
<?php
    }
?>
                <li>
                    <a href="list.php?ac_column=<?php if($ac_column=='全部内容'){ echo '';}else{ echo $ac_column;}?>&pageId=<?php if($pageId>=$pages){ echo $pages;}else{ echo $pageId+1;}?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!--------------footer-------------->
    <p class="foot_self">
        Copyright©1999-2017 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP备10218183号-88 京ICP证161188号
    </p>
</div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>