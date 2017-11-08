function yzm(v_cont,code_in,but){
	var verifyCode = new GVerify(v_cont);
	$(but).on("click",function(){
		var res = verifyCode.validate($(code_in).val());
		if(res){
			alert("验证正确");
		}else{
			alert("验证码错误");
		}
	});
}
yzm("v_container1",".code_input",".my_button1");
yzm("v_container2",".code_input",".my_button2");
yzm("v_container3",".code_input",".my_button3");
yzm("v_container4",".code_input",".my_button4");
yzm("v_container5",".code_input",".my_button5");
