<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">

</head>
<body>
   

<div class="main">


<div class="field2">
<img src="img/student.jpg" alt="">
</div>

<form class="field border border-4 border-start-0" name="myForm" action="include/regBack.php" onsubmit=" return myFunction()" method="post">

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label fw-bold fs-3"><img src="img/logo.png" class="img">NVQ Attestation System</label>
</div>
  <div class="mb-3">

    <input type="text" class="form-control" id="Email" aria-describedby="emailHelp" name="Name">  
    <label for="exampleInputEmail1" class="form-label fw-bold">Name</label>
  </div>
  <div class="mb-3">
   
    <input type="password" class="form-control" id="PasswordId">
    <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
  </div>


  
  <div class="mb-3">
    <input type="password" class="form-control" id="Confirmpassword" name="Cpass">
    <label for="exampleInputPassword1" class="form-label fw-bold">Confirm Password</label>
  </div>


  <label class="form-check-label fs-5 text-danger" for="exampleCheck1" id="confirm"></label><br>


  <!-- <div class="mb-3 form-check"> -->
    <label class="form-check-label" for="exampleCheck1"><a href="index.php">Sing Up<a></label><br><br>

  <!-- </div> -->


  <button type="submit" class="btn" name="reg">Submit</button>

</form>


</div>



<script type="text/javascript">

function myFunction(){

let error=document.getElementById('confirm');



if(document.myForm.Email.value==""){
  error.innerText="Enter the Name";
  document.myForm.Email.focus();
  return false
}else if(document.myForm.PasswordId.value==""){
  
error.innerText="Enter the Password";
document.myForm.PasswordId.focus();
return false;

}else if(document.myForm.Confirmpassword.value==""){

error.innerText="Please enter the Confirm password";
document.myForm.Confirmpassword.focus();
return false

}else if(document.myForm.PasswordId.value!=document.myForm.Confirmpassword.value){

error.innerText="Enter the correct password";
document.myForm.Confirmpassword.focus();
return false;


}else{

  return true;
}


// else{

//   return true;
// }

}


</script>


</body>
</html>