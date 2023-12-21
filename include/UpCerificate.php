<?php

if(isset($_REQUEST['UpdateCer'])){
include('connection.php');
    echo $serial=$_REQUEST['serialNum'];
    echo $nic=$_REQUEST['NIC'];
    echo $bSerial=$_REQUEST['BSerialNum'];
    echo $edate=$_REQUEST['Edate'];
    // $query="SELECT * from student where NIC='$nic'";
    // $result=mysqli_query($con,$query);

    // if(mysqli_num_rows($result)>0){
    //     header("location:../Student.php?error=CannotUpdate");
    //     exit();
    // }else{
        $query="UPDATE student_certificate set BSerialNumber='$bSerial',EDate='$edate' where CSerialNumber='$serial'";
        $result=mysqli_query($con,$query);
        header("location:../certificate.php?error=Updated");
    // }
}
?>