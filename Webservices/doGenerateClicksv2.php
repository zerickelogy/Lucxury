<?php

include './dbconn.php';
session_start();
$item_id = $_GET["item_id"];
$user_id = $_SESSION["user_id"];

$queryTimeAndDate = "SELECT NOW() as `now`";
$result6 = mysqli_query($link, $queryTimeAndDate);
$row = $result6->fetch_array();
$now = $row['now'];

// insert into user table
$query = "INSERT INTO `click_storage` (`click_id`, `user_id`, `item_storage_id`, `datetime_clicked`) VALUES (NULL, '$user_id', '$item_id', '$now');";

$result = mysqli_query($link, $query);