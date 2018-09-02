<?php

include './dbconn.php';
//if (isset($_GET["Export"])) {

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
$output = fopen("php://output", "w");
fputcsv($output, array("click id", "user id", "item storage id", "datetime clicked","user id", "email", "username", "password", "user type", "first name", "last name", "datetime created", "nric", "country", "dob", "age_range", "gender", "address", "postal code", "merchant id", "item name", "item price currency", "item price amount", "item brand", "item color", "item condition", "item category", "item more info url", "item image url"));

$query = "SELECT * FROM `click_storage`
INNER JOIN `user` ON `click_storage`.`user_id`=`user`.`user_id`
INNER JOIN `item_storage` ON `click_storage`.`item_storage_id`=`item_storage`.`item_storage_id`";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, $row);
}
fclose($output);


//if there is a duplicate column, such as 2 columns user id, just include in fputcsv, it will show column name only.
//if there is a column with all NULL values, just include in fputcsv, it will show column name as well.