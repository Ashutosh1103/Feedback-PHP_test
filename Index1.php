<?php

error_reporting(0);

// input fields 
  $username="test_user";
  $uname=$_POST['username'];
  $password="123456";
  $pass=input_field($_POST['password']);
  
  session_start();
        $_SESSION['sid']=$uname;
  
 

  // error variables 
$usernameErr = $passwordErr =  "";

if(isset($_POST['login'])){
   
  

    // email validation 
    if (empty($uname)) {
        $usernameErr = "Username is required.";
    } 
    
    if(empty($pass)){
      $passwordErr = "Password is required.";
    }
    

    if($uname!=$username ){
       $usernameErr = "Username Incorrect.";
      //header("location:Index.php");
    }
    elseif($pass != $password){
      $passwordErr = "Password Incorrect.";
    }
    elseif($usernameErr == "" && $passwordErr  == "" ){
      if( $uname==$username && $pass == $password){
        if(!empty($_POST['remember'])){
          setcookie('uname',$uname,time()+3600*24);
          setcookie('pass',$pass,time()+3600*24);
        }
       
        
        header("Location:Feedback1.php");
      }
    }
    
  
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

    <title>Log In</title>
    
    <script>

      function cook(){
        if("<?php echo $_COOKIE['uname']; ?>"!=undefined){
          if(document.getElementById("username").value=="<?php echo $_COOKIE['uname']; ?>"){
            document.getElementById("password").value="<?php echo $_COOKIE['pass']; ?>";
          }
          else{
            document.getElementById("password").value="";
          }
        }
      }
      </script>


      <style>
            .bg-image-vertical {
            position: relative;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: right center;
            background-size: auto 100%;
          }

          @media (min-width: 1025px) {
            .h-custom-2 {
              height: 100%;
            }
          }
        </style>
    
  </head>
  <body>
   <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Log In</h1>
            </div>
      </div> 

      
              
      <section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="post">

          
           

            <div class="form-outline mb-4">
              <input type="text" id="username" onchange="cook()" class="form-control form-control-lg" name="username" />
              <label class="form-label" for="username">Username</label>
              <small id="err" class="form-text text-danger"><?php echo $usernameErr; ?></small>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="password" class="form-control form-control-lg" name="password"/>
              <label class="form-label" for="password">Password</label>
              <small id="err" class="form-text text-danger"><?php echo $passwordErr; ?></small>
            </div>

            <div class="pt-1 mb-4">
              <input class="" type="checkbox" name="remember" >&nbsp; Remember Me
            </div>

            <div class="pt-1 mb-4">
              <input class="btn btn-info btn-lg btn-block" type="submit" name="login" value="LOG IN">
            </div>

           

            
           

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/img3.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
        <?php    
      include('Footer.php');
    ?>
    
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>