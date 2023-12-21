<?php
if(isset($_REQUEST['addStudent'])){
include('connection.php');
 $nic=$_REQUEST['nic'];
 $name=$_REQUEST['name'];
 $num=$_REQUEST['num'];


    $query="SELECT * FROM student where NIC='$nic'";
    $result=mysqli_query($con,$query);

    if(mysqli_num_rows($result)>0){
        header('location:../studentAdd.php?error=Alredy');
        exit();
        // echo "Alredy";
    }else{
        $query="INSERT Into student(NIC,Name,Mobile)values('$nic','$name','$num')";
        $result=mysqli_query($con,$query);
        header('location:../Student.php?error=stockAdd');
        // echo "ok";
    }
}