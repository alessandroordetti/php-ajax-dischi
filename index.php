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

    <main id="app">
        <div class="container-dischi">
            <div class="disco" v-for="element in dischi">
                <img :src="element.poster" :alt="element.title">
                <h2>{{element.title}}</h2>
                <h4>{{element.autore}}</h4>
                <h5>{{element.anno}}</h5>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="main.js"></script>
</body>
</html>