<?= $this->extend('layout/v_layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt -2">DAFTAR KOMIK</h1>
            <a href="/komik/adddata" class=" btn btn-primary mb-3">Tambah Data Komik</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <p><?= session()->getFlashdata('pesan'); ?></p>
            <?php endif; ?>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $k['judul']; ?></td>
                            <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
                            <td><?= $k['slug']; ?></td>
                            <td><a href="/komik/<?= $k['slug']; ?>" class=" btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>