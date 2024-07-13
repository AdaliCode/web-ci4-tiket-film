<?= $this->extend('layout/template'); ?>
<?= $this->section('container'); ?>
<div class="row">
    <div class="col-8">
        <h2 class="my-3">Ubah Data Film</h2>
        <form action="/movie/update/<?= $detailMovie['id']; ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" autofocus value="<?= old('title', $detailMovie['title']); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="cover" class="col-sm-2 col-form-label">Poster</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cover" name="cover" autofocus value="<?= old('cover', $detailMovie['cover']); ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ubah Data Film</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>