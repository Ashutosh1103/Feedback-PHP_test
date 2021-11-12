<?php
error_reporting(0);
 
if (isset($_POST["previous"])) {
    header("Location:Feedback3.php");
}

if (isset($_POST["logout"])) {
    header("Location:Index.php");
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

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

      

    <title>Review</title>

    
    
    
  </head>
  <body>
   <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-2">Review</h1>
            
            </div>
      </div> 

      
              
  
      <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.jpg');">
              <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                      <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                    
                    <form method="post">
                      
                    <table class="table">
                        <thead>


                       

                            <tr>
                           
                            <th scope="col">Are you a current or former employee?</th>
                            <th scope="col"><?php echo $_COOKIE['employee']; ?></th>
                            
                            </tr>
                        
                       
                            <tr>
                            <th scope="col">Employer's Name</th>
                            <th scope="col"><?php echo $_COOKIE['name']; ?></th>
                            </tr>

                            <tr>
                            <th scope="col">Employment Status</th>
                            <th scope="col"><?php echo $_COOKIE['employment']; ?></th>
                            </tr>

                            <tr>
                            <th scope="col">Job</th>
                            <th scope="col"><?php echo $_COOKIE['job']; ?></th>
                            </tr>

                            <tr>
                            <th scope="col">Review</th>
                            <th scope="col"><?php echo $_COOKIE['review']; ?></th>
                            </tr>

                            <tr>
                            <th scope="col">Pros</th>
                            <th scope="col"><?php echo $_COOKIE['pros']; ?></th>
                            </tr>

                            <tr>
                            <th scope="col">Cons</th>
                            <th scope="col"><?php echo $_COOKIE['cons']; ?></th>
                            </tr>

                            <tr>
                            <th scope="col">Advice</th>
                            <th scope="col"><?php echo $_COOKIE['advice']; ?></th>
                            </tr>

                            <tr>
                            <th scope="col">Proof</th>
                            <th scope="col"><?php echo $_COOKIE['file']; ?> &nbsp;<a href="<?php echo "upload/".$_COOKIE['file2']."/";?>" target="_blank"><i class="bi bi-box-arrow-up-right"></i></a></th>
                            </tr>
                        </thead>
                        </table>

                       
                        <div class="d-flex justify-content-center">
                        <input type="submit" class="btn btn-success " value="PREVIOUS" name="previous"></input>&nbsp;&nbsp;
                        <input type="submit" class="btn btn-success " value="LOG OUT" name="logout"></input>
                          
                          
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