<?php
session_start();
include ('conn.php');

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = ($_POST['password']);
        $query = mysqli_query($conn, "SELECT * FROM `shop` WHERE `email`='$email' AND `password`='$password'");
        if(mysqli_num_rows($query)>0){
            $row = mysqli_fetch_assoc($query);
            $_SESSION['login']   = true;
            $_SESSION['name']    = $row['name'];
            $_SESSION['email']   = $row['email'];
            $_SESSION['gender']   = $row['gender'];
            header("location: ");
        } else{
            echo "invalid email or password!";
        }
    }
?>