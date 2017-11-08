
	<style type="text/css">
		input{border:none;}
		label{height:40px;line-height:40px;}
		input.btn-danger{background:#ac2925;color:#fff;}
		input.btn-success{background:#398439;}
		div.container{background:#fff;padding-top:50px;}
	</style>
	<div class="">
		<div class="row">	
	        <div class="col-md-9 col-lg-9 divRight container">
				<form method="post" action="php/dopublish.php" enctype="multipart/form-data">
				  	<div class="form-group">
				    	<label for="exampleInputEmail1">优惠标题：</label>
				    	<input type="text" class="form-control" name="article" id="exampleInputEmail1" placeholder="文章标题">
				  	</div>
				  	<div class="form-group">
				    	<label for="exampleInputEmail1">游戏缩略图：</label>
				    	<input type="file" name="upfile" id="exampleInputEmail1" value="选择图片" />
				  	</div>
				  	<div class="form-group">
		        		<div class="">
		          			<input type="submit" class="btn btn-success" value="发布游戏"> 
		          			<input type="reset" class="btn btn-danger" value="重置内容" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<!--</body>
</html>-->