<?php

$username = $_POST['username'];
$lastname= $_POST['lastname'];
$email = $_POST['email'];
$datebirth = $_POST['datebirth'];
$mobile_no = $_POST['mobile_no'];
$designation = $_POST['designation'];
$sex = $_POST['sex'];
//$gender = $_POST['gender'];


$con=mysqli_connect("localhost","root","","Student");

if($con){
      //echo"connected";

	 	$sql_query="insert into user_info (username,lastname,email,datebirth,mobile_no,designation,sex) values ('$username','$lastname','$email','$datebirth','$mobile_no','$designation','$sex')";

        $q=mysqli_query($con,$sql_query);

        if($q){
                echo "data inserted";
        }
        else{
        	    echo "not inserted";
        }
}
