<?php
$act=$_GET["act"];
if($act=="zz"){
echo @file_get_contents("zz.txt");
}
?>
