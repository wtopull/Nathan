<?php
	include "header.php";	
?>
<script type="text/javascript">
	function diaoyong(){
		var oVote = document.getElementsByName("optionsRadios");
		var str="";
		for(var i=0;i<oVote.length;i++){
			if(oVote[i].checked){
				str=oVote[i].value;
			}
		}
		//ajax
		if(str==""){
			document.getElementById("vote").innerHTML = "";
			return;
		}
		if(window.XMLHttpRequest){
			var xHttp = new XMLHttpRequest();
		}else{
			var xHttp = new ActiveXObject("Microsoft.XMLHTTP");//JQ可以使用相对地址是能跨域的   
		}
		xHttp.open("get","php/dovote.php?q="+str,true);
		xHttp.send();
		xHttp.onreadystatechange=function(){
			if(xHttp.readyState==4&&xHttp.status==200){
			//xmlhttp.readyState==4  这个指的是xmlhttp的交互状态.为4就是交互完成.
			//200  这个是你xmlhttp与后台交互时返回的一个状态码.  指的是正常交互完成
				document.getElementById("vote").innerHTML = xHttp.responseText;
			}	
		}
	}
</script>
    <ol class="breadcrumb">
      <li><a href="#">首页</a></li>
      <li class="active">投票</li>
    </ol>
    <div id="vote">
	    <div class="projects-header page-header">
	       <h2>请选择你喜欢的课程</h2>
	       <p>你觉得你比较喜欢下列哪个课程，请选择</p>
	    </div>
	    <div class="radio">
	      	<label><input type="radio" name="optionsRadios" id="optionsRadios1" value="1" >PC端网站重构</label>
	    </div>
	    <div class="radio">
	      <label><input type="radio" name="optionsRadios" id="optionsRadios2" value="2">移动端网站重构</label>
	    </div>
	    <div class="radio">
	      <label><input type="radio" name="optionsRadios" id="optionsRadios3" value="3">JavaScript</label>
	    </div>
	    <div class="radio">
	      <label><input type="radio" name="optionsRadios" id="optionsRadios4" value="4">JQuery</label>
	    </div>
	    <div class="radio">
	      <label><input type="radio" name="optionsRadios" id="optionsRadios5" value="5">Bootstrap</label>
	    </div>
	    <div class="radio">
	      <label><input type="radio" name="optionsRadios" id="optionsRadios5" value="6">Angular</label>
	    </div>
	    <div class="radio">
	      <label><input type="radio" name="optionsRadios" id="optionsRadios5" value="7">H5高级课程</label>
	    </div>
	    <input type="submit" value="投票" class="btn btn-success" onclick="diaoyong()">
    </div>
<?php
	include "footer.php";	
?>