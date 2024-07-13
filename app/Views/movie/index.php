<?= $this->extend('layout/template'); ?>
<?= $this->section('container'); ?>
<div class="row">
    <?php foreach ($movies as $key => $value) : ?>
        <div class="col-3">
            <?php $slug = $value['slug'] ?>
            <a href="<?= base_url('/movie/' . $slug); ?>" class="text-decoration-none text-dark">
                <img src="../cover/<?= $value['cover'] ?? 'defaultCover.jpg'; ?>" alt="" width="100%" class="rounded">
                <p class="mt-1"><?= strtoupper($value['title']); ?></p>
            </a>
        </div>
    <?php endforeach; ?>
    <?= $pager->links('movie', 'movie_pagination'); ?>
</div>
<?= $this->endSection(); ?>