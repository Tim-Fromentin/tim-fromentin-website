<?php
// Informations de connexion à la base de données
$hostname = "localhost";
$username = "u748661780_admin_01_tfrmt";
$password = "a0hQ34t294du1LfF67fK";
$dbname = "u748661780_db_dev_tfr";

// Connexion à la base de données avec PDO
try {
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}


?>