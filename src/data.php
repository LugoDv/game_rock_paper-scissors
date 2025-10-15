<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data</title>
  <!-- Fuente Pixel Art 8-bit -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="../style/data.css">
</head>

<body>
  <?php
  if (!session_id()) {
    session_start();
  }



  $stadistics = [];


  if (isset($_SESSION['stadistics'])) {

    $stadistics = $_SESSION['stadistics'];
  }


  function calculeNumber($stadistic, $total)
  {

    return round($stadistic / $total * 100, 2);
  }







  ?>

  <main>
    <div class="table-container">
      <table class="stadistics">
        <h2>stadistics</h2>
        <thead>
          <tr>
            <th>Wins</th>
            <th>Losse</th>
            <th>Draws</th>
            <th>Total Games</th>
          </tr>

        </thead>
        <tbody>
          <tr>
            <td><?= (isset($_SESSION['stadistics'])) ? calculeNumber($stadistics['wins'], $stadistics['games']) : 0 ?>%</td>
            <td><?= (isset($_SESSION['stadistics'])) ? calculeNumber($stadistics['losses'], $stadistics['games']) : 0 ?>%</td>
            <td><?= (isset($_SESSION['stadistics'])) ? calculeNumber($stadistics['draws'], $stadistics['games']) : 0 ?>%</td>
            <td><?= (isset($_SESSION['stadistics'])) ? $stadistics['games'] : 0 ?></td>
          </tr>
        </tbody>

      </table>
      <nav class="navigation">
        <button onclick="location.href='game.php'" class="nav-button">Continue Game</button>
        <button onclick="location.href='../index.php'" class="nav-button">Home</button>
        <button onclick="location.href='resetGame.php'" class="nav-button ">Reset Game</button>
      </nav>

    </div>
  </main>

</body>

</html>