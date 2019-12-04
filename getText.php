<?php
    include('config.php');
    $name = $_POST['listenName'];
    if(empty($name)){
        echo 'Enter a name!';
        exit();
    }
    $query = "SELECT message FROM IT202A5_Users Where name='$name'";
    $result = mysqli_query($db, $query);

    if(mysqli_num_rows($result)==0){
        echo 'Enter a valid name!';
        exit();
    }

    $row = mysqli_fetch_assoc($result);
    $keys = array_keys($row);
    $values = array_values($row);
    $value = htmlspecialchars($values[0]);
    echo $value;
