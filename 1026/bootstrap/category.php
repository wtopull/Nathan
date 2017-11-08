<?php
	include "header.php";
	$conn = new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
	if($conn->connect_error){
		die("No");
	}
	$showid = 0;
	if(!empty($_GET["showid"])){
		$showid = $_GET["showid"];
	}
?>
	<ol class="breadcrumb">
      <li><a href="index.php">首页</a></li>
      <li class="active"><a href="category.php">前端资讯</a></li>
    </ol>
<div class="row marginTop20">
	<div class="col-sm-6">
        <div class="list-group">
          	<a href="list.php?listid=WEB前端开发" class="list-group-item list-group-item-success">
          	<span class="glyphicon glyphicon-user"></span> WEB前端开发
          	</a>
          	<?php 
          		$sql = "select*from wenzhang where ac_column='WEB前端开发' limit 0,4 ";
				$result =$conn->query($sql);
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
         	 ?>
          	<a href="show.php?showid=<?php echo $row["ac_id"];?>" class="list-group-item"><?php echo $row["ac_describe"];?></a>
          	<?php
					}
				}	
          	?>
          	
        </div>
    </div>
    <!--<div class="col-sm-6">
        <div class="list-group">
          	<a href="list.php?listid=UI设计" class="list-group-item  list-group-item-info">
            	<span class="glyphicon glyphicon-question-sign"></span> UI设计
          	</a>
          	<?php 
          		$sql = "select*from wenzhang where ac_column='UI设计' limit 0,4 ";
				$result =$conn->query($sql);
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
         	 ?>
          	<a href="show.php?showid=<?php echo $row["ac_id"];?>" class="list-group-item"><?php echo $row["ac_describe"];?></a>
          	<?php
					}
				}	
          	?>
        </div>
    </div>-->
	<div class="col-sm-6">
        <div class="list-group">
          	<a href="list.php?listid=零零碎碎" class="list-group-item">
            	<span class="glyphicon glyphicon-th-large"></span> 零零碎碎
          	</a>
          	<?php 
          		$sql = "select*from wenzhang where ac_column='零零碎碎' limit 0,5  ";
				$result =$conn->query($sql);
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
         	 ?>
          	<a href="show.php?showid=<?php echo $row["ac_id"];?>" class="list-group-item"><?php echo $row["ac_describe"];?></a>
          	<?php
					}
				}	
          	?>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="list-group">
          	<a href="list.php?listid=PHP开发" class="list-group-item active">
            	<span class="glyphicon glyphicon-list-alt"></span> PHP开发
          	</a>
          	<?php 
          		$sql = "select*from wenzhang where ac_column='PHP开发' limit 0,5 ";
				$result =$conn->query($sql);
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
         	 ?>
          	<a href="show.php?showid=<?php echo $row["ac_id"];?>" class="list-group-item"><?php echo $row["ac_describe"];?></a>
          	<?php
					}
				}	
          	?>
        </div>
    </div>
    <!--<div class="col-sm-6">
        <div class="list-group">
          	<a href="list.php?listid=JAVA开发" class="list-group-item list-group-item-warning">
            	<span class="glyphicon glyphicon-list"></span> JAVA开发
          	</a>
          	<?php 
          		$sql = "select*from wenzhang where ac_column='JAVA开发' limit 0,5 ";
				$result =$conn->query($sql);
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
         	 ?>
          	<a href="show.php?showid=<?php echo $row["ac_id"];?>" class="list-group-item"><?php echo $row["ac_describe"];?></a>
          	<?php
					}
				}	
          	?>
        </div>
    </div>-->
    
    <div class="col-sm-6">
        <div class="list-group">
          	<a href="list.php?listid=JavaScript" class="list-group-item list-group-item-primary">
            	<span class="glyphicon glyphicon-list"></span> JavaScript
          	</a>
          	<?php 
          		$sql = "select*from wenzhang where ac_column='JavaScript' limit 0,5 ";
				$result =$conn->query($sql);
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
         	 ?>
          	<a href="show.php?showid=<?php echo $row["ac_id"];?>" class="list-group-item"><?php echo $row["ac_describe"];?></a>
          	<?php
					}
				}	
          	?>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="list-group">
          	<a href="list.php?listid=JQueery" class="list-group-item list-group-item-info">
            	<span class="glyphicon glyphicon-list"></span> JQueery
          	</a>
          	<?php 
          		$sql = "select*from wenzhang where ac_column='JQueery' limit 0,5 ";
				$result =$conn->query($sql);
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
         	 ?>
          	<a href="show.php?showid=<?php echo $row["ac_id"];?>" class="list-group-item"><?php echo $row["ac_describe"];?></a>
          	<?php
					}
				}	
          	?>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="list-group">
          	<a href="list.php?listid=Angular" class="list-group-item list-group-item-danger">
            	<span class="glyphicon glyphicon-list"></span> Angular
          	</a>
          	<?php 
          		$sql = "select*from wenzhang where ac_column='Angular' limit 0,5 ";
				$result =$conn->query($sql);
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
         	 ?>
          	<a href="show.php?showid=<?php echo $row["ac_id"];?>" class="list-group-item"><?php echo $row["ac_describe"];?></a>
          	<?php
					}
				}	
          	?>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="list-group">
          	<a href="list.php?listid=插件" class="list-group-item list-group-item-success">
            	<span class="glyphicon glyphicon-list"></span> 插件
          	</a>
          	<?php 
          		$sql = "select*from wenzhang where ac_column='插件' limit 0,5 ";
				$result =$conn->query($sql);
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
         	 ?>
          	<a href="show.php?showid=<?php echo $row["ac_id"];?>" class="list-group-item"><?php echo $row["ac_describe"];?></a>
          	<?php
					}
				}	
          	?>
        </div>
    </div>
    
</div>   
<?php
	include "footer.php";	
?>