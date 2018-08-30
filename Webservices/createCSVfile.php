<?php

include './dbconn.php';
//if (isset($_GET["Export"])) {

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
$output = fopen("php://output", "w");
fputcsv($output, array("click id", "user id", "item storage id", "datetime clicked", "user id", "email", "username", "password", "user type", "first name", "last name", "nric", "country", "dob", "age_range", "gender", "address", "postal code", "merchant id", "item name", "item price currency", "item price amount", "item brand", "item color", "item condition", "item category", "item more info url", "item image url"));

$query = "SELECT * FROM `click_storage`
INNER JOIN `user` ON `click_storage`.`user_id`=`user`.`user_id`
INNER JOIN `item_storage` ON `click_storage`.`item_storage_id`=`item_storage`.`item_storage_id`
INNER JOIN `merchant` ON `item_storage`.`merchant_id`=`merchant`.`merchant_id`";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, $row);
}
fclose($output);
//}  