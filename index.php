<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <?php 
        include __DIR__ . "/server/data.php";
    ?>


    <header>
        <div class="img-wrapper">
            <img src="img/Spotify.png" alt="Logo Spotify">
        </div>
    </header>

    <main>
        <div>
            <?php 
                foreach ($dischi as $element) {
                    echo $element['poster'] . '<br>' .
                    $element['title'] . '<br>' .
                    $element['autore'] . '<br>' .
                    $element['genere'] . '<br>' .
                    $element['anno'];
                }
            ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>
</html>