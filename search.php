<?php
require 'connection.php';
$search = $_GET['search'];
$sql = "SELECT u.first_name, u.last_name, a.card_number FROM accounts_table as a
    INNER JOIN users_table as u ON (a.user_id = u.user_id)
    WHERE a.card_number = '$search'
    OR u.first_name = '$search'
    OR u.last_name = '$search'";

$query = mysqli_query($db, $sql);
$result = mysqli_fetch_assoc($query);
echo '<p>Name: ' . $result['first_name'] . ' ' . $result['last_name'] . '</p>' . '<p>Card No: ' . $result['card_number'] . '</p>';
?>