<?php

if(isset($_REQUEST["reg"])){

include('connection.php');

$name=$_REQUEST['Name'];
$ConfirmPass=md5($_REQUEST['Cpass']);

$query="SELECT * from register where Name='$name'";
$result=mysqli_query($con,$query);

if(mysqli_num_rows($result)>0){
    header("location:../register.php?error=already");
}else{

$query="INSERT INTO register(Name,Password)values('$name','$ConfirmPass')";
$result=mysqli_query($con,$query);
header("location:../index.php");

}




}


?>