<?php
	include "header.php";
?>
    <ol class="breadcrumb">
      <li><a href="index.php">首页</a></li>
      <li class="active">搜索</li>
    </ol>
	<form class="form-inline form-search text-center" action="dosearch.php" method="post">
      <div class="form-group">
        <label class="sr-only" for="exampleInputEmail3"></label>
        <input type="text" class="form-control" name="search" id="exampleInputEmail3" placeholder="请输入要搜索的内容">
      </div>
      <input type="submit" class="btn btn-default"  value="搜索">
    </form>
<?php
	include "footer.php";	
?>