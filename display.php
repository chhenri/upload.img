<?php
require('connection.php');
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT name, imagem FROM images WHERE id=?");
$stmt->bindParam(1, $id);
$stmt->execute();

header("Contet-Type: image/jpeg");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
echo $row['imagem'];

?>