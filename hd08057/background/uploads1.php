<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>后台服务</title>
	<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="../js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<style type="text/css">
		.centent{
			width:940px;
			margin:0 auto;
		}
		.kk li a.click_color{
			background:#D0F8CE !important ;
			color:#5DBA5D !important;
			font-weight:bold !important;
			text-shadow: 0 0px 0 #fff !important;
		}
		.kk li{
			width:100px;
			text-align: center;
		}
	</style>
</head>
<body ng-app="myApp">
<div class="centent">
	<hr></hr>
	<ul class="nav nav-tabs kk">
		<li><a class="brand click_color" ui-sref="route1">优惠大厅</a></li>
		<li><a class="brand" ui-sref="route2">优惠设置</a></li>
		<li><a class="brand" ui-sref="route3">会员审核</a></li>
	</ul>
	<div class="row">
		<div class="span12">
			<div class="" ui-view="viewA"></div>
		</div>
	</div>
</div>
	<script type="text/javascript">
		$(".kk li a").on("click",function(){
			$(this).addClass("click_color").parents().siblings().children("a").removeClass("click_color");
		});
	</script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js"></script>
	<script src="//angular-ui.github.io/ui-router/release/angular-ui-router.js"></script>
<script>
	var myapp = angular.module('myApp', ["ui.router"])
	myapp.config(function($stateProvider) {
		$stateProvider
			.state('route1', {
				url: "/route1",
				views: {
					"viewA": {
						templateUrl: 'lobby.html',
						controller: function($state){
				            $state.go('route1.lobby1');//默认显示第一个tab
				        }
					}
					
				}
			})
			
			.state('route1.lobby1', {
				url: "/lobby1",
				views: {
					"viewB": {templateUrl: 'lobbyson.php'}
				}
			})
			.state('route1.lobby2', {
				url: "/lobby2",
				views: {
					"viewB": {templateUrl: 'uploads.php'}
				}
			})
			
			.state('route2', {
				url: "/route2",
				views: {
					"viewA": {templateUrl: "set.html"}
				}
			})
			.state('route3', {
				url: "/route3",
				views: {
					"viewA": {templateUrl: "audit.php"}
				}
			})
	})
</script>
</body>
</html>