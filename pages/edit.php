<?php require('header.php'); ?>

<main>

    <section class="py-5 container">
        <div class="d-flex justify-content-between">
            <h4 class="mb-3">Form Edit Data</h4>
            <a href="index.php">Kembali</a>
        </div>
        <hr>
        <form method="POST" action="" enctype="multipart/form-data" class="row">
            <div class="mb-3 col-md-6">
                <label class="form-label">Judul Buku</label>
                <input type="text" class="form-control" name="judul" value="judul" required>
            </div>
            <div class="mb-3 col-md-4">
                <label class="form-label">Penulis</label>
                <input type="text" class="form-control" name="penulis" value="penulis" required>
            </div>
            <div class="mb-2 col-md-2">
                <label class="form-label">Tahun Terbit</label>
                <input type="text" class="form-control" name="tahun_terbit" value="tahun_terbit" required>
            </div>
            <div class="mb-3 col-md-4">
                <label class="form-label">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" value="penerbit" required>
            </div>
            <div class="mb-3 col-md-4">
                <label class="form-label">ISBN</label>
                <input type="text" class="form-control" name="isbn" value="isbn" required>
            </div>
            <div class="mb-3 col-md-4">
                <label class="form-label">Cover Buku</label>
                <input type="file" class="form-control" name="cover" value="cover" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </section>




</main>

<?php require('footer.php') ?>