<?php 
require_once('DAL.php');
$dbObj = new DAL();

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username_login'];
    $password = $_POST['password_login'];

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
            $_SESSION["username"] = $username;
            echo "success login";
        } 
    }
}
?>
