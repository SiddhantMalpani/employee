<!-- Username for admin: admin -->
<!-- Password for admin: admin123 -->

<?php
 include 'lconnect.php';
 if(isset($_POST['login'])){
  $uname=$_POST['name'];
  $passw=$_POST['pass'];
  $query="SELECT * FROM login where emp_name='$uname' and emp_pass='$passw'";
  $data= mysqli_query($conn,$query);
  $count=mysqli_num_rows($data);
  if($count > 0){
    if($uname=='admin' && $passw=='admin123'){
      header("Location: /landingpage1/page1.php");
      die();
    }
    else{
      header("Location: /landingpage1/page2.php");
      die();
    }
  }
  else{
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Invalid!</strong> username or password.
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
 }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="/loginfolder/logcss.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<div class="center">
  <h1 style="font-size: 60px;"><b><SPAN style="color: grey;">EMPLOYEE  </SPAN>MANAGEMENT <span style="color: grey;">SYSTEM</span></b></h1>
  </div>
 <section class="vh-100" style="margin-top: 50px;">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="/loginfolder/images/background.png"
          class="img-fluid" alt="Sample image" width="700">
      </div>
      <div class="cent col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
         <h3 class="welcome">Welcome ! Please Login to Continue</h3>
        <form action="/loginfolder/log.php" method="POST">
          <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3"><b>Username</b></label>
            <input type="name" name="name" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter your Username" />
          </div>
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4"><b>Password</b></label>
            <input type="password" name="pass" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
            
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" value="login" name="login" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-0 pt-0 mb-0">Don't have an account? <a href="/loginfolder/reg.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5">
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    
  </div>
</section>
</body>

</html>