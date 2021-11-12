<?php




error_reporting(0);

// input fields 

$employment = input_field($_POST["employment"]);
$job = input_field($_POST["job"]);
$review = input_field($_POST["review"]);
$pros = input_field($_POST["pros"]);
$cons = input_field($_POST["cons"]);
$advice = input_field($_POST["advice"]);
$rating = input_field($_POST["overall_rating"]);

session_start();
$_SESSION["overall_rating"] = $rating;


// error variables 
$employmentErr = $jobErr = $reviewErr = $prosErr = $consErr = $adviceErr = $overall_ratingErr = "";

// validation
if (isset($_POST["next"])) {

  // rating validation 
  // if (empty($rating)) {
  //   $overall_ratingErr = "Please give rating.";
  // }

    // employment validation 
    if (empty($employment)) {
        $employmentErr = "This field is required.";
    } 

    // job validation 
    if (empty($job)) {
        $jobErr = "This field is required.";
    } 

    // review password validation 
    if (empty($review)) {
        $reviewErr = "This field is required.";
    } 

    // pros validation 
    if (empty($pros)) {
        $prosErr = "This field is required.";
    } elseif(strlen($pros) < 15 || strlen($pros) > 200){
      $prosErr = "Length should be between 15 to 200 characters.";
    }
    

    // cons validation 
    if (empty($cons)) {
        $consErr = "This field is required.";
    }elseif(strlen($cons) < 15 || strlen($cons) > 200){
      $consErr = "Length should be between 15 to 200 characters.";
    }

    // advice validation 
    if (empty($advice)) {
        $adviceErr = "This field is required.";
    }elseif(strlen($advice) < 15 || strlen($advice) > 200){
      $adviceErr = "Length should be between 15 to 200 characters.";
    }

   

    if ($employmentErr === "" && $jobErr === "" && $reviewErr === "" && $prosErr  === "" && $consErr ==  "" && $adviceErr === "" && $overall_ratingErr === "") 
    {
      setcookie('employment',$employment,time()+3600*24);
      setcookie('job',$job,time()+3600*24);
      setcookie('review',$review,time()+3600*24);
      setcookie('pros',$pros,time()+3600*24);
      setcookie('cons',$cons,time()+3600*24);
      setcookie('advice',$advice,time()+3600*24);
        header("Location:Feedback3.php");
    }
    

}

if (isset($_POST["previous"])) {
    header("Location:Feedback1.php");
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

    <link rel="stylesheet" href="Custom.css">
    
    <title>Feedback</title>

    <script>
      document.getElementsByName('')
      </script>
    
    
  </head>
  <body>

  <?php
    include('Nav.php');
    ?>

   <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <h1 class="display-2">Feedback</h1>
            <h4 class="display-4">Step 2</h4>
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
                            <label for="overall_rating"> Rating: </label>
                            <input type="hidden" class="form-control" id="overall_rating" name="overall_rating" value="<?php echo $_SESSION["overall_rating"]; ?>">
                            <div class="rating"> <input type="radio"  name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                            </div>

                            
                            <small id="employee_status" class="form-text text-danger"><?php echo $overall_ratingErr; ?></small>
                        </div>

                        <div class="form-outline mb-4">
                            <div class="dropdown">
                                <label for="employment">Employment Status:</label>
                                &nbsp;
                                <select name="employment" id="employment">
                                <option value="full">Full Time</option>
                                <option value="part">Part Time</option>
                                <option value="contract">Contract</option>
                                <option value="intern">Intern</option>
                                </select>
                            </div>
                            <small id="err" class="form-text text-danger"><?php echo $employmentErr; ?></small>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" id="job" class="form-control form-control-lg" name="job"/>
                          <label class="form-label" for="job">Job Title</label>
                          <small id="err" class="form-text text-danger"><?php echo $jobErr; ?></small>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" id="review" class="form-control form-control-lg" name="review"/>
                          <label class="form-label" for="review">Review Headline </label>
                          <small id="err" class="form-text text-danger"><?php echo $reviewErr; ?></small>
                        </div>

                        <div class="form-outline mb-4">
                          <textarea  id="pros" class="form-control form-control-lg" name="pros" ></textarea>
                          <label class="form-label" for="pros">Pros </label>
                          <small id="err" class="form-text text-danger"><?php echo $prosErr; ?></small>
                        </div>

                        <div class="form-outline mb-4">
                          <textarea  id="cons" class="form-control form-control-lg" name="cons" ></textarea>
                          <label class="form-label" for="cons">Cons </label>
                          <small id="err" class="form-text text-danger"><?php echo $consErr; ?></small>
                        </div>

                        <div class="form-outline mb-4">
                          <textarea  id="advice" class="form-control form-control-lg" name="advice" ></textarea>
                          <label class="form-label" for="advice">Advice Management </label>
                          <small id="err" class="form-text text-danger"><?php echo $adviceErr; ?></small>
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