<?php
    include("config.php");
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IT202 Assignment 5</title>
    <script src="script.js"></script>
    <style>
        div{
            border-style: solid;
            border-width: thin;
            background-color: #f3e2be;
            padding-left: 5px;
            padding-right: 5px;
        }
    </style>
</head>
<body>
<div id="nameBar">
    <?php
        $query = "SELECT name FROM IT202A5_Users";
        $result = mysqli_query($db, $query);
        $num_rows = mysqli_num_rows($result);
        if ($num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $keys = array_keys($row);
            for ($row_num = 0; $row_num < $num_rows; $row_num++) {
                $values = array_values($row);
                $value = htmlspecialchars($values[0]);
                print "$value  ";
                $row = mysqli_fetch_assoc($result);
            }
        }
    ?>
</div>
</body>

