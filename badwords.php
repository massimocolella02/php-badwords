<?php
    $testo = $_GET['testoDaStampare'];
    $parolaDaCensurare = $_GET['parolaDaCensurare'];

    $testo_censurato = str_replace($parolaDaCensurare, '***', $testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testo php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3>Il testo è:</h3>
        <p><?php echo $testo?></p>
        <h6>Lunghezza: <?php echo strlen($testo)?></h6>

        <h3>Il testo con la parola censurata è:</h3>
        <p><?php echo $testo_censurato?></p>
        <h6>Lunghezza: <?php echo strlen($testo_censurato)?></h6>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>