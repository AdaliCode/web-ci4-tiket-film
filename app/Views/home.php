<?= $this->extend('layout/template'); ?>
<?= $this->section('container'); ?>


<div class="row align-items-center">
    <div class="col">
        <h1>TELAH HADIR DI SINEMA</h1>
    </div>
    <div class="col">
        <div class="float-end">
            <a href="<?= base_url('/movie/create'); ?>" class="btn btn-primary">Tambah Film</a>
            <a href="<?= base_url('/movie'); ?>" class="btn btn-success mx-1">Lainnya</a>
        </div>
    </div>
</div>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>
<div class="row">
    <?php foreach ($movies as $key => $value) : ?>
        <div class="col-3">
            <?php $slug = $value['slug'] ?>
            <a href="<?= base_url('movie/' . $slug); ?>" class="text-decoration-none text-dark">
                <img src="../cover/<?= $value['cover'] ?? 'defaultCover.jpg'; ?>" alt="" width="100%" class="rounded">
                <p class="mt-1"><?= strtoupper($value['title']); ?></p>
            </a>
        </div>
    <?php endforeach; ?>
</div>
<hr>
<h1>BLOG FILM</h1>
<?php for ($i = 0; $i < 5; $i++) : ?>
    <div class="row mt-3">
        <div class="col-4">
            <img src="../blog.jpg" alt="" width="100%">
        </div>
        <div class="col">
            <h4>Inside Out 2 Kalahkan Dune Part: 2 Sebagai Film Terlaris Sejauh ini di Amerika Serikat!</h4>
            <h5 style="color: grey">Monday, 24 June 2024</h5>
            <p>Setelah sebelumnya Dune: Part Two berhasil mencuri perhatian dan menjadi film terlaris di negeri asalnya, Amerika Serikat. Kini film Disney bersama dengan Pixar, Inside Out...</p>
        </div>
    </div>
<?php endfor; ?>
<?= $this->endSection(); ?>
<?= $this->section('no-container-bottom'); ?>
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
<?= $this->endSection(); ?>