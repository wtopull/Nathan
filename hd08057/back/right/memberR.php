<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>会员审核</title>
	<style type="text/css">
		ul{margin:0;list-style: none;}
		tr td{
			font-size:20px !important;
			height:40px;
			line-height:40px;
			border:1px solid #333;
			text-align:center !important;
		}
		tr td.er, span.tg{color:green;}
		tr td.error, span.jj{color:red;}
		.jj{margin-left:90px;}
		tr td.si{color:#FFC400;}
		td input{
			width:20px !important;
			height:20px !important;
			margin:0px !important;
			padding:0px !important;
		}
		th{border-top:1px solid #333;}
		div.centent{background:#fff;padding-top:30px;}
		th{font-size: 24px;text-align:center;font-weight:bold;height:40px;line-height:40px;}
	</style>
</head>
<body>
	<?php
//		$conn = new mysqli("23.252.160.209:49670","yuancheng","Yi_yclink%9494","hot_centerdb");
		$conn = new mysqli("localhost", "asd", "asdasd", "my_item");
		$conn -> query('set names utf8');
		if ($conn -> connect_error) {
			die("NO");
		}
		$sql = "SELECT *FROM avia_shenqing";
		$result = $conn -> query($sql);
	?>
	<div class="centent">
		<h3 class="course-title">会员审核</h3>
		<table width="100%">
			<tr>
				<th width="20%">会员名</th>
				<th width="20%">会员状态</th>
				<th width="25%">状态设置</th>
				<th width="10%">会员级别</th>
			</tr>
			<?php
				if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
			?>
			<tr>
				<td width="20%" class="one"><?php echo $row['avia_username'];?></td>
				<td width="20%" class="er_error er"><?php echo $row['avia_state'];?></td>
				<td width="25%" class="san">
					<span class="tg">通过</span><input type="radio" name="hehe" id="" value="通过" checked/>
					<span class="jj">拒绝 </span><input type="radio" name="hehe" id="" value="拒绝" />
				</td>
				<td width="15%" class="si"><?php echo $row['avia_dengji'];?></td>
			</tr>
			<?php
					}
				}
			?>
		</table>
	</div>
	<script src="../js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$("td.san input").on("click",function(){
			var inputVal = $(this).val();
			if(inputVal=="通过"){
				$(this).parents().siblings(".er_error").html("通过").addClass("er").removeClass("error");
				
			}else if(inputVal=="拒绝"){
				$(this).parents().siblings(".er_error").html("拒绝").addClass("error").removeClass("er");
			}
		});
	</script>
</body>
</html>