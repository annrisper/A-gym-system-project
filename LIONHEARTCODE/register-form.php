<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send'])){
        $conn= mysqli_connect('localhost', 'root', '', 'fitness') or die("Connection Failed:" .mysqli_connect_error());
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['id']) && isset($_POST['plan']) && isset($_POST['trainer']) && isset($_POST['date'])){
            $name= $_POST['name'];
            $email= $_POST['email'];
            $phone= $_POST['phone'];
            $id= $_POST['id'];
            $plan= $_POST['plan'];
            $trainer= $_POST['trainer'];
            $date= $_POST['date'];

            $sql= "INSERT INTO muscle (name, email, phone, id, plan, trainer, date) VALUES ('$name', '$email', '$phone', '$id', '$plan', '$trainer', '$date')";
            $query = mysqli_query($conn,$sql);
            if($query) {
                echo 'Entry successful <a href="index.php">Return Home</a>';
            }
            else {
                echo 'Error Occurred';
            }
        }
    }