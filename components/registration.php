<?php
    session_start();
    include '../_database/database.php';
    if(isset($_POST['signup_button'])){
        $user_email=$_POST['user_email'];
        $user_firstname=$_POST['user_firstname'];
        $user_lastname=$_POST['user_lastname'];
        $user_username=$_POST['user_username'];
        $user_password=$_POST['user_password'];
        $sql="INSERT INTO user(user_firstname,user_lastname,user_email,user_username,user_password,user_joindate,user_avatar) VALUES('$user_firstname','$user_lastname','$user_email','$user_username','$user_password',CURRENT_TIMESTAMP,'default.jpg')";
        //$result = $database->query($sql);
        mysqli_query($database,$sql) or die(mysqli_error($database));
        $_SESSION['user_username'] = $user_username;
        header('Location: ../update-profile-after-registration.php?user_username='.$user_username);
    }
?>