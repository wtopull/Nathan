var verifyCode = new GVerify("v_container");
	document.getElementById("my_button").onclick = function(){
		var res = verifyCode.validate(document.getElementById("code_input").value);
		if(res){
			alert("验证正确");
		}else{
			alert("验证码错误");
		}
	}