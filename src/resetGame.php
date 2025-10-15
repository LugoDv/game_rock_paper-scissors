<?php

session_start();
if (isset($_SESSION['stadistics'])) {
  session_destroy();

  header('Location: ../index.php');
}
