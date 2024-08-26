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

		if(!empty($trainer_name) && !empty($email) && !empty($password) && !is_numeric($trainer_name))
		{

			//read from database
			$query = "select * from trainers where trainer_name = '$trainer_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['trainer_id'] = $user_data['trainer_id'];
						header("Location: home2.php");
						die;
					}
				}
			}
			
			echo "wrong trainername or password!";
		}else
		{
			echo "wrong trainername or password!";
		}
	}

?>
