<?=$this->extend("template/dashboard")?>

<?=$this->section("content")?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Catatan Perjalanan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive mb-4">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Suhu Tubuh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($catatan_perjalanan as $catatan): ?>
                        <tr>
                            <td><?= $catatan["tanggal"] ?></td>
                            <td><?= $catatan["waktu"] ?></td>
                            <td><?= $catatan["lokasi"] ?></td>
                            <td><?= $catatan["suhu"] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
            <a href="/isidata" class="btn btn-primary btn-icon-split float-right">
                <span class="icon text-white-50">
                    <i class="fas fa-flag"></i>
                </span>
                <span class="text">Isi Catatan Perjalanan</span>
            </a>
    </div>
</div>

<?= $this->endSection() ?>