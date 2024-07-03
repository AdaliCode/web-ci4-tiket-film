<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IntiFilm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Poetsen+One&display=swap');

        body {
            font-family: "Poetsen One", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">IntiFilm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-1">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="py-5">
        <div class="container mb-5">
            <h1>TELAH HADIR DI SINEMA</h1>
            <div class="row mt-3">
                <?php for ($i = 0; $i < 7; $i++) : ?>
                    <div class="col-auto">
                        <img src="film.jpg" alt="" width="200">
                        <p class="mt-1">DESPICABLE ME 4</p>
                    </div>
                <?php endfor; ?>
            </div>
            <hr>
            <h1>BLOG FILM</h1>
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <div class="row mt-3">
                    <div class="col-auto">
                        <img src="blog.jpg" alt="" width="200">
                    </div>
                    <div class="col">
                        <h4>Inside Out 2 Kalahkan Dune Part: 2 Sebagai Film Terlaris Sejauh ini di Amerika Serikat!</h4>
                        <h5 style="color: grey">Monday, 24 June 2024</h5>
                        <p>Setelah sebelumnya Dune: Part Two berhasil mencuri perhatian dan menjadi film terlaris di negeri asalnya, Amerika Serikat. Kini film Disney bersama dengan Pixar, Inside Out...</p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <div class="p-5 bg-primary text-light">
            <h1>VIDEO & TRAILERS</h1>
            <div class="row justify-content-center">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="col-4">
                        <iframe src="https://www.youtube.com/embed/LtNYaH61dXY?controls=1" frameborder="0" width="100%" height="300" class="rounded"></iframe>
                        DESPICABLE ME 4 | OFFICIAL TRAILER
                    </div>
                <?php endfor; ?>

            </div>
        </div>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>