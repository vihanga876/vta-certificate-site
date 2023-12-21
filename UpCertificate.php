<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

  <link href="bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="bootstrap-5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <?php

    if(isset($_REQUEST['cerId'])){
        include('include/connection.php');
    
        $query="SELECT * FROM student_certificate where CSerialNumber='$_REQUEST[cerId]'";
        $result=mysqli_query($con,$query);
    
        while($row=mysqli_fetch_assoc($result)){
    
     $cerialN=$row['CSerialNumber'];
     $NIC=$row['StudentNIC'];
     $BSerialN=$row['BSerialNumber'];
     $eDate=$row['EDate'];
    
        }
        ?>

  <div class="field3">
    <form action="include/UpCerificate.php" class="main3 border border-2" method="POST">
      <a href="certificate.php" type="submit" class="btn btn-primary"><i class="fa fa-chevron-left"
          aria-hidden="true"></i> Back</a>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Certificate Serial Number</label>
        <input type="text" class="form-control" id="exampleInputEmail1" readonly name="serialNum" value="<?php echo $cerialN ?>">

      </div>

      <div class="mb-3">

        <label for="exampleInputPassword1" class="form-label">Student NIC</label>
        <!-- <select class="form-select" aria-label="Default select example" name="stNic"> -->
        <input type="text" class="form-control" id="exampleInputEmail1" readonly name="NIC" value="<?php echo $NIC ?>">

          <!-- <option value="">Select the Student NIC</option>
          < ?php
include("include/connection.php");
$query="SELECT * FROM student";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result)){?>

          <option>
            < ?php echo $row['NIC']?>
          </option>

          < ?php
}

?> -->

        <!-- </select> -->
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Update Back Serial Number</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="BSerialNum" value="<?php echo $BSerialN ?>">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Update Effective Date</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="Edate" value="<?php echo $eDate ?>">
      </div>

      <button type="submit" class="btn btn-primary" name="UpdateCer">Update Certificate</button>

      <?php
if(isset($_REQUEST['error'])){
    if($_REQUEST['error']==="Alredy"){?>
      <div id="passwordHelpBlock" style="color:red; font-size: 25px; font-weight: bold; margin-bottom: 25px;"
        class="form-text">
        Data is Added alredy Added
      </div>
      <?php
    }
}
?>

      <button type="reset" class="btn btn-primary">Reset</button>
    </form>
  </div>


<?php
    }
?>

</body>

</html>