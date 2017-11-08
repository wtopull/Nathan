<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/index.css"/>
</head>
<body>
	<div class="log">
		<div class="logo">
			<a href=""><img class="logo1" src="image/logo.png"/></a>
			<a href=""><img class="sc" src="image/sc.png"/></a>
			<img class="hot" src="image/hot.png"/>
		</div>
	</div>
	<div class="nav">
		<ul>
			<li><a href="">官网首页</a><span>|</span></li>
			<li><a href="">优惠活动</a><span>|</span></li>
			<li><a href="">免费开户</a><span>|</span></li>
			<li><a href="">官网首页</a><span>|</span></li>
			<li><a href="">优惠活动</a><span>|</span></li>
			<li><a href="">免费开户</a></li>
		</ul>
	</div>
	
	<div class="content">
		<ul class="conUl">
			<?php
				$conn = new mysqli("localhost","asd","asdasd","my_item");
				$conn->query('set names utf8');
				if($conn->connect_error){
					die("NO");
				}
				$sql = "SELECT *FROM avia_title  order by ac_date desc";
				$result = $conn->query($sql); 
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
			?>
			<li>
				<img src="<?php echo 'background/'.$row["ac_tu"]; ?>"/>
				<div class="zz">
					<a href=""><img src="image/zz.png"/></a>
				</div>
				<p><?php echo $row["ac_title"]; ?></p>
				<button><a href="">点击申请</a></button>
			</li>
			<?php 
					}
				}	
			?>
		</ul>
	</div>
	<div class="footer">
		<div class="footer_box">
			<ul class="footer_ul">
				<li>
					<a href="" target="_blank"></a>
				</li>
				<li>
					<a href="" target="_blank"></a>
				</li>
				<li>
					<a href="" target="_blank"></a>
				</li>
				<li>
					<a href="" target="_blank"></a>
				</li>
				<li>
					<a href="" target="_blank"></a>
				</li>
				<li>
					<a href="" target="_blank"></a>
				</li>
			</ul>
			<div class="footer_RigBox">
				<ul class="footer_RigUl">
					<li>恭喜会员：<span>wu**8</span>成功办理<i>签到彩金天天现金回馈天天免费领</i></li>
					<li>恭喜会员：<span>wu**8</span>成功办理<i>签到彩金天天现金回馈天天免费领</i></li>
					<li>恭喜会员：<span>wu**8</span>成功办理<i>签到彩金天天现金回馈天天免费领</i></li>
					<li>恭喜会员：<span>wu**8</span>成功办理<i>签到彩金天天现金回馈天天免费领</i></li>
					<li>恭喜会员：<span>wu**8</span>成功办理<i>签到彩金天天现金回馈天天免费领</i></li>
					<li>恭喜会员：<span>wu**8</span>成功办理<i>签到彩金天天现金回馈天天免费领</i></li>
					<li>恭喜会员：<span>wu**8</span>成功办理<i>签到彩金天天现金回馈天天免费领</i></li>
					<li>恭喜会员：<span>wu**8</span>成功办理<i>签到彩金天天现金回馈天天免费领</i></li>
					<li>恭喜会员：<span>wu**8</span>成功办理<i>签到彩金天天现金回馈天天免费领</i></li>
					<li>恭喜会员：<span>wu**8</span>成功办理<i>签到彩金天天现金回馈天天免费领</i></li>
					<li>恭喜会员：<span>wu**8</span>成功办理<i>签到彩金天天现金回馈天天免费领</i></li>
					<li>恭喜会员：<span>wu**8</span>成功办理<i>签到彩金天天现金回馈天天免费领</i></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer_but"></div>
	<p class="footer_p">Copyright © 澳门威尼斯人 Reserved</p>
	<script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/index.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
