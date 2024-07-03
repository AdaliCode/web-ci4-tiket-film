<?= $this->extend('layout/template'); ?>
<?= $this->section('no-container-top'); ?>
<div class="p-5 bg-primary text-light">
    <div class="row align-items-center" id="movieDetail">
        <div class="col-3">
            <img src="../film.jpg" alt="" class="rounded" width="100%">
        </div>
        <div class="col">
            <h1><?= strtoupper($detailMovie['title']); ?></h1>
            <h5>XXI, CGV, Cinépolis</h5>
            <p><?= $detailMovie['description']; ?></p>
            <p>WATCH THE TRAILER | 1h 25min</p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('container'); ?>
<div class="row" id="movieCast">
    <h1>TRAILER</h1>
    <iframe width="100%" height="500" src="https://www.youtube.com/embed/LtNYaH61dXY?autoplay">
    </iframe>
</div>
<hr>
<div class="row" id="movieCast">
    <h1>CAST & CREW</h1>
    <?php for ($i = 0; $i < 6; $i++) : ?>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('cast.jpg') }}" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Sandra Bullock</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Scarlet Overkill (voice)</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endfor; ?>
    <hr>
    <div class="row my-3">
        <h1>PHOTOS</h1>
        <?php for ($i = 0; $i < 3; $i++) : ?> <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('preview.png') }}" class="card-img" alt="...">
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
<?= $this->endSection(); ?>