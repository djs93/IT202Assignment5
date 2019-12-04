<?php
    include("config.php");
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IT202 Assignment 5</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="script.js"></script>
    <style>
        div{
            border-style: solid;
            border-width: thin;
            background-color: #f3e2be;
            padding-left: 5px;
            padding-right: 5px;
        }
        #updateText{
            border-style: solid;
            border-width: 1px;
            border-color: gray;
            background-color: white;
            padding-left: 5px;
            padding-right: 5px;
            width: 50ch;
            margin-top: -15px;
            text-align: center;
        }
        #listenText{
            margin-top: -15px;
        }
    </style>
</head>
<body>
<div id="nameBar">
    Names in database:
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
<div id="chatDiv">
    <form id="chatForm" method="post">
        <label for="name">Name:</label><input type="text" id="name" name ='name'><br>
        <label for="password">Password:</label><input type="password" id="password" name="password"><br>
        <label for="text">Message:<br></label><textarea id="text" name="text"></textarea>
    </form>
    <p id="updateText">a</p>
</div>
<div id="listenDiv">
    <form id="listenForm">
        <label for="listenName">Name:</label><input type="text" id="listenName" name="listenName">
    </form>
    <textarea id="listenText" readonly></textarea>
</div>
</body>

