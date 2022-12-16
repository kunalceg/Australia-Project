<?php

$con = mysqli_connect('localhost','root','');


if($con){
	echo "Connection Successful";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'transplant');

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$query = "insert into login ('username','password','email') values ('$username','$password','$email')";

echo "$query";
mysqli_query($con, $query)
if(mysqli_quary($con, $query)){
	?>
	<script type = "text/javacript">
	     alert('Data Inserted');
	</script>
	<?php
	
	header('location:job.php');
    }else{ 
	echo "<script> alert('data not inserted')</script>";
	header('location:job.php');
	}
	
	
	?>
