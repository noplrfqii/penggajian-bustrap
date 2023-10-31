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
include '../../templates/navbar.php';
?>
<!-- End Navbar -->
<?php
$id = $_GET['id'];

$data = $koneksi->query("SELECT * FROM karyawan WHERE nik = '$id'")->fetch_array();


?>
<body>
    <h2 style="margin-top: 20px; margin-bottom: 20px; text-align:center;">Edit Data Karyawan</h2>
    <br>

    <!--card-->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="card-body bg-dark">
                    <div class="form-group row">
                        
                        <div row mb-3>
                            <label class="col-2" style="color: white;">NIK</label>
                            <div class="col-6 ">
                                <input name="nik" class="form-control" type="text" placeholder="Isikan NIK" value="<?= $data['nik'] ?>"readonly>
                            </div>
                        </div>

                        <div row mb-3>
                            <label class="col-2" style="color: white;">NAMA</label>
                            <div class="col-6 ">
                                <input name="nama" class="form-control" type="text" placeholder="Isikan Nama" value="<?= $data['nama'] ?>">
                            </div>
                        </div>

                        <div row mb-3>
                            <label class="col-2" style="color: white;">Tanggal Mulai</label>
                            <div class="col-6 ">
                                <input name="tanggal_mulai" class="form-control" type="date" placeholder="Isikan Tanggal" value="<?= $data['tanggal_mulai'] ?>">
                            </div>
                        </div>

                        <div row mb-3>
                            <label class="col-2" style="color: white;">Gaji Pokok</label>
                            <div class="col-6 ">
                                <input name="gaji_pokok"  class="form-control" type="number" placeholder="Isikan Gaji Pokok" value="<?= $data['gaji_pokok'] ?>">
                            </div>
                        </div>

                        <div row mb-3>
                            <label class="col-2" style="color: white;">Status Karyawan</label>
                            <div class="col-6 ">
                                <select name="status_karyawan" id="" class="form-control select">
                                    
                                    <option value="TETAP"<?= $data
                                    ['status_karyawan'] =='TETAP' ? "selected" :"" ?> >Tetap</option>
                                    <option value="KONTRAK"<?= $data
                                    ['status_karyawan'] =='KONTRAK' ? "selected" :"" ?> >Kontrak</option>
                                    <option value="MAGANG"<?= $data
                                    ['status_karyawan'] =='MAGANG' ? "selected" :"" ?> >Magang</option>
                                </select>
                            </div>
                        </div>

                        <div row mb-3>
                            <label class="col-2" style="color: white;">Bagian</label>
                            <div class="col-6 ">
                                <select name="bagian_id" class="form-control">
                                <option value="">--Pilih--</option>
                                    <?php
                                        $bagian = $koneksi->query("select * from bagian ");
                                        foreach($bagian as $row){
                                    ?>
                                    <option value="<?= $row ['id'] ?>"
                                    <?php if ($row['id'] == $data['bagian_id']) {
                                        echo"selected";
                                    } ?>
                                    ><?= $row['nama']?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="edit" class="btn btn-success">Simpan</button>

                </div>
            </div>
        </form>
    </section>
   
</body>
    <!--End card-->

    <?php
    include '../../templates/script.php';
    ?>

</html>

<script>
    new DataTable('#example');
</script>