<?php

include 'dbconn.php';
$query = "";

// if $_GET search is present, else, show everything
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query .= "SELECT * FROM `item_storage` INNER JOIN merchant ON merchant.merchant_id=item_storage.merchant_id WHERE `itemstorage_name` LIKE '%$search%' OR `itemstorage_category` LIKE '%$search%' ";
} else {
    $query .= "SELECT * FROM `item_storage` INNER JOIN merchant ON merchant.merchant_id=item_storage.merchant_id WHERE `itemstorage_name` LIKE '%%' ";
}

if (isset($_GET['color'])) {
    $color = $_GET['color'];
    $query .= "AND `item_storage`.`itemstorage_color` LIKE '%$color%' ";
}

if (isset($_GET['brand'])) {
    $brand = $_GET['brand'];
    $query .= "AND `item_storage`.`itemstorage_brand` LIKE '%$brand%' ";
}

if (isset($_GET['gender'])) {
    $gender = $_GET['gender'];
    $query .= "AND `item_storage`.`itemstorage_name` LIKE '%$gender%' ";
}

if (isset($_GET['condition'])) {
    $condition = $_GET['condition'];
    $query .= "AND `item_storage`.`itemstorage_condition` LIKE '%$condition%' ";
}

if (isset($_GET['merchant'])) {
    $merchant = $_GET['merchant'];
    $query .= "AND `merchant`.`merchant_name` LIKE '%$merchant%' ";
}

if (isset($_GET['priceSort'])) {
    $priceSort = $_GET['priceSort'];
    $query .= "ORDER BY `item_storage`.`itemstorage_price_amount` $priceSort";
}

//echo $query;

if ($query != "") {
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $items[] = $row;
    }
    mysqli_close($link);
    if (isset($items)) {
        echo json_encode($items);
    }
}

