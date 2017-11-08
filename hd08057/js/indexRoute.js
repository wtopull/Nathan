var myapp = angular.module('myApp', ["ui.router"])
myapp.config(function($stateProvider) {
	$stateProvider
		.state('route1', {
			url: "",
			views: {
				"viewa": {templateUrl: 'right/lobbyR.php'},
				controller: function($state){
		            $state.go('route1.lobbyL1');
		        }
			}
		})
		
		.state('lobbyL1', {
			url: "/lobbyL1",
			views: {
				"viewa": {templateUrl: 'right/lobbyR.php'}
			}
		})
		.state('lobbyL2', {
			url: "/lobbyL2",
			views: {
				"viewa": {templateUrl: 'right/set.php'}
			}
		})
		.state('lobbyL3', {
			url: "/lobbyL3",
			views: {
				"viewa": {templateUrl: 'right/uploads.php'}
			}
		})
		.state('lobbyL4', {
			url: "/lobbyL4",
			views: {
				"viewa": {templateUrl: 'right/query.php'}
			}
		})
		
		.state('route2', {
			url: "/route2",
			views: {
				"viewa": {templateUrl: 'right/memberR.php'}
			}
		})
		.state('memberL1', {
			url: "/memberL1",
			views: {
				"viewa": {templateUrl: 'right/memberR.php'}
			}
		})
		.state('memberL2', {
			url: "/memberL2",
			views: {
				"viewa": {templateUrl: 'right/memberR.php'}
			}
		})
})
	

//top,二个导航点击效果
$(".nav li").on("click",function(){
	var inD = $(this).index();
	$(this).css({"background":"#eee"}).siblings().css({"background":"none"});
	$("li.routerLi").eq(inD).addClass("mui-active").siblings().removeClass("mui-active");
});
	
$("li.routerLi").on("click",function(){
	var inD = $(this).index();
	$(".nav li").eq(inD).css({"background":"#eee"}).siblings().css({"background":"none"})
});