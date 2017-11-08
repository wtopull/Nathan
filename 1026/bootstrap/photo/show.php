<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
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
<?php $clum = $_GET["photo"]; ?>
<div class="container">
	<ol class="breadcrumb">
      <li><a href="index.php">首页</a></li>
      <li class="active"><?php echo $clum; ?></li>
    </ol>
	<div class="row">
    	<?php
			
        	$path = __DIR__."/photo/".$clum;
			if(is_dir($path)){
				$dir = opendir($path);
				while($fil = readdir($dir)){
					if($fil!="."&&$fil!=".."){
						
		
		?>
    	<div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail">
            	<img class="lazy" src="photo/<?php echo $clum . "/" . $fil; ?>">
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