<?php
	include "php/user.php";
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
	
	<link href="umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="umeditor/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="umeditor/lang/zh-cn/zh-cn.js"></script>
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
	                <a class="list-group-item">PHP开发</a>
	                <a class="list-group-item">JavaScript</a>
	                <a class="list-group-item">JQueery</a>
	                <a class="list-group-item">零零碎碎</a>
	                <a class="list-group-item">Angular</a>
	                <a class="list-group-item">插件</a>
	                <a href="#" class="list-group-item list-group-item-success" >发布文章</a>
				</div>
			</div>
			
	        <div class="col-md-9 col-lg-9 divRight">
				<form method="post" action="php/dopublish.php" enctype="multipart/form-data">
				  	<div class="form-group">
				    	<label for="exampleInputEmail1">文章标题</label>
				    	<input type="text" class="form-control" name="article" id="exampleInputEmail1" placeholder="文章标题">
				  	</div>
				  	<div class="form-group">
					<label for="exampleInputEmail1">栏目标题</label>
						<select class="form-control" name="zone">
				          	<option selected>WEB前端开发</option>
				          	<option>PHP开发</option>
				          	<option>JavaScript</option>
				          	<option>JQueery</option>
				          	<option>零零碎碎</option>
				          	<option>Angular</option>
				          	<option>插件</option>
				        </select>
		        	</div>
				
					<div class="form-group">
				    	<label for="exampleInputEmail1">文章描述</label>
						<textarea class="form-control" rows="3" name="describe" placeholder="文章描述"></textarea>
					</div>
					<div class="form-group">
				    	<label for="exampleInputEmail1">关键词</label>
				    	<input type="text" class="form-control" name="antistop" id="exampleInputEmail1" placeholder="关键词">
				  	</div>
				  	<div class="form-group">
				    	<label for="exampleInputEmail1">文章内容</label>
				    	<script type="text/plain" id="myEditor" style="width:845px;height:200px;" name="script"><p>这里我可以写一些输入提示</p></script>
				  	</div>
					
				  	<hr>
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
	
	<div class="panel-footer container">
    	Copyright1999-2016 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP证161188号
    </div>
</body>
</html>
<script type="text/javascript">
    var um = UM.getEditor('myEditor');
</script>