<?php

include __DIR__ . "/../config/database.php";

$sql = "CREATE TABLE IF NOT EXISTS dates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE
)";

$pdo->exec($sql);

echo "Table dates créée avec succès !";
