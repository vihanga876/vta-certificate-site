<?php
$server="nvtibaddegama.tech";
$name="nvtibad1_VUParanawithana";
$password="group4@nvtiBaddegama";
$db="nvtibad1_group4";


$con= mysqli_connect($server,$name,$password,$db);

if(!$con){

die("Connection Faild".mysqli_connect_error());


}


?>