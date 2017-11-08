<?php
	namespace Home\Controller;
	use Think\Controller;
	
	class UserController extends Controller{
		function login(){
			
			define('CSS_URL', '/shop/Public/css/User/');
			
			$this->display();
		}
	}
?>