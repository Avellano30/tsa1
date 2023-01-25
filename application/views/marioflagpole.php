<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Mario Flag Pole</title>

    <style>
    .justify-content-center{
        border: 2px solid black;
        width: 50%;
        margin: auto;
    }
    </style>
</head>
<body>
    <div class="d-flex justify-content-evenly align-items-center mt-5">
        <h1>Mario Flag Pole</h1>
        <a class="btn btn-dark" href="<?= base_url('welcome');?>">Back to homepage</a>
    </div>
    <div class="d-flex justify-content-center mb-3 mt-3">
        <h5>Argument: <?= $a ?></h5>
    </div>
    <div class="d-flex justify-content-center">
        <?php
        if(!is_numeric($a)){
            echo "Invalid Input";
        }
        else{
            $k=1;
            for($i=1; $i<=$a ;$i++){
            for($j=0;$j<=$i; $j++){
            echo $k."";
            $k++;
            }
            echo "<br>";
            }
        }
        ?>
    </div>
</body>
</html>