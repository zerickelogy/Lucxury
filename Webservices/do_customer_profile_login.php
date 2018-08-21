<!DOCTYPE html>
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
    $msg = "<img src='../img/WebsiteStatusImages/loadingImage.jpg'>";
} else {
    $msg = "<img src='../img/WebsiteStatusImages/wrongUserOrPass.jpg'>";
}
//include '';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="2; URL=../gender.php">
        <meta name="keywords" content="automatic redirection">
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
