<?php
require('connection.php');
if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
    $nome = $_FILES['image']['name'];
    $imagem = file_get_contents($_FILES['image']['tmp_name']);

     $stmt = $conn->prepare("INSERT INTO images (name, imagem) VALUES(?, ?)");
     $stmt->bindParam(1, $nome);
     $stmt->bindParam(2, $imagem);
     $stmt->execute();
}

?>