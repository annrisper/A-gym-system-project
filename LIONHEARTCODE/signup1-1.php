<?php 
session_start();

	include("connection1.php");
	include("functions1.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$trainer_name = $_POST['trainer_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($trainer_name) && !empty($password) && !empty($email) && !is_numeric($trainer_name))
		{

			//save to database
			$trainer_id = random_num(20);
			$query = "insert into trainers (trainer_id,trainer_name,email,password) values ('$trainer_id','$trainer_name','$email','$password')";

			mysqli_query($con, $query);

			header("Location: trainers.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>