<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"crossorigin="anonymous"></script>

    <link href="bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="bootstrap-5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"crossorigin="anonymous"></script>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
 
<div class="main">



            <div class="h4">
            <a href="firstPage.php" class="btn logout btn-outline-success" type="submit" name="sebtn">Back</a>
            </div>
    <div class="field2">
        <div class="forTable">
            <div class="h3" style="font-size: 40px;">Students Details</div>
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <!-- <a class="navbar-brand">Navbar</a> -->
                  <a href="studentAdd.php" type="button" class="btn btn-primary border-0 bg-success">ADD Students</a>
                  <form class="d-flex" method="post" >
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                    <input class="btn btn-outline-success" type="submit" name="sebtn">
                    <!-- <input type="submit" class="btn btn-primary bg-primary border-0" value="search" name="sub"> -->
                  </form>
                </div>
            </nav>





            <table class="table table-striped table-dark table-hover">
                <thead>
                    <tr>
                    <th>NIC</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th rowspan="2">Edit</th>
                    </tr>
                </thead>
                <?php
include('include/connection.php');
if(isset($_REQUEST['sebtn'])){
$query="SELECT * FROM student where NIC='$_REQUEST[search]'";

$result=mysqli_query($con,$query);
// $row=mysqli_fetch_assoc($result);
 while($row=mysqli_fetch_assoc($result)){
    ?>

                <tbody>
                    <tr>
                        <td>
                            <?php echo $row['NIC'] ;?>
                        </td>
                        <td>
                            <?php echo $row['Name']; ?>
                        </td>
                        <td>
                            <?php echo $row['Mobile']; ?>
                        </td>
                        <td>
                        <a href="upRep.php?repId=<?php echo $row['NIC']?>" class="edit"><button type="button" class="btn btn-outline-light"><i class="fa fa-refresh" aria-hidden="true"></i></button></a>
                        <a href="repDelete.php?repId=<?php echo $row['NIC']?>" class="edit"><button type="button" class="btn btn-outline-light"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        </td>
                    </tr>
                </tbody>


 

<?php
            }


if(isset($_REQUEST['error'])){

   if($_REQUEST['error']==="success"){?>
        <div id="passwordHelpBlock" style="color:rgb(255, 255, 255); font-size: 25px; font-weight: bold; margin-bottom: 25px;" class="form-text">
       Data Added successfully
         </div>
         <?php
    }elseif($_REQUEST['error']==="stockAdd"){?>
        <div id="passwordHelpBlock" style="color:rgb(255, 255, 255); font-size: 25px; font-weight: bold; margin-bottom: 25px;" class="form-text">
      Student is added
         </div>
         <?php
    }elseif($_REQUEST['error']==="CannotUpdate"){?>
        <div id="passwordHelpBlock" style="color:rgb(255, 255, 255); font-size: 25px; font-weight: bold; margin-bottom: 25px;" class="form-text">
     Cannot updated
         </div>
         <?php
    }elseif($_REQUEST['error']==="Updated"){?>
        <div id="passwordHelpBlock" style="color:rgb(255, 255, 255); font-size: 25px; font-weight: bold; margin-bottom: 25px;" class="form-text">
     Update is successfully
         </div>
         <?php
    }

}
    ?>






<?php
}else{


$query="SELECT * FROM student";
$result=mysqli_query($con,$query);
// $row=mysqli_fetch_assoc($result);
 while($row=mysqli_fetch_assoc($result)){
    ?>

                <tbody>
                    <tr>
                        <td>
                            <?php echo $row['NIC'] ?>
                        </td>
                        <td>
                            <?php echo $row['Name'] ?>
                        </td>
                        <td>
                            <?php echo $row['Mobile'] ?>
                        </td>
                        <td>
                        <a href="updateStudent.php?repId=<?php echo $row['NIC']?>" class="edit"><button type="button" class="btn btn-outline-light"><i class="fa fa-refresh" aria-hidden="true"></i></button></a>
                        <a href="deleteStudent.php?repId=<?php echo $row['NIC']?>" class="edit"><button type="button" class="btn btn-outline-light"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        </td>
                    </tr>
                </tbody>

                <?php
}

}
?>

    


            </table>



           
            <?php
if(isset($_REQUEST['error'])){

   if($_REQUEST['error']==="success"){?>
        <div id="passwordHelpBlock" style="color:rgb(255, 255, 255); font-size: 25px; font-weight: bold; margin-bottom: 25px;" class="form-text">
       Data Added successfully
         </div>
         <?php
    }elseif($_REQUEST['error']==="stockAdd"){?>
        <div id="passwordHelpBlock" style="color:rgb(255, 255, 255); font-size: 25px; font-weight: bold; margin-bottom: 25px;" class="form-text">
      Student is added
         </div>
         <?php
    }elseif($_REQUEST['error']==="CannotUpdate"){?>
        <div id="passwordHelpBlock" style="color:rgb(255, 255, 255); font-size: 25px; font-weight: bold; margin-bottom: 25px;" class="form-text">
     Cannot updated
         </div>
         <?php
    }elseif($_REQUEST['error']==="Updated"){?>
        <div id="passwordHelpBlock" style="color:rgb(255, 255, 255); font-size: 25px; font-weight: bold; margin-bottom: 25px;" class="form-text">
     Update is successfully
         </div>
         <?php
    }
    
}
?>
        </div>
            
        
        </div>

        
        <!-- <div class="next-tebla">
            <a href="stock.php"><Button  class="next">Next</Button> </a>
        </div> -->



    </div>
    </div>

</body>

</html>