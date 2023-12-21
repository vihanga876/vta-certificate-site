<?php

if(isset($_REQUEST['login'])){
include('connection.php');

echo $name=$_REQUEST['Name'];
echo $pass=md5($_REQUEST['pass']);

$query="SELECT * FROM register where Name='$name' AND Password='$pass'";
$result=mysqli_query($con,$query);

if(mysqli_num_rows($result)>0){

header("location:../firstPage.php");

}else{
    header("location:../index.php?error=invalid");
    exit();
}





}

?>