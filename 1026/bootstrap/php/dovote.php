<?php
	$q=$_REQUEST["q"];
	$dir = "vote.txt";
	echo $dir;
	$vote=file_get_contents($dir);
	$arrVote = explode("|",$vote);
	switch($q){
		case 1:
			$arrVote[0]++;
			break;
		case 2:
			$arrVote[1]++;
			break;
		case 3:
			$arrVote[2]++;
			break;
		case 4:
			$arrVote[3]++;
			break;
		case 5:
			$arrVote[4]++;
			break;
		case 6:
			$arrVote[5]++;
			break;
		case 7:
			$arrVote[6]++;
			break;
	}
	$str = implode("|",$arrVote);
	file_put_contents($dir,$str);
	$num = 0;
	for($i=0; $i<count($arrVote); $i++){
		$num= $num+$arrVote[$i];
	}
?>

<div class="projects-header page-header">
       <h2>各个科目受欢迎的百分比</h2>
       <p>此数据来自网络<?php echo $num; ?>份用户投票结果</p>
    </div>
    <h3>PC端网站重构（<?php echo round(($arrVote[0]/$num)*100,2); ?>%）<?php echo $arrVote[0]; ?></h3>
    <div class="progress">
      <div class="progress-bar <?php 
	  	$color1 = round(($arrVote[0]/$num)*100,2);
	  	if($color1<=25){
			echo "progress-bar-danger";
		}else if($color1>25 && $color1<=50){
			echo "progress-bar-warning";
		}else if($color1>50 && $color1<=75){
			echo "progress-bar-info";
		}else if($color1>75){
			echo "progress-bar-success";
		}
	  ?> progress-bar-striped" role="progressbar" aria-valuenow="<?php echo round(($arrVote[0]/$num)*100,2); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arrVote[0]/$num)*100,2); ?>%">
      </div>
    </div>
    <h3>移动端网站重构（<?php echo round(($arrVote[1]/$num)*100,2); ?>%）<?php echo $arrVote[1]; ?></h3>
    <div class="progress">
      <div class="progress-bar <?php 
	  	$color2 = round(($arrVote[1]/$num)*100,2);
	  	if($color2<=25){
			echo "progress-bar-danger";
		}else if($color2>25 && $color2<=50){
			echo "progress-bar-warning";
		}else if($color2>50 && $color2<=75){
			echo "progress-bar-info";
		}else if($color2>75){
			echo "progress-bar-success";
		}
	  ?> progress-bar-striped" role="progressbar" aria-valuenow="<?php echo round(($arrVote[1]/$num)*100,2); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arrVote[1]/$num)*100,2); ?>%">
        <span class="sr-only">40%</span>
      </div>
    </div>
    <h3>JavaScript（<?php echo round(($arrVote[2]/$num)*100,2); ?>%）<?php echo $arrVote[2]; ?></h3>
    <div class="progress">
      <div class="progress-bar <?php 
	  	$color3 = round(($arrVote[2]/$num)*100,2);
	  	if($color3<=25){
			echo "progress-bar-danger";
		}else if($color3>25 && $color3<=50){
			echo "progress-bar-warning";
		}else if($color3>50 && $color3<=75){
			echo "progress-bar-info";
		}else if($color3>75){
			echo "progress-bar-success";
		}
	  ?> progress-bar-striped" role="progressbar" aria-valuenow="<?php echo round(($arrVote[2]/$num)*100,2); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arrVote[2]/$num)*100,2); ?>%">
        <span class="sr-only">75%</span>
      </div>
    </div> 
    <h3>JQuery（<?php echo round(($arrVote[3]/$num)*100,2); ?>%）<?php echo $arrVote[3]; ?></h3>
    <div class="progress">
      <div class="progress-bar <?php 
	  	$color4 = round(($arrVote[3]/$num)*100,2);
	  	if($color4<=25){
			echo "progress-bar-danger";
		}else if($color4>25 && $color4<=50){
			echo "progress-bar-warning";
		}else if($color4>50 && $color4<=75){
			echo "progress-bar-info";
		}else if($color4>75){
			echo "progress-bar-success";
		}
	  ?> progress-bar-striped" role="progressbar" aria-valuenow="<?php echo round(($arrVote[3]/$num)*100,2); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arrVote[3]/$num)*100,2); ?>%">
        <span class="sr-only">50%</span>
      </div>
    </div>
    <h3>Bootstrap（<?php echo round(($arrVote[4]/$num)*100,2); ?>%）<?php echo $arrVote[4]; ?></h3>
    <div class="progress">
      <div class="progress-bar <?php 
	  	$color5 = round(($arrVote[4]/$num)*100,2);
	  	if($color5<=25){
			echo "progress-bar-danger";
		}else if($color5>25 && $color5<=50){
			echo "progress-bar-warning";
		}else if($color5>50 && $color5<=75){
			echo "progress-bar-info";
		}else if($color5>75){
			echo "progress-bar-success";
		}
	  ?> progress-bar-striped" role="progressbar" aria-valuenow="<?php echo round(($arrVote[4]/$num)*100,2); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arrVote[4]/$num)*100,2); ?>%">
        <span class="sr-only">30%</span>
      </div>
    </div>
    <h3>Angular（<?php echo round(($arrVote[5]/$num)*100,2); ?>%）<?php echo $arrVote[5]; ?></h3>
    <div class="progress">
      <div class="progress-bar <?php 
	  	$color6 = round(($arrVote[5]/$num)*100,2);
	  	if($color6<=25){
			echo "progress-bar-danger";
		}else if($color6>25 && $color6<=50){
			echo "progress-bar-warning";
		}else if($color6>50 && $color6<=75){
			echo "progress-bar-info";
		}else if($color6>75){
			echo "progress-bar-success";
		}
	  ?> progress-bar-striped" role="progressbar" aria-valuenow="<?php echo round(($arrVote[5]/$num)*100,2); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arrVote[5]/$num)*100,2); ?>%">
        <span class="sr-only">55%</span>
      </div>
    </div>
    
    <h3>H5高级课程（<?php echo round(($arrVote[6]/$num)*100,2); ?>%）<?php echo $arrVote[6]; ?></h3>
    <div class="progress">
      <div class="progress-bar <?php 
	  	$color7 = round(($arrVote[6]/$num)*100,2);
	  	if($color7<=25){
			echo "progress-bar-danger";
		}else if($color7>25 && $color7<=50){
			echo "progress-bar-warning";
		}else if($color7>50 && $color7<=75){
			echo "progress-bar-info";
		}else if($color7>75){
			echo "progress-bar-success";
		}
	  ?> progress-bar-striped" role="progressbar" aria-valuenow="<?php echo round(($arrVote[6]/$num)*100,2); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arrVote[6]/$num)*100,2); ?>%">
        <span class="sr-only">90%</span>
      </div>
    </div>