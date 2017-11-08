<?php
    include "header.php";
?>

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
        <li class="active">注册</li>
    </ol>
    <!--------------注册表单-------------->
    <form class="form-horizontal" id="form1" action="php/registerVerify.php" method="post" onsubmit="return formTest()">
        <div class="form-group">
            <label for="userName" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="userName" name="userName" placeholder="用户名">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">输入密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="输入密码">
            </div>
        </div>
        <div class="form-group">
            <label for="password_sure" class="col-sm-2 control-label">确认密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password_sure" name="password_sure" placeholder="确认密码">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" placeholder="邮箱地址">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">手机号码</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="手机号码">
            </div>
        </div>
        <div class="form-group">
            <label for="province" class="col-sm-2 control-label">地区</label>
            <div class="col-sm-10">
                <select class="form-control" id="province" name="province">
                    <option>请选择省份</option>
                    <option>广东省</option>
                    <option>广西省</option>
                    <option>湖南省</option>
                    <option>湖北省</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">性别</label>
            <div class="col-sm-10">
                <label class="radio-inline" for="man">
                    <input type="radio" name="sex" id="man" value="男" checked> 男
                </label>
                <label class="radio-inline" for="woman">
                    <input type="radio" name="sex" id="woman" value="女"> 女
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">爱好</label>
            <div class="col-sm-10">
                <label class="checkbox-inline" for="music">
                    <input type="checkbox" name="like[]" id="music" value="音乐" checked> 听音乐
                </label>
                <label class="checkbox-inline" for="tour">
                    <input type="checkbox" name="like[]" id="tour" value="旅游"> 旅游
                </label>
                <label class="checkbox-inline" for="mount">
                <input type="checkbox" name="like[]" id="mount" value="爬山"> 爬山
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="checkbox" name="accept" value="true"> 阅读并接受<a href="#" data-toggle="modal" data-target="#acceptModal"> 《用户协议》</a>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="submit" name="submit" class="btn btn-success" value="注册">
                <button type="reset" name="reset" class="btn btn-default">重置</button>
                <a href="login.php" class="btn btn-danger">已有账号，去登录</a>
            </div>
        </div>
    </form>

    <!----------用户协议模态框----------->
    <div class="modal fade" id="acceptModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">用户注册合同协议</h4>
                </div>
                <div class="modal-body">请务必认真阅读和理解本《用户服务协议》（以下简称《协议》）中规定的所有权利和限制。除非您接受本《协议》条款，否则您无权注册、登录或使用本协议所涉及的相关服务。您一旦注册、登录、使用或以任何方式使用本《协议》所涉及的相关服务的行为将视为对本《协议》的接受，即表示您同意接受本《协议》各项条款的约束。如果您不同意本《协议》中的条款，请不要注册、登录或使用本《协议》相关服务。 本《协议》是用户与“云帮”平台之间的法律协议。
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">不同意</button>
                    <button type="button" class="btn btn-primary">同意</button>
                </div>
            </div>
        </div>
    </div>
    <!---------------footer----------------->
    <p class="foot_self">
        Copyright©1999-2017 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP备10218183号-88 京ICP证161188号
    </p>
</div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/formTest.js"></script>
</body>
</html>