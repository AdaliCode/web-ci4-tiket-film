<?= $this->extend('layout/template'); ?>
<?= $this->section('no-container-top'); ?>
<div class="p-5 bg-primary text-light">
    <div class="row align-items-center" id="movieDetail">
        <div class="col-3">
            <img src="../../cover/<?= $detailMovie['cover'] ?? 'defaultCover.jpg'; ?>" alt="" class="rounded" width="100%">
        </div>
        <div class="col">
            <h1><?= strtoupper($detailMovie['title']); ?></h1>
            <h5>XXI, CGV, Cinépolis</h5>
            <hr>
            <span class="text-dark"><?= (!$detailMovie['description'] || $detailMovie['description'] == '') ? 'belum ada Deskripsi Film' : $detailMovie['description']; ?></span>
            <br>
            <hr>
            WATCH THE TRAILER | <?= $detailMovie['hour_duration']; ?>h <?= $detailMovie['minutes_duration']; ?>min | <a href="<?= base_url('/movie/edit/' . $detailMovie['id']); ?>" class="text-decoration-none text-light">Ubah Film</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('container'); ?>
<div class="row" id="movieCast">
    <h1>TRAILER</h1>
    <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?= $detailMovie['trailer']; ?>?autoplay">
    </iframe>
</div>
<hr>
<div class="row" id="movieCast">
    <h1>CAST & CREW</h1>
    <?php for ($i = 0; $i < 6; $i++) : ?>
        <div class="col-md-4">
            <div class="row align-items-center py-3">
                <div class="col-auto"><img src="../../cast/defaultCast.jpeg" class="rounded-circle" width="100" height="100"></div>
                <div class="col-auto">
                    <h5 class="text-secondary">Casts</h5>
                    <h4><?= (isset($detailMovie['all_casts']) && isset(explode(',', $detailMovie['all_casts'])[$i])) ? explode(',', $detailMovie['all_casts'])[$i] : 'Ma Dong Seok'; ?></h4>
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