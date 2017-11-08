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
	<div class="container">
		<div class="row">
			<div>
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#upfiles" aria-controls="upfiles" role="tab" data-toggle="tab">
							上传文件
						</a>
					</li>
					<li role="presentation">
						<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
							添加栏目
						</a>
					</li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="upfiles">
						<br>
						<form method="post" action="php/douploads.php" enctype="multipart/form-data">
							<?php
								$path = __DIR__."/photo";
								$dir = opendir($path);
								if(is_dir($path)){
							?>
							<select class="form-control" name="clunm">
								<option>请选择目录</option>
								<?php
									while($fil = readdir($dir)){
										$fil = iconv('GB2312','UTF-8',$fil);
										if($fil!="."&&$fil!=".."){
								?>
								<option><?php echo $fil; ?></option>
									
								<?php
											}
										}
									}
								?>
							</select>
							<br>
							<input type="file" name="upfile">
							<br>
							<input type="submit" class="btn btn-default" value="上传">
						</form>
					</div>
					<div role="tabpanel" class="tab-pane" id="profile">
						<form class="form-horizontal" style="margin-top:20px;" method="post" action="php/addclum.php">
							<div class="form-group">
								<label for="addclum" class="col-sm-2 control-label">添加栏目</label>
								<div class="col-sm-10">
									<input type="text" name="addclum" class="form-control" id="addclum" placeholder="添加栏目">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-default">
									添加栏目
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>