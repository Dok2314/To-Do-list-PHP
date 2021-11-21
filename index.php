<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 style="text-align:center;">Список Дел</h1>
    <form action="add.php" method="POST" class="form-control">
        <div class="form-group">
            <input type="text" name="task" id="task" class="form-control">
        </div>
        <br>
        <input type="submit" value="Создать" name="sendTask" class="btn btn-success">
    </form>
    <?php
    require_once('configDB.php');
    echo '<ul>';
    $query = $pdo->query("SELECT * FROM `tasks` ");
    while($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<li><b>'.$row->task.'<a href="/delete.php?id='.$row->id.'"><button class="btn btn-danger">Удалить</button></a>'.'</li></b>';
    }
    echo '</ul>';
    ?>
</body>
</html>