<?php
    include "header.php";
?>
<script>
    function select(column,page){
        if(window.XMLHttpRequest){
            var ajax=new XMLHttpRequest();
        }else{
            var ajax=new ActiveXObject("Microsoft.XMLHTTP");
        }
        ajax.open("get","php/doselect.php?column="+column+"&page="+page,true);
        ajax.send();
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&&ajax.status==200){
                document.getElementById("show").innerHTML=ajax.responseText;
                if(column!=""){
                    document.getElementById("sel_con").innerHTML="您查找的内容是：<span style='color:red;'>"+column+"</span> ,每页显示4条信息";
                }
            }
        }
    }
</script>
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
        <li class="active">课程选择</li>
    </ol>
    <!--------search---------->
    <div class="page-header">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                请选择您要查询的课程
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                <li onclick="select(this.innerHTML,0);">Web前端开发</li>
                <li onclick="select(this.innerHTML,0);">JAVA开发</li>
                <li onclick="select(this.innerHTML,0);">PHP开发</li>
                <li onclick="select(this.innerHTML,0);">UI设计</li>
                <li onclick="select(this.innerHTML,0);">网络营销</li>
            </ul>
        </div>
    </div>
    <h3 id="sel_con"></h3>
    <!-----------------course---------------->
    <div id="show">
<?php
        //$column="";
        $page=0;
        $start=0;
        $pageSize=4;
        if(!empty($_REQUEST["page"])){
            $page=$_REQUEST["page"];
            $start=$page*$pageSize;
        }
 /*       if(!empty($_REQUEST["column"])){
            $column=$_REQUEST["column"];
        }*/

        $conn=new mysqli("localhost","asd","asdasd","my_item");
		$conn->query('set names utf8');
        if($conn->connect_error){
            die("连接数据库异常！");
        }
        $sql="select * from article;";
        $sql2="select * from article limit $start,$pageSize;";
        $result=$conn->query($sql);
        $totalSize=$result->num_rows;
        $pages=ceil($totalSize/$pageSize)-1;
        $result2=$conn->query($sql2);
        ?>
        <div class="row">
            <?php
            if($result2->num_rows>0){
                while($row=$result2->fetch_assoc()){
                    ?>
                    <div class="col-xs-6 col-md-3">
                        <a href="show.php?showId=<?php echo $row['ac_id']; ?>" class="thumbnail">
                            <img src="<?php echo $row['ac_thum']; ?>" alt="">
                        </a>
                    </div>
                    <?php
                }
            }else{
                echo "No Data!";
            }
            ?>
        </div>
        <!-----------分页导航----------->
        <!--<nav>
            <ul class="pager">
                <li class="previous"><a href="select.php?page=<?php /*if($page==0){ echo  0; }else{ echo $page-1; }*/?>"><span aria-hidden="true">&larr;</span> Older</a></li>
                <li class="next"><a href="select.php?page=<?php /*if($page==$pages){ echo  $pages; }else{ echo $page+1; }*/?>">Newer <span aria-hidden="true">&rarr;</span></a></li>
            </ul>
        </nav>-->
        <nav>
            <ul class="pager">
                <li class="previous"><a onclick="select('','<?php if($page==0){ echo 0; }else{ echo $page-1; } ?>')"><span aria-hidden="true">&larr;</span> Older</a></li>
                <li class="next"><a onclick="select('','<?php if($page==$pages){ echo $pages; }else{ echo $page+1; } ?>')">Newer <span aria-hidden="true">&rarr;</span></a></li>
            </ul>
        </nav>
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
