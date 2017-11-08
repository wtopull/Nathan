<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>后台信息系统-添加文章</title>
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <!-- [if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="../umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="../umeditor/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="../umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="../umeditor/lang/zh-cn/zh-cn.js"></script>
    <link href="../css/_self.css" type="text/css" rel="stylesheet">
    <style>
        .a{ color:#337ab7 !important;}
    </style>
</head>
<body>
<?php
    session_start();
    if(!isset($_SESSION["admin"])){
        echo "<script>";
        echo "alert('请登录！');";
        echo "window.location='login.html';";
        echo "</script>";
        exit;
    }
?>
    <div class="container">
        <div class="page-header">
            <h1>后台信息系统 <small>欢迎您：<?php echo $_SESSION["admin"];?></small></h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">文章栏目</div>
                    <div class="list-group">
                        <a href="show.php?cate=1" class="list-group-item a">Web前端开发</a>
                        <a href="show.php?cate=2" class="list-group-item a">UI设计</a>
                        <a href="show.php?cate=3" class="list-group-item a">PHP开发</a>
                        <a href="show.php?cate=4" class="list-group-item a">JAVA开发</a>
                        <a href="show.php?cate=5" class="list-group-item a">网络营销</a>
                        <a href="addArticle.php" class="list-group-item a">发布文章</a>
                    </div>
                </div>
            </div>
<?php
    if(!empty($_GET["update_id"])){
        $update_id=$_GET["update_id"];
        $conn=new mysqli("localhost","root","asdasd","my_item");
        $conn->query('set names utf8');
        if($conn->connect_error){
            die("数据库连接失败！");
        }
        $sql="select * from article where ac_id='$update_id';";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
?>
            <div class="col-md-9" style="border-left:1px solid #eaeaea; margin-bottom:50px; ">
                <form method="post" action="php/doupdate.php?update_id=<?php echo $update_id; ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="ac_title">文章标题</label>
                        <input type="text" class="form-control" id="ac_title" name="ac_title" placeholder="文章标题" value="<?php echo $row['ac_title'];?>">
                    </div>
                    <div class="form-group">
                        <label for="ac_column">栏目名称</label>
                        <select class="form-control" id="ac_column" name="ac_column">
                            <option><?php echo $row['ac_column']?></option>
                            <option>Web前端开发</option>
                            <option>UI设计</option>
                            <option>PHP开发</option>
                            <option>JAVA开发</option>
                            <option>网络营销</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ac_desc">文章描述</label>
                        <textarea class="form-control" id="ac_desc" name="ac_desc" rows="3" ><?php echo $row['ac_describe']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="ac_keyword">关键字</label>
                        <input type="text" class="form-control" id="ac_keyword" name="ac_keyword" placeholder="关键字" value="<?php echo $row['ac_keyword']?>">
                    </div>
                    <div class="form-group">
                        <label for="myEditor">文章内容</label>
                        <script type="text/plain" id="myEditor" style="width:845px;height:240px;">
                            <p><?php echo $row['ac_content'];?></p>
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="ac_thum">上传缩略图</label>
                    <input type="file" id="ac_thum" name="ac_thum">
                            <input type="hidden" name="img" value="<?php echo $row['ac_thum'];?>">
                    </div>
                    <input type="submit" class="btn btn-success" value="修改文章">
                    <input type="reset" class="btn btn-danger" value="重置内容">
                </form>
            </div>
        </div>
<?php
            }
        }
    }
?>
        <p class="foot_self">
            Copyright©1999-2017 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP备10218183号-88 京ICP证161188号
        </p>
    </div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
    var um = UM.getEditor('myEditor');
</script>
</body>
</html>