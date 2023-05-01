<?php
require_once('DAL.php');
$dbObj = new DAL();
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $recycling_score = $_POST['recycling_items'];
    $price_purchased = $_POST['price'];
    $time_taken = $_POST['timer'];

    $sql = "INSERT INTO gamers (username, recycling_score, price_purchased, time_taken) VALUES (?, ?, ?, ?)";
    $params = [$username, $recycling_score, $price_purchased, $time_taken];
    $result = $dbObj->db_command($sql, $params);
    if ($result->rowCount() > 0) {
        echo "done";
    }
    else {
        echo "error";
    }
}
?>
