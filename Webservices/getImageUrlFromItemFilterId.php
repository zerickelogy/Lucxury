<?php
$item_storage_id = $_GET["itemstorage_id"];
include 'dbconn.php';
$query = "SELECT * FROM item_storage 
INNER JOIN image_storage on item_storage.item_storage_id = image_storage.item_storage_id
WHERE item_storage.item_storage_id = '$item_storage_id'";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $students[] = $row;
}
mysqli_close($link);
echo json_encode($students);
