<!DOCTYPE html>
<?php
session_start();
include './dbconn.php';
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

$query = "INSERT INTO `user`(`email`, `username`, `password`,`user_type`, `first_name`, `last_name`, `nric`, `country`, `dob`, `age_range`, `gender`, `address`, `postal_code`) " .
        "VALUES ('$email', '$username',SHA1('$password'),'user', '$first_name','$last_name',null , '$country', null,'$age_range', '$gender', null, null)";

$result = mysqli_query($link, $query);
if ($result) {
    $response["result"] = "success";
    $_SESSION['username'] = $username;
    $_SESSION['gender'] = $gender;

    //    Email init
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: LUCXURY <noreply@lucxury.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $subject = "Lucxury - Password reset";
//    $msgForWebsite = "Password has been reset. Please check your email and spam/junk folder.";

    $msgForEmail = "<div>Dear $username,</div><br/>"
            . '<div>Welcome to Lucxury</div><br/>'
            . '<div>Step into the world of Singapore’s luxury labels that will ignite your passion for exquisite products to satisfy your true reason and purpose of every purchase.</div><br/>'
            . "<br/><br/><div>Best Regards,</div><br/><div>LUCXURY</div><br/>";

    mail("$email", "LUCXURY - New user signup", $msgForEmail, $headers);
} else {
    $response["result"] = "fail";
}
//echo json_encode($response);
mysqli_close($link);
?>
<html>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<meta http-equiv="refresh" content="0.1; URL=../index.php">-->
        <meta name="keywords" content="automatic redirection">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script>
            $(document).ready(function () {
                var result = "<?php echo $response['result'] ?>";
                if (confirm("Account creation: " + result + ". A Confirmation Email will be sent within 24hrs")) {
                    window.location.replace("../login.php");
                } else {
                    window.history.back();
                }
            });
        </script>
    </head>
    <body>
        <!--<p>Please wait while the page redirects...</p>-->
    </body>
</html>
