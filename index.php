
<?php include __DIR__ . '/env.php'; ?>
<?php include __DIR__ . '/server.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boolean Hotel</title>
    <link rel="stylesheet" href="<?php $basePath; ?>my-app/dist/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <h1>Boolean Hotel</h1>
    </header>

    <main>
      <table>

        <thead>
          <tr>
            <th>ID</th>
            <th>Room number</th>
            <th>Floor</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rooms as $room) { ?>
            <!-- Inizio singola stanza -->
          <tr>
            <td><?php echo $room['id']; ?></td>
            <td><?php echo $room['room_number'] ?></td>
            <td><?php echo $room['floor'] ?></td>
            <td><a href="<?php echo $basePath . '/show/show.php?id=' . $room['id']; ?>">View</a></td>
          </tr>
          <!-- Fine Singola Stanza -->
        <?php } ?>
          <tr>
            <td>2</td>
            <td>102</td>
            <td>2</td>
          </tr>
        </tbody>
      </table>
    </main>

  </body>
</html>
