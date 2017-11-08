
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" onsubmit="">
<?php
	$conn = new mysqli("localhost","asd","asdasd","my_item");
	$conn->query('set names utf8');
	if($conn->connect_error){
		die("OK");
	}
	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(!empty($_POST["avia_username"])){
			$user = $_POST["avia_username"];
			$sql = "SELECT*FROM avia_shenqing where info_name='$user'";
			$result = $conn->query($sql);

?>	
	<div class="maskBox">
		<div class="masDiv">
			<img class="img1" src="image/maslog.png"/>
			<p class="p1">申请进度查询</p>
			<div class="before">
				<div class="maLeft">
					<span>请输入会员帐号：</span>
					<input type="text" name="avia_username" id="maskBox_in1" placeholder="填写你的会员账号" />
				</div>
				<div class="maRight">
					<span>选择查询项目：</span>
					<select name="avia_select" class="avia_select" style="color:#7C7C7C;">
						<option value="1">专属域名 私人订制</option>
						<option value="2">新老会员人人可领38彩金</option>
						<option value="3">威尼斯人邀您日进斗金</option>
						<option value="4">签到彩金天天现金回馈 天天免费领</option>
						<option value="5">首存赠送25% 最高可送1999元</option>
						<option value="6">额外返水  每天领取8888彩金</option>
						<option value="7">转运金周周大回馈88888元</option>
						<option value="8">彩票游戏劲爆一 得意彩金天天领</option>
						<option value="9">彩票游戏劲爆二 超级奖上奖</option>
						<option value="10">彩票游戏劲爆三 连赢彩金</option>
						<option value="11">电子游戏劲爆一 电子奖上奖</option>
						<option value="12">电子游戏劲爆二 雪中送碳 天天救援金</option>
						<option value="13">电子游戏劲爆四  倍上加倍彩金</option>
						<option value="14">电子游戏劲爆五  300倍幸运注单彩金</option>
						<option value="15">超级斗地主 激情PK炸弹 领取1888元</option>
						<option value="16">捕鱼王二代每天不计输赢再返8888元</option>
						<option value="17">捕鱼王二代   鱼乐无穷惠不可挡</option>
						<option value="18">百家乐小额投注  连赢奖上再嘉奖</option>
						<option value="19">百家乐智勇大闯关</option>
					</select>
				</div>
				<button type="submit" class="caxun" name="maskBox">点击查询</button>
			</div>
			<a class="maskBoxA" href=""></a>
			<div class="after">
				<table border="1" cellspacing="0" cellpadding="0">
					<tr>
						<th width="118">会员账号</th>
						<th width="244">申请时间</th>
						<th width="119">申请状态</th>
						<th width="119">查看时间</th>
					</tr>
					<?php
						if($result->num_rows>0){
							while($row = $result->fetch_assoc()){
					?>
						<tr class="after_ok">
							<td width="118"><?php echo $row['avia_username']; ?></td>
							<td width="244"><?php echo $row['avia_date']; ?></td>
							<td width="119"><font color="green">通过</font></td>
							<td width="119">点击查看</td>
						</tr>
						<!--<tr class="after_error">
							<td colspan="4">未查询到信息</td>
						</tr>-->
					<?php
							}
						}else{
					?>
					
						<!--<tr class="after_ok">
							<td width="118"><?php echo $row['info_name']; ?></td>
							<td width="244"><?php echo $row['info_date']; ?></td>
							<td width="119"><font color="green">通过</font></td>
							<td width="119">点击查看</td>
						</tr>-->
						
						<tr class="after_error">
							<td colspan="4">未查询到信息</td>
						</tr>
					
					<?php	
						}
						
					?>
				</table>
			</div>
		</div>
	</div>
</form>
<?php
	}}	
?>