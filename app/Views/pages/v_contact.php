<?= $this->extend('layout/v_layout'); ?>


<?= $this->section('content'); ?>

<div class="c container">
    <div class="row">
        <div class="col">
            <h1>Hello, world!</h1>
            <p>Contact </p>


            <?php foreach ($alamat as $a) : ?>
                <ul>
                    <li> <?= $a['tipe']; ?></li>
                    <li> <?= $a['alamat']; ?></li>
                    <li> <?= $a['kota']; ?></li>
                </ul>
            <?php endforeach; ?>


        </div>
    </div>
</div>

<?= $this->endSection(); ?>