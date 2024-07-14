<?= $this->extend('layout/template'); ?>
<?= $this->section('container'); ?>
<h2 class="text-uppercase mb-3">Ubah Data Film</h2>
<div class="row">
    <div class="col">
        <form action="/movie/update/<?= $detailMovie['id']; ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control border border-dark <?= (isset(session('validation')['title'])) ? 'is-invalid' : ''; ?>" id="title" name="title" autofocus value="<?= old('title', $detailMovie['title']); ?>">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= session('validation')['title'] ?? ''; ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Durasi Film</label>
                <div class="col-sm-5">
                    <input type="number" max="3" min="0" class="form-control border border-dark <?= (isset(session('validation')['hour_duration'])) ? 'is-invalid' : ''; ?>" id="hour_duration" name="hour_duration" autofocus value="<?= old('hour_duration', $detailMovie['hour_duration']); ?>">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= session('validation')['hour_duration'] ?? ''; ?>
                    </div>
                </div>
                <div class="col-sm-5">
                    <input type="number" max="59" min="0" class="form-control border border-dark <?= (isset(session('validation')['minutes_duration'])) ? 'is-invalid' : ''; ?>" id="minutes_duration" name="minutes_duration" autofocus value="<?= old('minutes_duration', $detailMovie['minutes_duration']); ?>">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= session('validation')['minutes_duration'] ?? ''; ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="release" class="col-sm-2 col-form-label">Rilis</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control border border-dark <?= (isset(session('validation')['release'])) ? 'is-invalid' : ''; ?>" id="release" name="release" autofocus value="<?= old('release', $detailMovie['release']); ?>">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= session('validation')['release'] ?? ''; ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="form-label">Deskripsi Film</label>
                <textarea class="form-control border border-dark" id="description" name="description" rows="3"><?= old('description', $detailMovie['description']); ?></textarea>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Trailer Film Youtube</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control border border-dark <?= (isset(session('validation')['trailer'])) ? 'is-invalid' : ''; ?>" id="trailer" name="trailer" autofocus value="<?= old('trailer', $detailMovie['trailer']); ?>">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= session('validation')['trailer'] ?? ''; ?>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ubah Data Film</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>