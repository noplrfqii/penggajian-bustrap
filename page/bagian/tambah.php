<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!doctype html>
<html lang="en">

<?php
include '../../templates/head.php';
?>

<!-- Navbar -->
<?php
include '../../templates/navbar.php'
?>
<!-- End Navbar -->

<body>
    <h2 style="margin-top :25px; margin-bottom : 25px; text-align: center">Tambah Data Bagian</h2>

    <!--card-->
    <section class="container">
        <form action="proses.php" method="post">
        <div class="card">
            <div class="card-body bg-dark">
                <!-- NIK -->
                <div class="form-group row mb-3">
                    <label class="col-2" style="color: white;">ID</label>
                    <div class="col-8">
                        <input name="id" class="form-control" type="text" placeholder="Masukan ID">
                    </div>
                </div>
                <!-- Nama -->
                <div class="row mb-3">
                    <label class="col-2" style="color: white;">Nama</label>
                    <div class="col-8">
                        <input name="nama" class="form-control" type="text" placeholder="Masukan Nama">
                    </div>
                </div>
                
            </div>


            <div class="card-footer">
                <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
            </div>
        </div>
        </form>
    </section>
    <!--End card-->
   <?php
    include '../../templates/script.php';
   ?>
</body>


</html>

<script>
  new DataTable('#example');
</script>