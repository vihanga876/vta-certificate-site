<?php

include('include/connection.php');
$id=$_REQUEST['repId'];

$query="SELECT * FROM student_certificate where StudentNIC ='$id'";
$result=mysqli_query($con,$query);

if(!mysqli_num_rows($result)>0){

    $query="DELETE FROM student where NIC='$id'";
    $result=mysqli_query($con,$query);
    header('location:student.php?error=deleted');

}
else{
    header("Location:student.php?error=thisStudentHas");
    exit();
}
?>