<?php

include 'dbconn.php';


if (isset($_GET["email"])) {
    $email = $_GET["email"];

    $query = "SELECT `email` FROM `user` WHERE `email` = '$email'";

    $result = mysqli_query($link, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $students = $row;
    }
    mysqli_close($link);
    
    if (isset($students)) {
        echo json_encode($students);
    } else {
        echo "no username found";
    }
};
