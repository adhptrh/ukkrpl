<?= $this->extend("template/dashboard") ?>

<?= $this->section("content") ?>
<div class="card shadow mb-4" style="max-width:500px;">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Isi Data Perjalanan</h6>
    </div>
    <div class="card-body">
        <div class="mb-4">
            <p>Tanggal</p>
            <input type="date" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
        </div>
        <div class="mb-4">
            <p>Jam</p>
            <input type="time" class="form-control bg-light border-0 small"  aria-label="Search" aria-describedby="basic-addon2">
        </div>
        <div class="mb-4">
            <p>Lokasi yang dikunjungi</p>
            <input type="text" class="form-control bg-light border-0 small"  aria-label="Search" aria-describedby="basic-addon2">
        </div>
        <div class="mb-4">
            <p>Suhu Tubuh</p>
            <input type="number" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
        </div>
        <a href="/catatanperjalanan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-flag"></i>
            </span>
            <span class="text">Simpan</span>
        </a>
    </div>
</div>
<?= $this->endSection() ?>