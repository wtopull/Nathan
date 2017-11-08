<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>图片上传</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/site.css">
</head>
<body>
	<div class="navbar navbar-default">
		<div class=" container-fluid">
			<!--<div class="navbar-header">
			<a class="navbar-brand glyphicon glyphicon-picture"></a>
			</div>-->
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="../resume.html">个人首页</a>
				</li>
				<li>
					<a href="index.php">全部相册</a>
				</li>
				<li>
					<a href="uploads.php">上传相册</a>
				</li>
			</ul>
		</div>
	</div>
	<?php
		$path = __DIR__."/photo";
		$dir = opendir($path);
		if(is_dir($path)){
	?>
	<div class="container">
		<div class="row">
			<?php
		    	while($fil = readdir($dir)){
		    		$fil = iconv('GB2312','UTF-8',$fil);
					if($fil!="."&&$fil!=".."){
			?>
			<div class="col-sm-6 col-md-4 col-lg-3 ">
		    	<div class="thumbnail">
			        <a href="show.php?photo=<?php echo $fil; ?>">
			        	<img class="lazy" src="img/thum.jpg"></a>
			        <div class="caption">
			        	<h3><?php echo mb_substr($fil,0,6,"UTF8");?></h3>
			        	<a href="show.php?photo=<?php echo $fil; ?>" class="btn btn-danger">进入</a>
			        </div>
		    	</div>
		    </div>
	    <?php
					}
				}
			}
		?>
		</div>
	</div>

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>