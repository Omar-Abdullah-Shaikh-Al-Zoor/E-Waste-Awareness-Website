<?php 
require_once('DAL.php');
$dbObj = new DAL();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (fname, lname, username, email, password) VALUES (?, ?, ?, ?, ?)";
    $params = [$fname, $lname, $username, $email, $password];
    $stmt = $dbObj->db_command($sql, $params);
    if ($stmt->rowCount() > 0) {
        echo "success";
    } else {
        echo "failed";
        
    }
}
?>