<?php
require 'connection.php';
$search = $_GET['search'];
$sql = "SELECT u.first_name, u.last_name, a.card_number FROM accounts_table as a
    INNER JOIN users_table as u ON (a.user_id = u.user_id)
    WHERE a.card_number = '$search'
    OR u.first_name = '$search'
    OR u.last_name = '$search'";

$query = mysqli_query($db, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

for ($i = 0; $i < count($result); $i++) {
    echo '<p>Name: ' . $result[$i]['first_name'] . ' ' . $result[$i]['last_name'] . '</p>' . '<p>Card No: ' . $result[$i]['card_number'] . '</p>';
}
?>

<div style="display: inline-block; margin-left: 50px;">
    <a style="text-decoration: none;" href="index.php">
        <h3>&#8617;</h3>
    </a>
</div>