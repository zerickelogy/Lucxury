<?php

include 'dbconn.php';
$query = "";

// if $_GET search is present, else, show everything
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query .= "SELECT * FROM `item_filter` INNER JOIN merchant ON merchant.merchant_id=item_filter.merchant_id WHERE `itemfilter_name` LIKE '%$search%' ";
} else {
    $query .= "SELECT * FROM `item_filter` INNER JOIN merchant ON merchant.merchant_id=item_filter.merchant_id WHERE `itemfilter_name` LIKE '%%' ";
}

if (isset($_GET['color'])) {
    $color = $_GET['color'];
    $query .= "AND `item_filter`.`itemfilter_color` LIKE '%$color%' ";
}

if (isset($_GET['condition'])) {
    $condition = $_GET['condition'];
    $query .= "AND `item_filter`.`itemfilter_condition` LIKE '%$condition%' ";
}

if (isset($_GET['merchant'])) {
    $merchant = $_GET['merchant'];
    $query .= "AND `merchant`.`merchant_name` LIKE '%$merchant%' ";
}

if (isset($_GET['priceSort'])) {
    $priceSort = $_GET['priceSort'];
    $query .= "ORDER BY `item_filter`.`itemfilter_price_amount` $priceSort";
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

