/**
 * Created by Administrator on 2017/7/13.
 */
function formTest(){
    var form=document.getElementById("form1");
    var user=form.userName.value;
    var password=form.password.value;
    var password_sure=form.password_sure.value;
    var phone=form.phone.value;
    var email=form.email.value;
    var accept=form.accept.checked;
    //验证用户名
    if(user!=""){
        var reg=/^[0-9a-zA-Z]+$/;
        if(!reg.test(user)){
            alert("用户名必须是字母或数字组成！");
            return false;
        }
    }else{
        alert("用户名不能为空！");
        return false;
    }
    //验证密码
    if(password!=""){
        var reg=/^\w{6}\w*$/;
        if(!reg.test(password)){
            alert("密码至少需六位，且不能由特殊字符组成！");
            return false;
        }
    }else{
        alert("密码不能为空！");
        return false;
    }
    if(password_sure!=""){
        if(password_sure!=password){
            alert("两次密码不相同！");
            return false;
        }
    }else{
        alert("请确认密码！");
        return false;
    }
    //验证邮箱
    if(email!=""){
        var reg=/^\w+@\w+\.\w+$/;
        if(!reg.test(email)){
            alert("邮箱格式不正确！");
            return false;
        }
    }else{
        alert("邮箱不能为空！");
        return false;
    }
    //验证手机号码
    if(phone!=""){
        var reg=/^1(3|4|5|7|8)[0-9]{9}$/;
        if(!reg.test(phone)){
            alert("手机号码格式不正确！");
            return false;
        }
    }else{
        alert("手机号码不能为空！");
        return false;
    }
    //验证是否接受协议
    if(!accept){
        alert("您未接受《用户协议》，注册失败！");
        return false;
    }
    return true;
}