<?php
 include '/xampp/htdocs/employee/loginfolder/lconnect.php';
 $query1="SELECT DISTINCT emp_department
 FROM login
 WHERE emp_department <> 'Administration';";
 $dep_count=mysqli_query($conn,$query1);
 $count1=mysqli_num_rows($dep_count);
 $query2="SELECT *
 FROM login WHERE emp_department <> 'Administration'";
 $emp_count=mysqli_query($conn,$query2);
 $count2=mysqli_num_rows($emp_count);
 
?>