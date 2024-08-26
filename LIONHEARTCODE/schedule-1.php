<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send'])){
        $conn= mysqli_connect('localhost', 'root', '', 'fitness') or die("Connection Failed:" .mysqli_connect_error());
        if(isset($_POST['trainee']) && isset($_POST['workout']) && isset($_POST['date']) && isset($_POST['set_1']) && isset($_POST['trainer'])){
            $trainee= $_POST['trainee'];
            $workout= $_POST['workout'];
            $date= $_POST['date'];
            $set_1= $_POST['set_1'];
            $trainer= $_POST['trainer'];

            $sql= "INSERT INTO schedule (trainee, workout, date, set_1, trainer) VALUES ('$trainee', '$workout', '$date', '$set_1', '$trainer')";
            $query = mysqli_query($conn,$sql);
            if($query) {
                echo 'Schedule successful <a href="schedule.php"> Go back to Schedule</a>';
            }
            else {
                echo 'Error Occurred';
            }
        }
    }