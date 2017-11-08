<?php
    $column="";
    $page=0;
    $start=0;
    $pageSize=4;
    $conn=new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
    if($conn->connect_error){
        die("连接数据库异常！");
    }
    if(!empty($_REQUEST["page"])){
        $page=$_REQUEST["page"];
        $start=$page*$pageSize;
    }
    if(!empty($_REQUEST["column"])){
        $column=$_REQUEST["column"];
        $sql="select * from article where ac_column='".$column."';";
        $sql2="select * from article where ac_column='".$column."' limit $start,$pageSize;";
    }else{
        $sql="select * from article;";
        $sql2="select * from article limit $start,$pageSize;";
    }
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
<nav>
    <ul class="pager">
        <li class="previous"><a onclick="select('<?php echo $column; ?>','<?php if($page==0){ echo 0; }else{ echo $page-1; } ?>')"><span aria-hidden="true">&larr;</span> Older</a></li>
        <li class="next"><a onclick="select('<?php echo $column; ?>','<?php if($page==$pages){ echo $pages; }else{ echo $page+1; } ?>')">Newer <span aria-hidden="true">&rarr;</span></a></li>
    </ul>
</nav>
