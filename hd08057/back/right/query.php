<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	ul {
		list-style: none;
		margin:0;
	}
	th{
		text-align:center !important;
		border-right: 1px solid #999;
		font-size: 24px;
	}
	td{
		text-align:center !important;
		border-right: 1px solid #999;
		line-height:30px !important;
	}
	tr td.er, span.tg{
		color:green;
	}
	tr td.error, span.jj{
		color:red;
	}
	table{
		background:#fff;
	}
</style>
<?php
//	$conn = new mysqli("23.252.160.209:49670","yuancheng","Yi_yclink%9494","hot_centerdb");
	$conn = new mysqli("localhost", "asd", "asdasd", "my_item");
	$conn -> query('set names utf8');
	if ($conn -> connect_error) {
		die("NO");
	}
	$sql = "SELECT *FROM avia_title";
	$result = $conn -> query($sql);
?>
<table class="table table-hover">
	<thead>
		<tr>
			<th width="30%">优惠项目</th>
			<th width="20%">开启优惠</th>
			<th width="20%">关闭优惠</th>
			<th width="30%">更新记录</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
			if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $row["ac_title"]; ?></td>
			<td>
				<span class="tg">已经开启 </span><input type="checkbox" name="hehe" id="" value="true" checked />
			</td>
			<td>
				<span class="">已经关闭 </span><input type="checkbox" name="hehe" id="" value="false" />
			</td>
			<td><?php echo $row["date"]; ?></td>
		</tr>
		<?php
				}
			}
		?>
	</tbody>
</table>

