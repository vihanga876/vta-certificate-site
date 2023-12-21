<?php

include('include/connection.php');
$id=$_REQUEST['cerId'];

// $query="SELECT * FROM student_certificate where StudentNIC ='$id'";
// $result=mysqli_query($con,$query);

// if(!mysqli_num_rows($result)>0){
// 
    $query="DELETE FROM student_certificate where CSerialNumber='$id'";
    $result=mysqli_query($con,$query);
    header('location:certificate.php?error=deleted');

// }
// else{
    // header("Location:student.php?error=thisStudentHas");
    // exit();
// }
?>