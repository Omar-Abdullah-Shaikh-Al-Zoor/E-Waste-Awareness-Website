<?php
require_once('DAL.php');
$dbObj = new DAL();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $username = $_POST['username'];

    // check if username or email already exists in the database
    $stmt = "SELECT * FROM users WHERE username = ? OR email = ?";
    $params = array($username, $email);
    $result = $dbObj->db_command($stmt, $params);
    $user = $result->fetch();
    if ($user) {
        // check if the username and email belong to the same user
        if ($user['username'] == $username && $user['email'] == $email) {
            echo "username and email are already in use";
        } elseif ($user['username'] == $username) {
            echo "username already exists";
        } else {
            echo "Email already used";
        }
    } 
}

?>