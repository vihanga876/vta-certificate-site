<?php

if(isset($_REQUEST['Update'])){
include('connection.php');
    $nic=$_REQUEST['Stnic'];
    $name=$_REQUEST['stname'];
    $conact=$_REQUEST['num'];

    // $query="SELECT * from student where NIC='$nic'";
    // $result=mysqli_query($con,$query);

    // if(mysqli_num_rows($result)>0){
    //     header("location:../Student.php?error=CannotUpdate");
    //     exit();
    // }else{
        $query="UPDATE student set NIC='$nic',Name='$name',Mobile='$conact' where NIC='$nic'";
        $result=mysqli_query($con,$query);
        header("location:../Student.php?error=Updated");
    // }
}
?>