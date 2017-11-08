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

			<!--------------pageHeader01------------------>
			<div class="page-header">
				<h2>Web前端课程推荐</h2>
				<p>这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>
			</div>
			<!------------课程选择缩略图------------->
			<div class="row">
<?php
    $conn=new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
    if(!$conn->connect_error){
        $sql="select * from article order by ac_id DESC limit 8;";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
?>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="show.php?showId=<?php echo $row['ac_id'];?>" title="<?php echo $row['ac_title']; ?>"><img src="<?php echo $row['ac_thum']; ?>" alt="<?php echo $row['ac_title']; ?>"></a>
                        <div class="caption">
                            <h4 class="text-info">
                                <a href="show.php?showId=<?php echo $row['ac_id'];?>" title="<?php echo $row['ac_title']; ?>">
                                    <?php echo mb_substr($row['ac_title'],0,12,"UTF8")."…"; ?>
                                </a>
                                <br>
                                <a href="list.php?ac_column=<?php echo $row['ac_column'];?>">
                                    <small>
                                        <?php echo $row['ac_keyword']; ?>
                                    </small>
                                </a>

                            </h4>
                            <p><?php echo mb_substr($row['ac_describe'],0,47,"UTF8")."…"; ?></p>
                        </div>
                    </div>
                </div>
<?php
            }
        }else{
            echo "没有数据";
        }
    }
?>
			</div>
			<!--------------pageHeader02------------------>
			<div class="page-header">
				<h2>Web前端课程推荐</h2>
				<p>这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>
			</div>
			<!-------table-------------->
			<div class="table-responsive" style="margin-bottom: 40px;">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>班级名称</th>
							<th>课时</th>
							<th>价格</th>
							<th>免费试听</th>
							<th>购买课程</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>就业促进计划（面授/封闭/包食宿）</td>
							<td>3个月</td>
							<td>促进价13300.00 <del>原价14800.00</del></td>
							<td><span class="glyphicon glyphicon-headphones"></span> 预约</td>
							<td><a href="#" class="btn btn-danger">立即报名</a></td>
						</tr>
						<tr>
							<td>周末精品班（面授/周末班）</td>
							<td>3个月</td>
							<td>优惠价11840.00 <del>原价14800.00</del></td>
							<td><span class="glyphicon glyphicon-headphones"></span> 预约</td>
							<td><a href="#" class="btn btn-danger">立即报名</a></td>
						</tr>
						<tr>
							<td>建站+SEO（基础+高级）在线网课</td>
							<td>3个月</td>
							<td>优惠价3280.00 <del>原价3660.00</del></td>
							<td><span class="glyphicon glyphicon-headphones"></span> 预约</td>
							<td><a href="#" class="btn btn-danger">立即报名</a></td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-------footer--------->
				<p class="foot_self">
					Copyright©1999-2017 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP备10218183号-88 京ICP证161188号
				</p>
		</div>
		<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
