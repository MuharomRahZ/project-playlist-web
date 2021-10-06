<?php
$data = file_get_contents('playlist-genre.json');
$genre = json_decode($data,true);

$genre = $genre["genre"];


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>My Playlist - By Genre</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="playlist-main.php"><b>My Playlist</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="playlist-main.php">Home</a>
                    <a class="nav-link" href="playlist-by-all-songs.php">All Songs</a>
                    <a class="nav-link active" aria-current="page" href="playlist-by-genre.php">Genre</a>
                    <a class="nav-link" href="playlist-by-mood.php">Mood</a>
                    <a class="nav-link" href="playlist-by-artist.php">Artists</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <h1>Genre</h1>
        </div>

        <div class="row">
            <?php foreach($genre as $row): ?>
            <div class="col-md-4">
                <!-- <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Pop</a>
                    <a href="#" class="list-group-item list-group-item-action">Rock</a>
                    <a href="#" class="list-group-item list-group-item-action">R&B</a>
                    <a href="#" class="list-group-item list-group-item-action">Jazz</a>
                </div> -->

                <div class="card">
                    <img src="img-lagu/genre/<?= $row["gambar"] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row["jenis"] ?></h5>
                        <p class="card-text">Artis: <?= $row["deskripsi"] ?></p>
                        <a href="<?= $row["link"] ?>" target="_blank" class="btn btn-primary">Lihat Playlist</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
        </div>
    </div>
    
    <!-- footer -->
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item">
                    <a href="playlist-main.php" class="nav-link px-2 text-muted">Home</a>
                </li>
                <li class="nav-item">
                    <a href="playlist-by-all-songs.php" class="nav-link px-2 text-muted">All Songs</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-2 text-muted">Genre</a>
                </li>
                <li class="nav-item">
                    <a href="playlist-by-mood.php" class="nav-link px-2 text-muted">Mood</a>
                </li>
                <li class="nav-item">
                    <a href="playlist-by-artist.php" class="nav-link px-2 text-muted">Artists</a>
                </li>
            </ul>
            <p class="text-center text-muted">© copyright 2021 | Rahmat Zaki Muharom</p>
        </footer>
    </div>
    <!-- end footer -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>