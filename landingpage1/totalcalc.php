<?php
 include '/xampp/htdocs/employee/loginfolder/lconnect.php';
 include '/xampp/htdocs/employee/landingpage1/alldep.php';
 $query1="SELECT DISTINCT emp_department
 FROM login
 WHERE emp_department <> 'Administration';";
 $dep_count=mysqli_query($conn,$query1);
 $count1=mysqli_num_rows($dep_count);
 $query2="SELECT *
 FROM login WHERE emp_department <> 'Administration'";
 $emp_count=mysqli_query($conn,$query2);
 $count2=mysqli_num_rows($emp_count);
 $query3="SELECT SUM(emp_salary) AS Total
 FROM login";
 $sal_count3=mysqli_query($conn,$query3);
 $c = $sal_count3->fetch_assoc();
 $count3=$c['Total'];
 $query3="SELECT *
 FROM leave1 WHERE status ='Pending'";
$emp_count1=mysqli_query($conn,$query3);
$count4=mysqli_num_rows($emp_count1);
$query4="SELECT * FROM notify WHERE name <> 'Administrator'";
$emp_count2=mysqli_query($conn,$query4);
$count5=mysqli_num_rows($emp_count2);
$query5="SELECT * FROM notify WHERE name='Administrator'";
$emp_count3=mysqli_query($conn,$query5);
$count6=mysqli_num_rows($emp_count3);
?>