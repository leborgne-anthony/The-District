<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <form action="" method="post" class="container" enctype="multipart/form-data">
        <div class="form-group">
            <label for="labelle">Labelle</label>
            <input type="text" name="libelle" id="" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="btn btn-success form-control">
        </div>
        
        
        <div class="form-group mt-2">
            <button type="submit" class="btn btn-primary">créer</button>
        </div>
        
    </form>
</body>
</html>