<?php
 include 'cone.php';
 if(isset($_POST['enter'])){
    $userver=$_POST['server'];
    $query="SELECT * FROM server where server_name='$userver'";
    $data= mysqli_query($bonn,$query);
    $count=mysqli_num_rows($data);
    if($count > 0){
        header("Location: /loginfolder/log.php");  
        die();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Server Choice Page</title>
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="/allround/jabbcss.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header" style="font-family: 'Indie Flower', cursive;;">
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
				<h3 style="font-size: 33px"><b>Enter your Server Name</b></h3>
			</div>
			<div class="card-body">
				<form action="/loginfolder/log.php" method="POST">
                <select class="form-select" style="
                 border: 2px solid black; color:black; width: 88%; height: 7vh; border-radius: 15px"  name="server" aria-label="Default select example">
                   <option selected>Select your Company</option>
                   <option value="1">Central Coalfields Limited</option>
                </select>
                <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" value="Enter" name="enter" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Enter</button>
             </div>
				</form>
                <br>
                <br>
            <p style="color: white;">Want a server for your company?Email us at xyz@gmail.com</p>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>