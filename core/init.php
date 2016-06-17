<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=social", "root", "");
} catch (PDOException $e) {
    echo "Error:" . $e->getMessage();
    die();
}