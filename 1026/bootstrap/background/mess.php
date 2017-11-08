<?php
	include "php/user.php";
	$conn = new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
	if($conn->connect_error){
		die("OK");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="css/iconfont.css"/>
	<link rel="stylesheet" type="text/css" href="css/public.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<script src="js/iconfont.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div class="container">
		<div class="page-header  projects-header">
		  	<h1>后台信息系统<small>欢迎您：<?php echo $stri;?></small></h1>
		</div>
		<div class="row">
	        <div class="col-md-3 col-lg-3">
		        <div class="list-group " id="divA">
				  	<p class="list-group-item list-group-item-success">文章栏目</p>
				  	<a class="list-group-item">WEB前端开发</a>
	                <a class="list-group-item">UI设计</a>
	                <a class="list-group-item">PHP开发</a>
	                <a class="list-group-item">JAVA开发</a>
	                <a class="list-group-item">网络营销</a>
	                <a href="publish.php" class="list-group-item list-group-item-success" >发布文章</a>
				</div>
			</div>
	        <div class="col-md-9 col-lg-9 divRight">
				<table class="table table-condensed ">
					<thead>
						<tr>
							<th class="col-md-1">id</th>
							<th class="col-md-6">文章标题</th>
							<th class="col-md-3">发布日期</th>
							<th class="col-md-2">操作</th>
						</tr>
					</thead>
					<tbody>
                        <?php 
							$sql = "SELECT * FROM wenzhang";
							$result = $conn->query($sql);
							if($result->num_rows>0){
								while($row = $result->fetch_assoc()){
						?>	
						<tr>
						<td><?php echo $row["ac_id"];?></td>		
						<td><?php echo $row["ac_title"];?></td>
						<td><?php echo $row["ac_date"];?></td>
						<td>
							<a href="php/delete.php?ac_id=<?php echo $row["ac_id"]?>">删除</a>
							<a href="#">修改</a>
						</td>
						</tr>
						 <?php 			
								}
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	<div class="panel-footer container">
    	Copyright1999-2016 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP证161188号
    </div>
	
</body>
</html>
