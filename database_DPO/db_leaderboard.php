<?php 
require_once('DAL.php');
$dbObj = new DAL();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $sql = "SELECT * FROM gamers ORDER BY recycling_score DESC";
    $params = [];
    $stmt = $dbObj->db_command($sql, $params);
    if ($stmt->rowCount() >0) {
        echo "
        <table>
            <tr>
                <th>ID</th>
                <th>username</th>
                <th>Recycling Score</th>
                <th>Price Purchased</th>
                <th>Time Taken</th>
            </tr>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['game_id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['recycling_score'] . "</td>";
            echo "<td>" . $row['price_purchased'] . "</td>";
            echo "<td>" . $row['time_taken'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else {
        echo "No records were found";
    }
    
}

?>