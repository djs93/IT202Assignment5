<?php
    include('config.php');
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $message = $_POST['text'];

    if(empty($name)){
        echo('Fill in name! ');
    }
    if(empty($pass)){
        echo('Fill in password!');
        exit();
    }
    $query = "SELECT name,password FROM IT202A5_Users WHERE name='$name' AND password='$pass'";
    $result1 = mysqli_query($db, $query);
    $numrows = mysqli_num_rows($result1);

    if($numrows==0){
        echo('Invalid username or password');
        exit();
    }
    $query = "UPDATE IT202A5_Users SET message = '$message' WHERE name = '$name'";
    $result = mysqli_query($db, $query);
    if(mysqli_affected_rows($db)==1){
        echo('Success!');
    }
    else{
        echo('Error sending message! Please try again!');
    }
