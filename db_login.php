<?php 
require_once('DAL.php');
$dbObj = new DAL();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ?";
    $params = [$username];
    $result = $dbObj->db_command($sql, $params);

    if ($result->rowCount() === 0) {
        echo "username not found";
    } else {
        $row = $result->fetch();
        if ($row['password'] !== $password) {
            echo "incorrect password";
        } else {
            echo "success login";
        } 
    }
}
?>
