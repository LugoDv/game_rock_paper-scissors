<?php
// Configuración de conexión a la base de datos
// Las variables vienen del contenedor Docker (.env)

$host = getenv('MYSQL_HOST') ?: 'mysql';
$dbname = getenv('MYSQL_DATABASE') ?: 'game_db';
$username = getenv('MYSQL_USER') ?: 'game_user';
$password = getenv('MYSQL_PASSWORD') ?: '';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Error de conexión: " . $e->getMessage());
}
