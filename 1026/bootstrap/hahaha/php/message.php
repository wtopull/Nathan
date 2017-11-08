<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>错误提示</title>
    <style>
        *{ margin:0; padding:0; }
        .tip{ position:absolute; top:50%; left:50%; width:500px; height:200px; border:1px solid #ccc; margin:-100px 0 0 -250px; }
        .tip h3{ text-align:center; background:#ccc; line-height:2; color:darkred; }
        .tip p{ text-align:center; margin-top:60px; font-size:18px; }
        .tip p a{ padding:0 6px; }
        .tip p span{ color:red; }
    </style>
</head>
<body>
<div class="tip">
    <h3>错误提示</h3>
    <p><?php echo $msg; ?><a href="<?php echo $url; ?>">返回</a><span>5</span>秒后自动跳转</p>
</div>
<script>
/*    var oA=document.getElementsByTagName("a")[0];
    var oSpan=document.getElementsByTagName("span")[0];
    var second=parseInt(oSpan.innerHTML);
    var timer=setInterval(function(){
        second--;
        oSpan.innerHTML=second;
        if(second==0){
            window.location=oA.href;
        }
    },1000);*/
</script>
</body>
</html>