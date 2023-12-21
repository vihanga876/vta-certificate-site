<?php
if(isset($_REQUEST['addCertificate'])){
include('connection.php');

 $CSerialNumber=$_REQUEST['serialNum'];
 $StudentNIC=$_REQUEST['stNic'];
 $BSerialNumber=$_REQUEST['BSerialNum'];
 $EDate=$_REQUEST['Edate'];


    $query="SELECT * FROM student_certificate where CSerialNumber='$CSerialNumber' || StudentNIC='$StudentNIC'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        header('location:../certificateADD.php?error=Alredy');
        exit();
        // echo "Alredy";
    }else{
        $query="INSERT Into student_certificate(CSerialNumber,StudentNIC,BSerialNumber,EDate)values('$CSerialNumber','$StudentNIC','$BSerialNumber','$EDate')";
        $result=mysqli_query($con,$query);
        header('location:../certificate.php?error=stockAdd');
        // echo "ok";
    }


// }
    

    








}


?>