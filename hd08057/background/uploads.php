<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title></title>
	<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="../js/jquery.js" type="text/javascript" charset="utf-8"></script>
	
</head>
<body>
	<div class="container">
		<div class="row">	
	        <div class="col-md-9 col-lg-9 divRight container">
				<form method="post" action="php/dopublish.php" enctype="multipart/form-data">
				  	<div class="form-group">
				    	<label for="exampleInputEmail1">文章标题</label>
				    	<input type="text" class="form-control" name="article" id="exampleInputEmail1" placeholder="文章标题">
				  	</div>
				  	<div class="form-group">
				    	<label for="exampleInputEmail1">上传缩略图</label>
				    	<input type="file" name="upfile" id="exampleInputEmail1" value="选择文件" />
				  	</div>
				  	<div class="form-group">
		        		<div class="">
		          			<input type="submit" class="btn btn-success" value="发布文章"> 
		          			<input type="reset" class="btn btn-danger" value="重置内容" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>