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
		line-height:50px !important;
	}
	td img{
		width:100px;
		height:50px;
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
	$sql = "SELECT *FROM avia_title  order by date asc";
	$result = $conn -> query($sql);
?>
<table class="table table-hover">
	<thead>
		<tr>
			<th width="10%">￥</th>
			<th width="40%">优惠项目</th>
			<th width="30%">优惠状态</th>
			<th width="20%">修改时间</th>
		</tr>
	</thead>
	<tbody>
		<?php
			if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
		?>
		<tr>
			<td>
				<img src="<?php echo '../../background/'.$row["ac_tu"]; ?>" width="50" height="50" alt="..."/>
			</td>
			<td><?php echo $row["ac_title"]; ?></td>
			<td>
				<!--增加class名： tg是已经开启的颜色
					增加class名： jj是已经关闭的颜色
				-->
				<span class="tg">已经开启 </span><input type="checkbox" name="hehe" id="" value="true" checked disabled/>
				<span class="">&nbsp;&nbsp;&nbsp;已经关闭 </span><input type="checkbox" name="hehe" id="" value="false" disabled/>
			</td>
			<td><?php echo $row["date"]; ?></td>
		</tr>
		<?php
				}
			}
		?>
	</tbody>
</table>

