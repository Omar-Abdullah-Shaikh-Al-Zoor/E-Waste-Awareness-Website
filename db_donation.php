<?php
require_once ('DAL.php');
$dbObj= new DAL();

// Get the form values
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$phone_number = $_POST['phone-number'];
$email = $_POST['email'];
$address_1 = $_POST['address-1'];
$address_2 = $_POST['address-2'];
$city = $_POST['city'];
$country = $_POST['country'];

$card_number = $_POST['card-number'];
$expiration_date = $_POST['expiration-date'];
$security_code = $_POST['security-code'];

$donation_amount = $_POST['donation-amount'];
$donation_frequency = strtolower($_POST['donation-frequency']);
$device_type = $_POST['device-type'];

$device_condition = $_POST['device-condition'];
$device_brand = $_POST['device-brand'];
$device_model = $_POST['device-model'];
$device_age = $_POST['device-age'];
$device_description = $_POST['device-description'];

// Insert the donator's information into the database
// Its ID is auto-increment
$sql = "INSERT INTO donator (first_name, last_name, phone_number, email, address_1, address_2, city, country) VALUES (?,?,?,?,?,?,?,?)";
$params = [$first_name, $last_name, $phone_number, $email, $address_1, $address_2, $city, $country];

if ($stmt = $dbObj->db_command($sql, $params)) {
    $donator_id = $dbObj->conn->lastInsertId();
    
    $sql_card = "SELECT * FROM donation_card WHERE card_number = ?";
    $params_card = [$card_number];
    $result_card = $dbObj->db_command($sql_card, $params_card);
    if ($result_card->rowCount() === 0) {
        //Insert the card information into the database
        $sql_NewCard = "INSERT INTO donation_card (donator_id, card_number, expiration_date, security_code) VALUES (?,?,?,?)";
        $params_NewCard = [$donator_id , $card_number, $expiration_date, $security_code];
        $stmt_NewCard = $dbObj->db_command($sql_NewCard, $params_NewCard);
    } 
    $sql_donation = "INSERT INTO donation (donator_id, card_number, donation_amount, donation_frequency) VALUES (?,?,?,?)";
    $params_donation = [$donator_id , $card_number, $donation_amount, $donation_frequency];
    $result = $dbObj->db_command($sql_donation, $params_donation);
    
    if ($device_type !== "") {
        // Insert the donated device information into the database
        $sql = "INSERT INTO donated_device (donator_id, device_type, device_condition, device_brand, device_model, device_age, device_description) VALUES (?,?,?,?,?,?,?)";
        $params = [$donator_id, $device_type, $device_condition, $device_brand, $device_model, $device_age, $device_description];
        $stmt = $dbObj->db_command($sql, $params);
    }  
}

echo "Donation received successfully";
$dbObj->db_close();
?>