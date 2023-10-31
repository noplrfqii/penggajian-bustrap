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
$nik = $_GET['id'];

$data = $koneksi->query("SELECT * FROM bagian WHERE id = '$nik'")->fetch_array();


?>
<body>
    <h2 style="margin-top: 20px; margin-bottom: 20px; text-align:center;">Edit Data Penggajian</h2>
    <br>

    <!--card-->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="card-body bg-dark">
                    <div class="form-group row">
                        
                        <div row mb-3>
                            <label class="col-2" style="color: white;">ID</label>
                            <div class="col-6 ">
                                <input name="nik" class="form-control" type="text" placeholder="Isikan ID" value="<?= $data['id'] ?>"readonly>
                            </div>
                        </div>

                        <div row mb-3>
                            <label class="col-2" style="color: white;">Nama</label>
                            <div class="col-6 ">
                                <select name="status_karyawan" id="" class="form-control select">
                                    
                                    <option value="3"<?= $data
                                    ['nama'] =='Manager' ? "selected" :"" ?> >Manager</option>
                                    <option value="2"<?= $data
                                    ['nama'] =='HRD' ? "selected" :"" ?> >HRD</option>
                                    <option value="1"<?= $data
                                    ['nama'] =='Marketing' ? "selected" :"" ?> >Marketing</option>
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