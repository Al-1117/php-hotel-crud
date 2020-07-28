<?php include __DIR__ . '/../env.php'; ?>
<?php include __DIR__ . '/server_update.php'; ?>

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
      <h2>Modifica la stanza numero <?php echo $room['room_number']?> </h2>

      <form action="<?php echo $basePath . '/update/update.php' ?>" method="POST">

        <div class="options">
          <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
        </div>

        <div class="options">
          <label>Numero stanza</label>
          <input type="text" name="room_number" value="<?php echo $room['room_number'] ?>">
        </div>
        <div class="options">
          <label>Piani</label>
          <input type="text" name="room_floor" value="<?php echo $room['floor'] ?>">
        </div>
        <div class="options">
          <label>Letti</label>
          <input type="text" name="room_beds" value="<?php echo $room['beds'] ?>">
        </div>

        <input type="submit" name="" value="Conferma">

      </form>
    </main>

  </body>
</html>
