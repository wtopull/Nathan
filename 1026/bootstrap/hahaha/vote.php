<?php
    include "header.php";
    $user="";
    if(isset($_SESSION["user"])){
        $user=$_SESSION["user"];
    }
?>
<script>
    function vote(user){
        if(user==""){
            alert("请登录");
            return;
        }
        var inp=document.getElementsByName("vote");
        var data="";
        for(var i=0;i<inp.length;i++){
            if(inp[i].checked){
                data=inp[i].value;
            }
        }
        if(data==""){
            alert("请先选择 再提交！");
            return;
        }
        if(window.XMLHttpRequest){
            var oAjax=new XMLHttpRequest();
        }else{
            var oAjax=new ActiveXObject("Microsoft.XMLHTTP");
        }
        oAjax.open("get","php/dovote.php?vote="+data,true);
        oAjax.send();
        oAjax.onreadystatechange=function(){
            if(oAjax.readyState==4&&oAjax.status==200){
                document.getElementById("voteRes").innerHTML=oAjax.responseText;
            }
        }
    }
</script>
<div class="container">
    <!-----------------------banner----------------------->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="image/zbk_05.jpg" alt="">
            </div>
            <div class="item">
                <img src="image/zbk_05.jpg" alt="">
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-------------路径导航---------------->
    <ol class="breadcrumb">
        <li><a href="index.php">首页</a></li>
        <li class="active">投票</li>
    </ol>
    <!-------------pageHeader01-------------->
    <div id="voteRes">
    <div class="page-header">
        <h2>请选择您喜欢的课程</h2>
        <p>您觉得你比较喜欢下列哪个课程？请选择</p>
    </div>
    <!---------------单选课程--------------->
            <div class="radio">
                <label for="sel01"><input type="radio" id="sel01" name="vote" value="1" >PC端网站重构</label>
            </div>
            <div class="radio">
                <label for="sel02"><input type="radio" id="sel02" name="vote" value="2">移动端网站重构</label>
            </div>
            <div class="radio">
                <label for="sel03"><input type="radio" id="sel03" name="vote" value="3">JavaScript</label>
            </div>
            <div class="radio">
                <label for="sel04"><input type="radio" id="sel04" name="vote" value="4">JQuery</label>
            </div>
            <div class="radio">
                <label for="sel05"><input type="radio" id="sel05" name="vote" value="5">Bootstrap</label>
            </div>
            <div class="radio">
                <label for="sel06"><input type="radio" id="sel06" name="vote" value="6">Angular</label>
            </div>
            <div class="radio">
                <label for="sel07"><input type="radio" id="sel07" name="vote" value="7">H5高级课程</label>
            </div>
            <button class="btn btn-success" onclick="vote('<?php echo $user; ?>')">投票</button>
        </div>

    <!-------------pageHeader02-------------->

    <!----------------进度条---------------->

    <!---------------footer----------------->
    <p class="foot_self">
        Copyright©1999-2017 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP备10218183号-88 京ICP证161188号
    </p>
</div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
