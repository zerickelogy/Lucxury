<!DOCTYPE html>
<?php
session_start();
include './dbconn.php';
$user_id = $_SESSION["user_id"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
//$nric = $_POST["nric"];
//$dob = $_POST["dob"];
$gender = $_POST["gender"];
$age_range = $_POST['age_range'];
//$postal_code = $_POST["postal_code"];
//$home_address = $_POST["home_address"];
$country = $_POST["country"];

$query = "UPDATE `user` SET `email`='$email',`username`='$username' ,`password`=SHA1('$password'), `first_name`='$first_name',".
        " `last_name`='$last_name', `country`='$country', `age_range`='$age_range',  `gender`='$gender' ".
        " WHERE `user_id`='$user_id'";

$result = mysqli_query($link, $query);

if ($result) {
    $response["result"] = "success";
} else {
    $response["result"] = "fail";
}
echo json_encode($response);
mysqli_close($link);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="3; URL=../index.php">
<meta name="keywords" content="automatic redirection">
        <title></title>
        <?php // include 'scripts/bootstrap_scripts/bootstrap_scripts.php'; ?>
        <script>
        </script>
    </head>
    <body>
        <p>Please wait while the page redirects...</p>
    </body>
</html>
