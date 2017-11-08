<?php

echo  6666;
	if($_SERVER['REQUEST_METHOD']=="POST"){
		
		if(isset($_POST['maskBox1']) && $_POST['maskBox1'] == "maskBox_but"){
			if(!empty($_POST["maskBox_name"])){
				echo "maskBox_name不为空";
			}else{
				echo '<script type="text/javascript">alert("会员账号不能为空"); history.back();</script>';
			}		
		}	
		
		if(isset($_POST['my_button1']) && $_POST['my_button1'] == "maskBox1_but"){
			if(!empty($_POST["maskBox1_name"])){
				echo '<script type="text/javascript">alert("会员账号不能为空"); history.back();</script>';
				echo "maskBox1_name不为空";
				
				exit;
			}else{
				echo "maskBox1_name为空";
				echo '<script type="text/javascript">alert("会员账号不能为空"); history.back();</script>';
				exit;
			}
			if(!empty($_POST["maskBox1_dengji"])){
				echo "maskBox1_dengji不为空";
				exit;
			}else{
				echo "maskBox1_dengji为空";
				echo '<script type="text/javascript">alert("会员账号不能为空"); history.back();</script>';
				exit;
			}
			if(!empty($_POST["maskBox1_shenqingyuming"])){
				echo "maskBox1_shenqingyuming不为空";
				exit;
			}else{
				echo "maskBox1_shenqingyuming为空";
				exit;
			}
			if(!empty($_POST["maskBox1_beiyongyuming"])){
				echo "maskBox1_beiyongyuming不为空";
				exit;
			}else{
				echo "maskBox1_beiyongyuming为空";
				exit;
			}		
		}
		
		if(isset($_POST['my_button2']) && $_POST['my_button2'] == "maskBox2_but"){
			if(!empty($_POST["maskBox2_name"])){
				echo "maskBox2_name不为空";
			}else{
				echo "maskBox2_name为空";
			}		
		}
		
		if(isset($_POST['my_button3']) && $_POST['my_button3'] == "maskBox3_but"){
			if(!empty($_POST["maskBox3_name"])){
				echo "maskBox3_name不为空";
			}else{
				echo "maskBox3_name为空";
			}
			if(!empty($_POST["maskBox3_betting"])){
				echo "maskBox3_betting不为空";
			}else{
				echo "maskBox3_betting为空";
			}		
		}
		
		if(isset($_POST['my_button4']) && $_POST['my_button4'] == "maskBox4_but"){
			if(!empty($_POST["maskBox4_name"])){
				echo "maskBox4_name不为空";
			}else{
				echo "maskBox4_name为空";
			}	
			if(!empty($_POST["maskBox4_amount"])){
				echo "maskBox4_amount不为空";
			}else{
				echo "maskBox4_amount为空";
			}	
		}
		
		if(isset($_POST['my_button5']) && $_POST['my_button5'] == "maskBox5_but"){
			if(!empty($_POST["maskBox5_name"])){
				echo "maskBox5_name不为空";
			}else{
				echo "maskBox5_name为空";
			}
			if(!empty($_POST["maskBox5_strn"])){
				echo "maskBox5_strn不为空";
			}else{
				echo "maskBox5_strn为空";
			}		
		}
		
		
			
	}else{
		echo '<script type="text/javascript">alert("1会员账号不能为空");history.back();</script>';
	}
	
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;	
	}
?>