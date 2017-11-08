<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>跳转页面</title>
<style>
*{margin:0; padding:0;}
.box{width:400px; height:200px; border:1px solid #ccc; position:absolute; left:50%; top:50%; margin:-100px 0 0 -200px;}
.box h2{line-height:40px; color:#fff; background:#333; text-align:center; font-size:22px;}
.box p{text-align:center; padding:40px 0 20px; font-weight:bold; font-size:18px; color:#f00;}
.box h4{padding:10px 50px; font-size:14px; font-weight:normal; text-align:center;}
</style>
</head>

<body>
<div class="box">
	<h2>提示内容</h2>
    <p><?php echo $msg; ?></p>
    <h4>页面自动 <a id="href" href="<?php echo $jumpUrl; ?>">跳转</a> 等待时间： <b id="wait">3</b></h4>
</div>
<script>
window.onload = function(){
	var wait = document.getElementById("wait");	
	var href = document.getElementById("href").href;
	
	setInterval(function(){
		wait.innerHTML--;
		if(wait.innerHTML<=0){
			window.location=href;
		}	
	},1000);
}
</script>
</body>
</html>