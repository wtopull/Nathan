<script type="text/javascript">
		var re = /^[1-9]+[0-9]*]*$/; //判断是否为整数
		var reg = /^0?1[3|4|5|6|7|8|9][0-9]\d{8}$/; //判断手机号码
		var regc = /^([\u4E00-\u9FA5]+,?)+$/; //判断中文
		<!-- 弹出框表单JS -->

		function subForm3() {
			if($("#3_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($("#3_str2").val() == "") {
				alert("VIP等级不能为空");
				return false;
			}
			if($("#3_str3").val() == "") {
				alert("申请专属域名不能为空");
				return false;
			}
			if($("#3_str4").val() == "") {
				alert("备用专属域名不能为空");
				return false;
			}
			if($('#3_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm1() {
			if($("#1_str1").val() == "") {
				alert("会员帐号不能为空");
				return false;
			}
			if($('#1_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm2() {
			if($("#2_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($('#2_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm4() {
			if($("#4_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($('#4_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm5() {
			if($("#5_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($('#5_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm6() {
			if($("#6_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($("#6_str2").val() == "") {
				alert("有效投注不能为空");
				return false;
			}
			if($('#6_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm19() {
			if($("#19_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($("#19_str2").val() == "") {
				alert("填写金额不能为空");
				return false;
			}
			if($('#19_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm7() {
			if($("#7_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($('#7_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm8() {
			if($("#8_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($("#8_str2").val() == "") {
				alert("有效投注不能为空");
				return false;
			}
			if($('#8_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm9() {
			if($("#9_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($("#9_str2").val() == "") {
				alert("注单编号不能为空");
				return false;
			}
			if($('#9_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm10() {
			if($("#10_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($("#10_str2").val() == "") {
				alert("注单编号不能为空");
				return false;
			}
			if($('#10_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm11() {
			if($("#11_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($('#11_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm12() {
			if($("#12_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($("#12_str2").val() == "") {
				alert("注单编号不能为空");
				return false;
			}
			if($('#12_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm13() {
			if($("#13_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($("#13_str2").val() == "") {
				alert("注单编号不能为空");
				return false;
			}
			if($('#13_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm14() {
			if($("#14_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($("#14_str2").val() == "") {
				alert("有效投注不能为空");
				return false;
			}
			if($('#14_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm15() {
			if($("#15_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($("#15_str2").val() == "") {
				alert("有效投注不能为空");
				return false;
			}
			if($('#15_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm16() {
			if($("#16_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($("#16_str2").val() == "") {
				alert("填写金额不能为空");
				return false;
			}
			if($('#16_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm17() {
			if($("#17_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($("#17_str2").val() == "") {
				alert("注单编号不能为空");
				return false;
			}
			if($('#17_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		function subForm18() {
			if($("#18_str1").val() == "") {
				alert("会员账号不能为空");
				return false;
			}
			if($("#18_str2").val() == "") {
				alert("有效投注不能为空");
				return false;
			}
			if($('#18_very_code').val() == "") {
				alert('验证码不能为空');
				return false;
			}
			return true;
		}

		<!-- 弹出框表单JS -->
	</script>