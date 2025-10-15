<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game</title>


  <link rel="stylesheet" href="../style/game.css">
  <!-- Fuente Pixel Art 8-bit -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap"
    rel="stylesheet" />
</head>



<body>

  <?php





  $player = isset($_GET['option']) ? $_GET['option'] : null;

  $option = ['stone', 'paper', 'scissors'];



  function pcPlay($option)
  {

    $resultPc = $option[rand(0, 2)];

    return $resultPc;
  }

  // posibles caso de ganar del jugador
  //p:stone pc:sissor ->player
  //p:paper pc:stone ->player
  //p: sissor pc:paper ->player
  function game($playerOption, $pcOption)
  {
    if (!isset($_SESSION['stadistics'])) {

      $stadistics = [
        "wins" => 0,
        "losses" => 0,
        "draws" => 0,
        "games" => 0,

      ];

      $_SESSION['stadistics'] = $stadistics;
    }

    $_SESSION['stadistics']['games']++;
    if ($playerOption === $pcOption) {
      $_SESSION['stadistics']['draws']++;
      return "DRAW";
    } else if (($playerOption === "stone" && $pcOption === "scissors") ||
      ($playerOption === "paper" && $pcOption === "stone") ||
      ($playerOption === "scissors" && $pcOption === "paper")
    ) {
      $_SESSION['stadistics']['wins']++;
      return "WIN";
    } else {
      $_SESSION['stadistics']['losses']++;
      return "LOSE";
    }
  }

  ?>

  <main>
    <div class="game-container">
      <div class="gaming-container">

        <div class="player-section">
          <h2 class="player-title">Jugador</h2>
          <?php if ($player != null): ?>
            <img src="../assets/<?= $player ?>.png" alt="Player Choice" class="choice-image">
          <?php endif; ?>
        </div>

        <div class="result-section">
          <?php if ($player != null): ?>
            <?php $pcPlayer = pcPlay($option); ?>
            <h1 class="result-text"><?= game($player, $pcPlayer) ?></h1>
          <?php else: ?>
            <h1 class="result-text">VS</h1>
          <?php endif; ?>
        </div>

        <div class="pc-section">
          <h2 class="pc-title">PC</h2>
          <?php if ($player != null): ?>
            <img src="../assets/<?= $pcPlayer ?>.png" alt="PC Choice" class="choice-image">
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="option-container">

      <button onclick="location.href='game.php?option=stone'" class="option-button">
        <img src="../assets/puno-boton.png" alt="Piedra" class="option-image">
      </button>

      <button onclick="location.href='game.php?option=paper'" class="option-button">
        <img src="../assets/mano-boton.png" alt="Papel" class="option-image">
      </button>

      <button onclick="location.href='game.php?option=scissors'" class="option-button">
        <img src="../assets/tijera-buton.png" alt="Tijeras" class="option-image">
      </button>

    </div>

    <nav class="navigation">
      <button onclick="location.href='../index.php'" class="nav-button">Home</button>
      <button <?= (isset($_SESSION['stadistics'])) ? '' : 'hidden' ?> onclick="location.href='data.php'" class="nav-button">stadistics</button>
    </nav>
  </main>

</body>

</html>