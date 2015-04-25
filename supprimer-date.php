<?php
include "config/database.php";

$id = $_GET['id'];

$sql = "DELETE FROM dates WHERE id = $id";
$pdo->exec($sql);

header("Location: admin.php");
