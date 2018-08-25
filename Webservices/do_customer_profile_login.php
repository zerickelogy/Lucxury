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
    $output = "success";
    header("refresh:1;url=../index.php");
} else {
    $msg = "<img src='../img/WebsiteStatusImages/wrongUserOrPass.jpg'>";
    $output = "fail";
    header("refresh:1;url=../login.php");
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
        <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
                if ('<?php echo $output == "success" ?>') {
                    alert("Please wait while the page is loading..");
                } else if ('<?php echo $output == "fail" ?>') {
                    alert("Sorry, invalid username or password please try again.");
                }

            });
        </script>

    </head>
    <body>
        <?php
//        echo $msg;
        ?>
    </body>
</html>
