<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>注册成功</title>
    <style>
        *{ margin:0; padding:0; }
        .success{ position:absolute; top:50%; left:50%; width:500px; height:400px; border:1px solid #ccc; margin:-200px 0 0 -250px; }
        .success h3{ text-align:center; background:#ccc; line-height:2; color:darkred; }
        .success table{ margin:20px auto; }
        .success td{ font-size:16px; padding:5px; }
        .success p{ text-align:center; margin-top:30px; font-size:18px; }
        .success p a{ padding:0 6px; }
        .success p span{ color:red; }
    </style>
</head>
<body>
<div class="success">
    <h3>注册成功</h3>
    <table>
        <tr><td>用户名：</td><td><?php echo $user; ?></td></tr>
        <tr><td>密码：</td><td><?php echo $password; ?></td></tr>
        <tr><td>Email：</td><td><?php echo $email; ?></td></tr>
        <tr><td>手机号码：</td><td><?php echo $phone; ?></td></tr>
        <tr><td>地区：</td><td><?php echo $province; ?></td></tr>
        <tr><td>性别：</td><td><?php echo $sex; ?></td></tr>
        <tr><td>爱好：</td><td><?php echo $likes; ?></td></tr>
    </table>
    <p><a href="../login.php">登录</a><span>5</span>秒后自动跳转</p>
</div>
<script>
    var oA=document.getElementsByTagName("a")[0];
    var oSpan=document.getElementsByTagName("span")[0];
    var second=parseInt(oSpan.innerHTML);
    var timer=setInterval(function(){
        second--;
        oSpan.innerHTML=second;
        if(second==0){
            window.location=oA.href;
        }
    },1000);
</script>
</body>
</html>