<?php

include 'dbconn.php';
$query = "SELECT * FROM `merchant`";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['merchant_name'] != "") {
        $students[] = $row;
    }
}
mysqli_close($link);
echo json_encode($students);