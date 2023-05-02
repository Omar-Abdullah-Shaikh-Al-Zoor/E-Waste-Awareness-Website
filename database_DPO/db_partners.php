<?php 
require_once("DAL.php");
$dbObj = new DAL();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $partner = $_GET['partner'];
    $sql = "SELECT details FROM partners where partner = ?";
    $params = [$partner];
    $result = $dbObj->db_command($sql, $params);
    if ($result->rowCount() > 0) {
        $details = $result->fetch(PDO::FETCH_ASSOC);
        echo $details['details'];
    } else {
        echo "retrieval failed";
    }
}
?>