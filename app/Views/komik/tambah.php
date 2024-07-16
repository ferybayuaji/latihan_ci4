<?= $this->extend('layout/v_layout'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col -8">
            <h2>tambah data komik</h2>
            <!-- < ?= $validation->listErrors(); ?> -->
            <form action="/komik/save" method="post">
                <?= csrf_field(); ?>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" placeholder="judul" name='judul' autofocus value="<?= old('judul'); ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                    <!-- <div class="form-group col-md-6"> 
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" placeholder="slug" name='slug'>
                    </div>-->
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" class="form-control" id="penulis" placeholder="penulis" name='penulis' value="<?= old('penulis'); ?>">
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>
</div>

<!-- class="invalid-feedback" -->

<?= $this->endsection(); ?>