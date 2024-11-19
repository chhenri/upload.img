<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagem PHP</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data"><!-- enctype="multipart/form-data" reconhece que vai receber arquivos-->
    <input type="file" name="image" id=""/>
    <input type="submit" name="submit" value="Upload"/>
</form> 
</body>
</html>