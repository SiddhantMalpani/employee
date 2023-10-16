<?php
  include 'lconnect.php';
  $query="SELECT department_name FROM `depart1`";
  $data= mysqli_query($conn,$query);
?>
<?php
 if(isset($_POST['register'])){
  $uname=$_POST['user'];
  $passw=$_POST['pass'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $department=$_POST['department'];
  if(empty($uname) || empty($passw) || empty($email) || empty($gender) || empty($department)){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Please fill</strong> in all the details.
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }else{
   $query="INSERT INTO `login` (`sno`, `emp_name`, `emp_pass`,`emp_email`,`emp_gender`,`emp_department`,`date`) VALUES (NULL, '$uname', '$passw','$email','$gender','$department',NOW())";
   $data= mysqli_query($conn,$query);
   if($data){
     header("Location: log.php");
     die();
   }
  }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
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
        <img src="/loginfolder/images/single.png"
          class="img-fluid" alt="Sample image" width="700">
      </div>
      <div class=" cent col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form class="frm" action="/loginfolder/reg.php" method="POST">
          <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3"> <b>Enter your Username</b></label>
            <input type="username" id="form3Example3" name="user" class="form-control form-control-lg"
              placeholder="Enter your Username" />
          </div>
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4"><b> Enter a Password</b></label>
            <input type="password" name="pass" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
          </div>
          <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label"><b>Email address</b></label>
           <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>

          <div class="alpha">
          <div style="width: 50%;">
          <label class="form-label" for="form3Example3"> <b>Gender</b></label>
           <select class="form-select" name="gender" aria-label="Default select example">
                <option selected>Select your Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            </div>
            <div style="width: 50%;">
          <label class="form-label" for="form3Example3"> <b>Department</b></label>
           <select class="form-select" name="department" aria-label="Default select example">
                <option selected>Select your Department</option>
                <?php
                   while($row = mysqli_fetch_assoc($data)){
                   ?>
                   <option value='department_name'><?php echo $row['department_name'] ?> </option>
                  <?php
                     }
                   ?>
                <!-- <option value="IT">IT </option>
                <option value="Finance">Finance</option>
                <option value="Human Resource">Human Resource</option>
                <option value="Sales and Marketing">Sales and Marketing</option> -->
            </select>
          </div>
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" value="Register" name="register" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
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
