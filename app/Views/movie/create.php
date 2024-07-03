<?= $this->extend('layout/template'); ?>
<?= $this->section('container'); ?>
<div class="row">
    <div class="col-8">
        <h2 class="my-3">Tambah Data Film</h2>
        <form action="/movie/save" method="post">
            <?= csrf_field() ?>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" autofocus>
                </div>
            </div>
            <div class="row mb-3">
                <label for="cover" class="col-sm-2 col-form-label">Poster</label>
                <div class="col-sm-10">
                    <div class="mb-3">
                        <input class="form-control" type="text" id="cover" name="cover">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>