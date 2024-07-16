<?= $this->extend('layout/v_layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2><?= $komik['judul']; ?></h2>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/img/<?= $komik['sampul']; ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">id : <?= $komik['id']; ?></p>
                    <p class="card-text">slug : <?= $komik['slug']; ?></p>
                    <p class="card-text">penulis : <?= $komik['penulis']; ?></p>
                    <p class="card-text">created_at : <?= $komik['created_at']; ?></p>
                    <p class="card-text">updated_at : <?= $komik['updated_at']; ?></p>
                    <td><a href="/komik/" class=" btn btn-success">Kembali</a></td>
                    <td><a href="/komik" class=" btn btn-warning">Edit</a></td>
                    <form action="/komik/delete/<?= $komik['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                    </form>
                    <!-- <td><a href="/komik/delete/< ?= $komik['id']; ?>" class=" btn btn-danger">Delete</a></td> -->
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>