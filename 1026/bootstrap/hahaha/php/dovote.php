<?php
    $vote=0;
    if(!empty($_REQUEST["vote"])){
        $vote=$_REQUEST["vote"];
    }
    $old=file_get_contents("../userInfo/vote.txt");
    $arr=explode("|",$old);
    $sum=0;
    for($i=0;$i<count($arr);$i++){
        if($i==($vote-1)){
            $arr[$i]++;
        }
        $sum+=$arr[$i];
    }
    $new=implode("|",$arr);
    file_put_contents("../userInfo/vote.txt",$new);
    function color($n){
        if($n<=25){
            return "progress-bar-danger";
        }elseif($n<=50){
            return "progress-bar-warning";
        }elseif($n<=75){
            return "progress-bar-info";
        }else{
            return "progress-bar-success";
        }
    }
?>
<div class="page-header">
    <h2>各个科目受欢迎的百分比</h2>
    <p>此数据来自网络XXX份用户投票结果</p>
</div>
<div class="pro_self">
    <p>PC端网站重构（<?php echo $arr[0];?>票：<?php echo round(($arr[0]/$sum)*100,2); ?>%）</p>
    <div class="progress">
        <div class="progress-bar <?php echo color($arr[0]); ?> progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arr[0]/$sum)*100,2); ?>%;min-width:2em;">
            <span class="sr-only"><span>20</span>% Complete (success)</span>
        </div>
    </div>
    <p>移动端网站重构（<?php echo $arr[1];?>票：<?php echo round(($arr[1]/$sum)*100,2); ?>%）</p>
    <div class="progress">
        <div class="progress-bar <?php echo color($arr[1]); ?> progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arr[1]/$sum)*100,2); ?>%;min-width:2em;">
            <span class="sr-only"><span>40</span>% Complete</span>
        </div>
    </div>
    <p>JavaScript（<?php echo $arr[2];?>票：<?php echo round(($arr[2]/$sum)*100,2); ?>%）</p>
    <div class="progress">
        <div class="progress-bar <?php echo color($arr[2]); ?> progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arr[2]/$sum)*100,2); ?>%;min-width:2em;">
            <span class="sr-only"><span>75</span>% Complete (warning)</span>
        </div>
    </div>
    <p>JQuery（<?php echo $arr[3];?>票：<?php echo round(($arr[3]/$sum)*100,2); ?>%）</p>
    <div class="progress">
        <div class="progress-bar <?php echo color($arr[3]); ?> progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arr[3]/$sum)*100,2); ?>%;min-width:2em;">
            <span class="sr-only"><span>50</span>% Complete (danger)</span>
        </div>
    </div>
    <p>Bootstrap（<?php echo $arr[4];?>票：<?php echo round(($arr[4]/$sum)*100,2); ?>%）</p>
    <div class="progress">
        <div class="progress-bar <?php echo color($arr[4]); ?> progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arr[4]/$sum)*100,2); ?>%;min-width:2em;">
            <span class="sr-only"><span>30</span>% Complete</span>
        </div>
    </div>
    <p>Angular（<?php echo $arr[5];?>票：<?php echo round(($arr[5]/$sum)*100,2); ?>%）</p>
    <div class="progress">
        <div class="progress-bar <?php echo color($arr[5]); ?> progress-bar-striped active" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arr[5]/$sum)*100,2); ?>%;min-width:2em;">
            <span class="sr-only"><span>55</span>% Complete (warning)</span>
        </div>
    </div>
    <p>H5高级课程（<?php echo $arr[6];?>票：<?php echo round(($arr[6]/$sum)*100,2); ?>%）</p>
    <div class="progress">
        <div class="progress-bar <?php echo color($arr[6]); ?> progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arr[6]/$sum)*100,2); ?>%;min-width:2em;">
            <span class="sr-only"><span>90</span>% Complete (danger)</span>
        </div>
    </div>
</div>
