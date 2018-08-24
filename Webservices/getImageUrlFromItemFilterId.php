<?php
$itemstorage_id = $_GET["itemstorage_id"];
include 'dbconn.php';
$query = "SELECT item_storage.itemstorage_id, image_storage.itemstorage_image_url 
FROM item_storage 
INNER JOIN image_storage on item_storage.itemstorage_id = image_storage.itemstorage_id
WHERE item_storage.itemstorage_id = '$itemstorage_id'";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $students[] = $row;
}
mysqli_close($link);
echo json_encode($students);
