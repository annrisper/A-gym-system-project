<?php

session_start();

if(isset($_SESSION['trainer_id']))
{
	unset($_SESSION['trainer_id']);

}

header("Location: trainers.php");
die;