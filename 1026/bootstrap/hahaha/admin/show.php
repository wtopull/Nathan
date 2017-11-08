<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title></title>
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <!-- [if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/_self.css" type="text/css" rel="stylesheet">
    <style>
        .a{ color:#337ab7 !important;}
    </style>
</head>
<body>
<?php
session_start();
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
                    <a href="add.php" class="list-group-item a">发布文章</a>
                </div>
            </div>
        </div>
        <div class="col-md-9" style="border-left:1px solid #eaeaea; margin-bottom:50px; ">
            <table class="table">
                <thead>
                    <tr>
                        <th width="40">ID</th>
                        <th width="490">文章标题</th>
                        <th width="210">发布时间</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
<?php
    $cate=$_GET["cate"];
    switch($cate){
        case 1:$value="Web前端开发";break;
        case 2:$value="UI设计";break;
        case 3:$value="PHP开发";break;
        case 4:$value="JAVA开发";break;
        case 5:$value="网络营销";break;
    }
    $conn=new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
    if(!$conn->connect_error){
        $sql="select * from article where ac_column='".$value."';";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
?>
                <tr>
                    <td><?php echo $row["ac_id"]; ?></td>
                    <td><?php echo $row["ac_title"]; ?></td>
                    <td><?php echo $row["ac_date"]; ?></td>
                    <td><a href="update.php?update_id=<?php echo $row["ac_id"]; ?>">修改</a>&nbsp;&nbsp;<a href="php/dodelete.php?del_id=<?php echo $row["ac_id"]; ?>">删除</a></td>
                </tr>
<?php
            }
        }else{
            echo "<tr><td colspan='4'>没有数据</td></tr>";
        }
    }
?>

                </tbody>
            </table>
        </div>
    </div>
    <p class="foot_self">
        Copyright©1999-2017 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP备10218183号-88 京ICP证161188号
    </p>
</div>
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>