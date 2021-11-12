<?php



error_reporting(0);

// input fields 
$employee = input_field($_POST["Employee"]);
$name = input_field($_POST["name"]);




// error variables 
$employeeErr = $nameErr =  "";

// validation
if (isset($_POST["next"])) {

  // Employee validation 
  if (empty($employee)) {
    $employeeErr = "Please Select your Option.";
  }


    // name validation 
    if (empty($name)) {
        $nameErr = "Name is required.";
    } else if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $nameErr = "Only Characters and white spaces are allowed.";
    } 

  

    if ($nameErr === "" && $employeeErr === "") 
    {
        
      setcookie('employee',$employee,time()+3600*24);
      setcookie('name',$name,time()+3600*24);
      header("location:Feedback2.php");
                
    }
       
  
}

if (isset($_POST["previous"])) {
    header("Location:Index1.php");
}


// trim function 
function input_field($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

      

    <title>Feedback</title>

    
    
    
  </head>
  <body>
    <?php
    include('Nav.php');
    ?>


   <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-2">Feedback</h1>
            <h4 class="display-4">Step 1</h4>
            </div>
      </div> 

      
              
  <!--Feedback Form -->
      <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.jpg');">
              <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                      <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                    

                      <form method="post" enctype="multipart/form-data">

                      

                        <div class="form-outline mb-4">
                          <h5>Are you a Current or Former Employee?</h5>
                        <input type="radio" id="current" name="Employee" value="CURRENT">
                        <label for="current">Current</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="former" name="Employee" value="FORMER">
                        <label for="former">Former</label>
                        <small id="err" class="form-text text-danger"><?php echo $employeeErr; ?></small>
                        </div>
                        

                        <div class="form-outline mb-4">
                          <input type="text" id="name" class="form-control form-control-lg" name="name"/>
                          <label class="form-label" for="name">Name</label>
                          <small id="err" class="form-text text-danger"><?php echo $nameErr; ?></small>
                        </div>

                        <div class="d-flex justify-content-center">
                        <input type="submit" class="btn btn-success " value="PREVIOUS" name="previous"></input>&nbsp;&nbsp;
                          <input type="submit" class="btn btn-success " value="NEXT" name="next"></input>
                          
                          
                        </div>

                        

                        

                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
            
    <?php
    include('Footer.php')
    ?>
    
    
       

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>