
$(".caxun").on("click",function(){
	if($("#maskBox_in1").val()=="") {
		alert("会员账号不能为空");
		return false;
	}else if($("#maskBox_in1").val()!==""){
		$("div.before").css("display","none");
		$("div.after").css("display","block");
	}
});
function maskBox_in_sq1(){
	if($("#maskBox_sq1_username").val()=="") {
		alert("会员账号不能为空");
		return false;
	}
	if($("#maskBox_sq1_dengji").val()=="") {
		alert("VIP等级不能为空");
		return false;
	}
	if($("#maskBox_sq1_shenqingyuming").val()=="") {
		alert("申请专属域名不能为空");
		return false;
	}
	if($("#maskBox_sq1_beiyongyuming").val()=="") {
		alert("备用专属域名不能为空");
		return false;
	}
	var this_val = $("#maskBox_sq1_username").val();
	console.log(this_val);
	alert("提交成功");
	$(".maskBox1").hide();
	
}
function maskBox_in_sq2(){
	if($("#maskBox_sq2_username").val()=="") {
		alert("会员账号不能为空");
		return false;
	}
	var this_val = $("#maskBox_sq2_username").val();
	alert("提交成功");
	$(".maskBox2").hide();
}
function maskBox_in_sq3(){
	if($("#maskBox_sq3_username").val()=="") {
		alert("会员账号不能为空");
		return false;
	}
	if($("#maskBox_sq3_betting").val()=="") {
		alert("有效投注不能为空");
		return false;
	}
	var this_val = $("#maskBox_sq3_username").val();
	alert("提交成功");
	$(".maskBox3").hide();
}
function maskBox_in_sq4(){
	if($("#maskBox_sq4_username").val()=="") {
		alert("会员账号不能为空");
		return false;
	}
	if($("#maskBox_sq4_amount").val()=="") {
		alert("金额不能为空");
		return false;
	}
	var this_val = $("#maskBox_sq4_username").val();
	alert("提交成功");
	$(".maskBox4").hide();
}
function maskBox_in_sq5(){
	if($("#maskBox_sq5_username").val()=="") {
		alert("会员账号不能为空");
		return false;
	}
	if($("#maskBox_sq5_strn").val()=="") {
		alert("注单编号不能为空");
		return false;
	}
	var this_val = $("#maskBox_sq5_username").val();
	alert("提交成功");
	$(".maskBox5").hide();
}
