<?php
	include "header.php";
?>
<script>
	function getChange(page){
		if(page==undefined){
			page=1;
		}
		var selct = document.getElementsByName("zone")[0];
	    val = selct.value;
	    
		if(window.XMLHttpRequest){
			var xHttp = new XMLHttpRequest();
		}else{
			var xHttp = new ActiveXObject("Microsoft.XMLHTTP");	
		}
		xHttp.open("GET","ajax_change.php?q="+val+"&p="+page,true);
		xHttp.send();
		xHttp.onreadystatechange=function(){
			if(xHttp.readyState==4&&xHttp.status==200){
				document.getElementById("strName").innerHTML = xHttp.responseText;
			}	
		}
	}
window.onload=function(){
	getChange();
} 
</script>
    <ol class="breadcrumb">
      	<li><a href="index.php">首页</a></li>
      	<li class="active"><a href="category.php">前端资讯</a></li>
    </ol>
	<div class="dropdown projects-header page-header">
      	<select name="zone" onChange="getChange()">
	      	<option value="请选择您要查询的课程">请选择您要查询的课程</option>
	      	<option value="WEB前端开发">Web前端开发</option>
	      	<option value="零零碎碎">零零碎碎</option>
	      	<option value="PHP开发">PHP开发</option>
	      	<option value="JavaScript">JavaScript</option>
	      	<option value="JQueery">JQueery</option>
	      	<option value="Angular">Angular</option>
	      	<option value="插件">插件</option>
	    </select>
    </div>
	<div id="strName"></div>
<?php include "footer.php" ?>