<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Game</title>
  <!-- Fuente Pixel Art 8-bit -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="index.css" />
</head>

<?php


?>

<body>
  <main>
    <div class="img-container">
      <img src="./assets/background1920x1080.jpg" alt="" />
    </div>
    <section class="menu-section">
      <div class="navigation">
        <button onclick="location.href='./src/game.php'" class="nav-button">
          Start Game
        </button>
        <button <?= (isset($_SESSION['stadistics'])) ? '' : 'hidden' ?> onclick="location.href='./src/data.php'" class="nav-button">
          Statistics
        </button>
      </div>
    </section>
  </main>
</body>

</html>