<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="css/iconfont.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<script src="js/iconfont.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div class="box" style="width:460px;position:absolute;top:50%;left:50%; margin-left:-230px;margin-top:-95px;border:1px solid #EFEFEF;">
		<p style="background:#303030;height:30px;color:#fff;text-align:center;font-size:20px;">后台登陆</p>
  		<form class="form-horizontal container" method="post" action="php/doload.php">
		<div class="form-group container">
				<label for="inputEmail3" class="col-sm-1 control-label">用户名</label>
				<div class="col-sm-3">
				  	<input type="text"name="user" class="form-control" id="inputEmail3" placeholder="用户名">
				</div>
		  	</div>
		  	<div class="form-group container">
				<label for="inputPassword3" class="col-sm-1 control-label">密码</label>
				<div class="col-sm-3">
				  	<input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="密码">
				</div>
		  	</div>
		  	<div class="form-group container">
				<label for="inputPassword3" class="col-sm-2 control-label"></label>
				<div class="col-sm-4">
				  	<button type="submit" class="btn btn-danger col-md-2">登陆</button>
				</div>
		  	</div>
		</form>
	</div>
</body>
</html>
