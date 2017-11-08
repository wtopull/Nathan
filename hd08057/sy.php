<?php
	header('content-type:text/html;charset=utf-8;');
	include "header.php";	
	$conn = new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
	if($conn->connect_error){
		die("NO");
	}
	$sql = "SELECT *FROM avia_title order by date asc";
	$result = $conn->query($sql); 
?>
<form action="" method="post">
<?php
	include "mask/maskBox.php";
	include "mask/sq1.php";	
	include "mask/sq2.php";	
	include "mask/sq3.php";	
	include "mask/sq4.php";	
	include "mask/sq5.php";	
?>	
</form>

<div class="content">
	<ul class="conUl">
		<?php
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
		?>
		<li class="conLi">
			<img src="<?php echo 'back/'.$row["ac_tu"]; ?>"/>
			<div class="zz">
				<a href="javascript:;"><img class="" src="image/zz.png"/></a>
			</div>
			<p><?php echo $row["ac_title"]; ?></p>
			<button class="">点击申请</button>
		</li>
		<?php
				}
			}	
		?>
	</ul>
</div>
<?php
include "footer.php";	
?>
