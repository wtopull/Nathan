<?php
//	$conn = new mysqli("23.252.160.209:49670","yuancheng","Yi_yclink%9494","hot_centerdb");
	$conn = new mysqli("localhost","asd","asdasd","my_item");
	if($conn->connect_error){
		die($conn->connect_error);
	}
	$sql = "SELECT *FROM avia_title";
	$result = $conn->query($sql);
	
?>
<ul class="footer_RigUl">
	<?php
		if($result->num_rows>0){
			while($row = $result->fetch_assoc()){
	?>
	<li>恭喜会员：<span>wu**8<?php echo $row["name"]; ?></span>成功办理<i><?php echo $row["conter"];?>签到彩金天天现金回馈天天免费领</i></li>
	<?php
			}
		}	
	?>
</ul>