<?php
$os=$_GET["os"];
$osver=$_GET["osver"];

$deviceid=$_GET["deviceid"];
$cd2 = date("hisa");
$data = 'OS: '.$os.' OS Version: '.$osver.' Device ID: '.$deviceid; 
file_put_contents('posted-data-'.$cd2.'.log',$data);



?>