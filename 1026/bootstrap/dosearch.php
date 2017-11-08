<?php
	include "header.php";
	$search = $_POST["search"];
	$conn = new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
	$msg="";
	if($conn->connect_error){
		die("链接失败");
	}
	$sql = "SELECT * FROM wenzhang where ac_title like '%$search%'";
	$result = $conn->query($sql);
	if(empty($_POST["search"])){
		$msg= "请输入内容";
		$jumpUrl = "search.php";
		include "php/tips.php";
		exit;
	}

	$listid = "";
	$page = "";
	$pageSize = 5;
	$star = 0;
	if(!empty($_GET["page"])){
		$page = $_GET["page"];
		$star = ($page-1)*$pageSize;
	}
	if(!empty($_GET["listid"])){
		$listid = $_GET["listid"];
		$sql2 = "SELECT*FROM wenzhang WHERE ac_column='$listid' limit $star,$pageSize";
		$totsql  = "SELECT * FROM wenzhang WHERE ac_column='$listid'";
	}else{
		$listid = "k";
		$sql2 = "SELECT*FROM wenzhang limit $star,$pageSize";
		$totsql  = "SELECT * FROM wenzhang";	
	}
	$result = $conn->query($sql2);
	$totResult = $conn->query($totsql);
	$totSize = $totResult->num_rows;
	$pages = ceil($totSize/$pageSize);
?>

	<ol class="breadcrumb">
      	<li><a href="index.php">首页</a></li>
      	<li class="active"><a href="category.php">前端资讯</a></li>
    </ol>
    <h1 class="page-header">找到 <?php echo $result->num_rows;?> 条数据</h1>
    <ul class="container-fluid list-unstyled list-li">
    	<?php
        	if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
		?>
      	<li class="row">
        	<a href="show.php?showid=<?php echo $row["ac_id"];?>" class="col-md-10"><?php echo $row["ac_title"];?></a>
       		<span class=" col-md-2"><?php echo $row["ac_date"];?></span>
      	</li>
     	<?php
				}
			}
	  	?>
    </ul>
    <nav aria-label="Page navigation" class="text-center">
      <ul class="pagination">
        <li>
          <a href="list.php?<?php if($listid!="k"){echo "listid=".$listid."&"; } ?>page=<?php if(($page-1)<=0){echo 1;}else{echo $page-1;}?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <?php
        	for($i=1; $i<=$pages; $i++){
		?>
        <li class="<?php if($i==$page || ($page==""&&$i==1)){echo "active"; }?>"><a href="list.php?<?php if($listid!="k"){echo "listid=".$listid."&"; } ?>page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php
        	}
		?>
        <li>
          <a href="list.php?<?php if($listid!="全部内容"){echo "listid=".$listid."&"; } ?>page=<?php if(($page+1)>=$pages){echo $pages;}else{echo $page+1;} ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
<?php
	include "footer.php";
?>