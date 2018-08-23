<!--<!DOCTYPE html>-->
<?php
session_start();
include './dbconn.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = "select * from `user` where `username` = '$username' and `password` = sha1('" . $password . "')";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $_SESSION["username"] = $row['username'];
    $_SESSION["user_id"] = $row['user_id'];
    $msg = "<img src='../img/WebsiteStatusImages/loadingImage.jpg'>";
    header("refresh:3;url=../index.php");
} else {
    $msg = "<img src='../img/WebsiteStatusImages/wrongUserOrPass.jpg'>";
    header("refresh:3;url=../login.php");
}
//include '';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            img {
                display: block;
                margin-left: auto;
                margin-right: auto
            }
        </style>
    </head>
    <body>
        <?php
        echo $msg;
        ?>
    </body>
</html>
