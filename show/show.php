<?php include __DIR__ . '/../env.php'; ?>
<?php include __DIR__ . '/server_show.php'; ?>

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
      <a href="<?php echo $basePath?>">Torna alla pagina principale</a>
    </header>

    <main>
      <h2>Stai vedendo la stanza numero: <?php echo $room['room_number']; ?></h2>
      <ul>
        <li>ID: <?php echo $room['id']; ?> </li>
        <li>Numero stanza: <?php echo $room['room_number']; ?></li>
        <li>Piano: <?php echo $room['floor']; ?></li>
        <li>Letti: <?php echo $room['beds']; ?></li>
        <li>Creato il: <?php echo $room['created_at']; ?></li>
      </ul>
    </main>

  </body>
</html>
