<?php
$zz=$_GET["zz"];
if($zz=="无至尊"){
file_put_contents("zz.txt","0");
echo '<script language="javascript"> alert("无至尊修改成功");</script>';
}
if($zz=="至尊9"){
file_put_contents("zz.txt","QPe7/0h+JlipmrPu6bo1JAQoEBiq40nIjWRbh8FMwbCQiVZ7+2SwMtrFFef9qX4uqlUNeY/f6rhHhoGxfmhDgvQydV0hCJxKA+w1tUz4i96iHOJEiVGznmPfjwhMeo+omUIAKn3Bmnc=");
echo '<script language="javascript"> alert("至尊9修改成功");</script>';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>传奇后台系统</title>
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
	font-family: 微软雅黑;
	background: url(img/bg.gif);
	margin-left: auto;
	margin-right: auto;
	margin-TOP: 100PX;
	width: 20em;
}
.baoliu {
	margin-left: 83px;
	color: #666
}

</style>
</head>
<body>
<form action="cqht.php" method="get">
 <input type="hidden" >
 <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">传奇后台</h3></div>
        <div class="panel-body">

  <div class="form-group">
  <div class="col-xs-12"><input type="submit" name="zz" value="无至尊" class="btn btn-primary form-control"/></div></div></br></br>
  <div class="col-xs-12"><input type="submit" name="zz" value="至尊9" class="btn btn-primary form-control"/></div></br></br>

  
</form>
  </body>
</html>
