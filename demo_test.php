<?php

$insert=false;
$firstname = '';
$lastname = '';
$phone = '';
$email = '';
$dob = '';
$address = '';
$city = '';
$state = '';
$pincode = '';

if(isset($_REQUEST['inputname']) && $_REQUEST['inputname'] !='')
{
	$server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
   
    $firstname = $_REQUEST['inputname'];
	$lastname = $_REQUEST['inputlastname'];
	$phone = $_REQUEST['inputmobileno'];
    $email = $_REQUEST['inputemail'];
    $dob = $_REQUEST['inputdate_of_birth'];
    $address = $_REQUEST['inputAddress'];
	$city = $_REQUEST['inputCity'];
	$state = $_REQUEST['inputState'];
	$pincode = $_REQUEST['inputpincode'];
	$name=$firstname." ".$lastname;
	 $sql = "INSERT INTO `resort`.`trip` (`name`, `email`,phone , dob, address , city, state , pincode) VALUES ('$name', '$email', '$phone', '$dob','$address','$city','$state','$pincode');";

	if($con->query($sql) == true){

                echo "form submitted successfully";
                
	}
	else{
		echo "ERROR:$sql <br> $con->error";
	}
	
	$con->close();
}
?>