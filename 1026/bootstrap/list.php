<?php
	include "header.php";
	$conn=new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
	if($conn->connect_error){
		die($conn->connect_error);
	}
	$listid="";
	$page="";
	$dopage=5;
	$star=0;
	if(!empty($_GET["page"])){
		$page=$_GET["page"];
		$star=($page-1)*$dopage;
	}
	if(!empty($_GET["listid"])){
		$listid=$_GET["listid"];
		$sql="select*from wenzhang WHERE ac_column='$listid' limit $star,$dopage";
		$dosql ="select*from wenzhang WHERE ac_column='$listid'";
	}else{
		$listid="全部内容";
		$sql="select*from wenzhang limit $star,$dopage";
		$dosql="select*from wenzhang";	
	}
	$result=$conn->query($sql);
	$doresult=$conn->query($dosql);
	$dobox=$doresult->num_rows;
	$pages=ceil($dobox/$dopage);
?>
	<ol class="breadcrumb">
      	<li><a href="index.php">首页</a></li>
      	<li class="active"><?php echo $listid; ?></li>
    </ol>
    <h1 class="page-header"><?php echo $listid; ?></h1>
    <ul class="container-fluid list-unstyled list-li">
    <?php
    	if($result->num_rows>0){
			$n=0;
			while($row=$result->fetch_assoc()){
				$n++;
	?>	
      	<li class="row">
        	<a href="show.php?showid=<?php echo $row["ac_id"]; ?>" class="col-md-10"><?php echo $row["ac_title"]; ?></a>
        	<span class=" col-md-2"><?php echo $row["ac_date"];?></span>
      	</li>
      <?php
	  			if($n%5==0){
					echo "<li style='height:12px;text-indent:2em'></li>";
				}
    		}
		}
	?>
    </ul>
    <nav aria-label="Page navigation" class="text-center">
      	<ul class="pagination">
	        <li>
	          	<a href="list.php?<?php if($listid!="全部内容"){echo "listid=".$listid."&"; } ?>page=<?php if(($page-1)<=0){echo 1;}else{echo $page-1;}?>" aria-label="Previous">
	           		<span aria-hidden="true">&laquo;</span>
	          	</a>
	        </li>
	        <?php
	        	for($i=1; $i<=$pages; $i++){
			?>
        	<li class="<?php if($i==$page || ($page==""&&$i==1)){echo "active"; }?>">
        		<a href="list.php?<?php if($listid!="全部内容"){echo "listid=".$listid."&"; } ?>page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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