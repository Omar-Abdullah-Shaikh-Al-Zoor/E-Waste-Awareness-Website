<?php
require_once('DAL.php');
$dbObj = new DAL();
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $recycling_score = $_POST['recycling_items'];
    $price = $_POST['price'];
    $timer = $_POST['timer'];

    $sql = "INSERT INTO gamers (username, recycling_score, price, timer), VALUES (?, ?, ?, ?)";
    $params = [$username, $recycling_score, $price, $timer];
    $result = $dbObj->db_command($sql, $params);
}
?>

?>