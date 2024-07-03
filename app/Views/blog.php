<?= $this->extend('layout/template'); ?>
<?= $this->section('container'); ?>
<h1>BLOG</h1>
<div class="row mt-3">
    <?php for ($i = 0; $i < 5; $i++) : ?>
        <div class="col-4 mb-3">
            <img src="blog.jpg" alt="" width="100%">
            <div class="mt-2">
                <h4>Inside Out 2 Kalahkan Dune Part: 2 Sebagai Film Terlaris Sejauh ini di Amerika Serikat!</h4>
                <h5 style="color: grey">oleh <span style="color: blue">MAF</span> - June 24, 2024</h5>
                <p>Setelah sebelumnya Dune: Part Two berhasil mencuri perhatian dan menjadi film terlaris di negeri asalnya, Amerika Serikat. Kini film Disney bersama dengan Pixar, Inside Out....</p>
            </div>
        </div>
    <?php endfor; ?>
</div>
<?= $this->endSection(); ?>