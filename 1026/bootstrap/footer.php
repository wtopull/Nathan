    <div class="panel-footer" style="padding-left:24px;">
    	湘ICP备17015289号
    </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$("#collapse").click(function(event){
		if($(this).attr("class")=="navbar-toggle"){
			$(this).attr("class","navbar-toggle collapsed");
			$(this).attr("aria-expanded","false");
			$(".navbar-collapse").attr("class","navbar-collapse collapse in");
			$(".navbar-collapse").attr("aria-expanded","false");
			return false;
		}
	});
	$(document).click(function(event){
		$("#collapse").attr("class","navbar-toggle");
		$("#collapse").attr("aria-expanded","true");
		$(".navbar-collapse").attr("class","navbar-collapse collapse");
		$(".navbar-collapse").attr("aria-expanded","true");
	});
</script>
</body>
</html>