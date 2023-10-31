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
    <h2 style="margin-top :25px; margin-bottom : 25px; text-align: center">Penggajian</h2>

    <!--card-->
    <section class="container">
        <div class="card">
          <div class="card-header">
          <a href="tambah" class="btn bg-primary" style="margin-left:10px; color:white;">Tambah</a>
          </div>
          <div class="card-body">
<table class="table" id="example" class="table table-stripped">
  <thead class ="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Karyawan NIK</th>
      <th scope="col">Tahun</th>
      <th scope="col">Bulan</th>
      <th scope="col">Gaji</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
        $karyawan = $koneksi->query("SELECT * FROM penggajian order by id desc");

        while ($data = $karyawan->fetch_array()) {
    ?>
    <tr>
        <td><?= $data['id'] ?></td>
        <td><?= $data['karyawan_nik'] ?></td>
        <td><?= $data['tahun'] ?></td>
        <td><?= $data['bulan'] ?></td>
        <td><?= $data['gaji_bayar'] ?></td>
        <td>
        <a href="edit?id=<?= $data['id'] ?>" class="btn bg-success" style="color:white;">Edit</a>
        <a href="proses?id=<?= $data['id'] ?>" class="btn bg-danger" style="color:white;">Hapus</a>
        </td>
    </tr>
    <?php }?>
  </tbody>
</table>
</div>
        </div>
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