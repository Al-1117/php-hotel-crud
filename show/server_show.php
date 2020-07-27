<?php
  include __DIR__ . '/../database.php';


$room_id = $_GET['id'];
$sql = 'SELECT * FROM `stanze` WHERE `id` = ' . $room_id;
$results = $conn->query($sql);

// Costruisco la variabile con le stanze
if ($results && $results->num_rows > 0) {
  // ho i risultati
  $room = $results->fetch_assoc();


} elseif ($results) {
  // 0 risultati quindi rooms vuoto blocco l'applicazione
  die('no results');
} else {
die("query error");
}

?>
