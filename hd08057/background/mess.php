<?php
//	$conn = new mysqli("23.252.160.209:49670","yuancheng","Yi_yclink%9494","hot_centerdb");
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
	<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css" rel="stylesheet">
	<title>首页</title>
</head>
<body>
	<div class="container">
		<div class="row">
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
							$sql = "SELECT * FROM avia_title";
							$result = $conn->query($sql);
							if($result->num_rows>0){
								while($row = $result->fetch_assoc()){
						?>	
						<tr>
						<td><?php echo $row["id"];?></td>		
						<td><?php echo $row["ac_title"];?></td>
						<td><?php echo $row["date"];?></td>
						<td>
							<a href="php/delete.php?id=<?php echo $row["id"]?>">删除</a>
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
</body>
</html>
