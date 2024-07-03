<?= $this->extend('layout/template'); ?>
<?= $this->section('container'); ?>
<div class="row">
    <div class="col-8">
        <h2 class="my-3">Tambah Data Film</h2>
        <form action="/movie/save" method="post">
            <?= csrf_field() ?>
            <?php
            $errorTitle = '';
            $errorCover = '';
            $pesanErrorTitle = '';
            $pesanErrorCover = '';
            if (session('validation')) {
                if (session('validation')->getError('title')) {
                    $errorTitle = 'is-invalid';
                    $pesanErrorTitle = session('validation')->getError('title');
                }
                if (session('validation')->getError('cover')) {
                    $errorCover = 'is-invalid';
                    $pesanErrorCover = session('validation')->getError('cover');
                }
            }
            ?>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= $errorTitle; ?>" id="title" name="title" autofocus>
                    <div class="invalid-feedback">
                        <?= $pesanErrorTitle; ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="cover" class="col-sm-2 col-form-label">Poster</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= $errorCover; ?>" id="cover" name="cover" autofocus>
                    <div class="invalid-feedback">
                        <?= $pesanErrorCover; ?>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>