<?php

  include __DIR__ . '/../database.php';

  $room_id = $_POST['form_id'];

  $sql= "DELETE FROM `stanze` WHERE `id` = $room_id";

  $results = $conn->query($sql);
?>



<?php if ($results) {
    echo ("Eliminazione effettuata");


  } else {
    die('Qualcosa è andato storto');
  }
?>
