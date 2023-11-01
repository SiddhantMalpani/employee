<?php
 $servername  ="localhost";
 $username    ="root";
 $password    ="";
 $database="loginpage";
 $conn=mysqli_connect($servername, $username, $password,$database);
 
 $query="CREATE TABLE `loginpage`.`login` (`sno` INT NOT NULL AUTO_INCREMENT , `emp_name` VARCHAR(40) NOT NULL , `emp_pass` VARCHAR(30) NOT NULL , `emp_email` VARCHAR(60) NOT NULL , `emp_gender` VARCHAR(20) NOT NULL , `emp_department` VARCHAR(40) NOT NULL , `emp_salary` INT(10) NOT NULL DEFAULT '0' , `date` DATE NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB";
 mysqli_query($conn,$query);

 $query1="CREATE TABLE `loginpage`.`depart1` (`sno` INT NOT NULL AUTO_INCREMENT , `department_name` VARCHAR(40) NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB";
 mysqli_query($conn,$query1);

 $query2="CREATE TABLE `loginpage`.`leave1` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(40) NOT NULL , `department` VARCHAR(30) NOT NULL , `start_date` DATE NOT NULL , `end_date` DATE NOT NULL , `leave_type` VARCHAR(40) NOT NULL , `details` VARCHAR(100) NOT NULL , `apply_date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , `status` VARCHAR(30) NOT NULL DEFAULT 'Pending' , PRIMARY KEY (`sno`)) ENGINE = InnoDB";
 mysqli_query($conn,$query2);
 
 $query3="CREATE TABLE `loginpage`.`notify` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(40) NOT NULL , `from_department` VARCHAR(30) NOT NULL , `to_department` VARCHAR(30) NOT NULL , `details` VARCHAR(100) NOT NULL , `cur_date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sno`)) ENGINE = InnoDB";
 mysqli_query($conn,$query3);

 $query4="INSERT INTO login (emp_name, emp_pass, emp_department) VALUES ('admin', 'admin123', 'Administration')";
 mysqli_query($conn,$query4);
?> 