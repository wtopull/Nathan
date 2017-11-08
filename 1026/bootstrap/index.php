<?php
	include "header.php";
	$conn = new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
	if($conn->connect_error){
		die("NO");
	}
	$sql = "SELECT *FROM wenzhang  order by ac_date desc";
	$result = $conn->query($sql); 
?>
      <div class="projects-header page-header">
        <h2>一名WEB前端工程师</h2>
        <p style="color:#999;">每天学习一会儿，每天进步一点儿！</p>
      </div>
      <div class="row">
		<?php
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
		?>
        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail">
            <a href="show.php?showid=<?php echo $row["ac_id"]; ?>" target="_blank" title="<?php echo mb_substr($row['ac_title'],0,8,"UTF8");?>">
            	<img class="lazy" style="width:750px;height:220px;" src="<?php echo 'background/'.$row['ac_thum'];?>" width="300" data-src="<?php echo $row['ac_thum'];?>" alt="<?php echo mb_substr($row["ac_title"],0,11,"UTF8"); ?>"></a>
            <div class="caption">
              <h3>
                <a href="show.php?showid=<?php echo mb_substr($row["ac_id"],0,8,"UTF8"); ?>" target="_blank" title="<?php echo mb_substr($row["ac_title"],0,8,"UTF8"); ?>"><?php echo mb_substr($row["ac_title"],0,8,"utf8");?><br><small><?php echo $row["ac_date"];?></small></a>
              </h3>
              <p>
            	<?php
            		echo mb_substr($row["ac_describe"],0,14,"UTF8");
           		?>
              </p>
            </div>
          </div>
        </div>
        <?php 
        		}
			}
        ?>
	</div>
    <!--<div class="projects-header page-header">
        <h2>一名WEB前端工程师</h2>
        <p>每天学习一会儿，每天进步一点儿</p>
    </div>
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
	            <td>就业精品班（面授/封闭班/包食宿）</td>
	            <td>4个月</td>
	            <td>优惠价17800.00 <del>原价17800.00</del></td>
	            <td><a href="#"><span class="glyphicon glyphicon-headphones"></span> 预约</td></a>
	            <td><a href="#" class="btn btn-danger">立即报名</a></td>
	          </tr>
	          <tr>
	            <td>软件基础网课（网课/远程教学班）</td>
	            <td>96</td>
	            <td>优惠价580.00 <del>原价980.00</del></td>
	            <td><a href="#"><span class="glyphicon glyphicon-headphones"></span> 预约</td></a>
	            <td><a href="#" class="btn btn-danger">立即报名</a></td>
	          </tr>
	          <tr>
	            <td>Dreamweaver网页制作基础</td>
	            <td>41</td>
	            <td>优惠价399.00 <del>原价499.00</del></td>
	            <td><a href="#"><span class="glyphicon glyphicon-headphones"></span> 预约</td></a>
	            <td><a href="#" class="btn btn-danger">立即报名</a></td>
	          </tr>
	         </tbody>
	    </table>
    </div>-->
	
<?php
	include "footer.php";
?>