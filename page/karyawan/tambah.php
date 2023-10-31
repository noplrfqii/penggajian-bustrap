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
    <h2 style="margin-top :25px; margin-bottom : 25px; text-align: center">Tambah Data Karyawan</h2>

    <!--card-->
    <section class="container">
        <form action="proses.php" method="post">
        <div class="card">
            <div class="card-body bg-dark">
                <!-- NIK -->
                <div class="form-group row mb-3">
                    <label class="col-2" style="color: white;">NIK</label>
                    <div class="col-8">
                        <input name="nik" class="form-control" type="text" placeholder="Masukan NIK">
                    </div>
                </div>
                <!-- Nama -->
                <div class="row mb-3">
                    <label class="col-2" style="color: white;">Nama</label>
                    <div class="col-8">
                        <input name="nama" class="form-control" type="text" placeholder="Masukan Nama">
                    </div>
                </div>
                <!-- Tanggal Mulai -->
                <div class="row mb-3">
                    <label class="col-2" style="color: white;">Tanggal Mulai</label>
                    <div class="col-8">
                        <input name="tanggal_mulai" class="form-control" type="date" placeholder="Masukan Tanggal Mulai">
                    </div>
                </div>
                <!-- Gaji Pokok -->
                <div class="row mb-3">
                    <label class="col-2" style="color: white;">Gaji Pokok</label>
                    <div class="col-8">
                        <input name="gaji_pokok" class="form-control" type="number" placeholder="Masukan Gaji Pokok">
                    </div>
                </div>
                <!-- Status Karyawan -->
                <div class="row mb-3">
                    <label class="col-2" style="color: white;">Status Karyawan</label>
                    <div class="col-8">
                        <select class="form-control" name="status_karyawan" id="">
                            <option value="TETAP">--Pilih--</option>
                            <option value="TETAP">TETAP</option>
                            <option value="KONTRAK">KONTRAK</option>
                            <option value="MAGANG">MAGANG</option>
                        </select>
                    </div>
                </div>
                <!-- Bagian -->
                <div class="row mb-3">
                    <label class="col-2" style="color: white;">Bagian</label>
                    <div class="col-8">
                        <select class="form-control" name="bagian_id">
                            <option value="">--Pilih--</option>
                            <?php 
                            $bagian = $koneksi->query("SELECT * FROM bagian");
                                foreach($bagian as $row){
                            ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['nama'] ?></option>
                            <?php }?>
                        </select>
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