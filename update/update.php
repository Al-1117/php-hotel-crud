<?php

include __DIR__ . '/../env.php';


include __DIR__ . '/../database.php';


  $room_id = $_POST['id'];

  $room_number = $_POST['room_number'];

  $room_beds = $_POST['room_beds'];

  $room_floor = $_POST['room_floor'];

  $sql= "UPDATE `stanze` SET `room_number` = $room_number, `floor` = $room_floor,
  `beds` = $room_beds, `updated_at` = NOW() WHERE `id` = $room_id";


  $results = $conn->query($sql);

  if ($results) {
    header('Location:' . $basePath . '?update_room='. $room_number);
  } else {
    die("query error");
  }


 ?>
