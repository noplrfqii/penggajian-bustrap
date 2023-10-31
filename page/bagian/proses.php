<?php
include_once '../../config/config.php';
include_once '../../config/koneksi.php';

if (isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $submit = $koneksi ->query("INSERT INTO bagian VALUES(
        '$id',
        '$nama'
        )");

        if ($submit){
            echo "<script>alert('DATA BERHASIL DISIMPAN');location.href='../bagian/';</script>";
        }else {
            echo "<script>alert('DATA GAGAL DISIMPAN !!');location.href='../bagian/tambah';</script>";
        }
}else if (isset($_POST['edit'])){
    $nik             = $_POST['id'];
    $nama            = $_POST['nama'];

    $submit = $koneksi ->query("UPDATE bagian SET 
        id = '$id',
        nama ='$nama',
        WHERE
        id = '$id';
        ");

        if ($submit){
            echo "<script>alert('DATA BERHASIL DIUBAH');location.href='../bagian/';</script>";
        }else {
            echo "<script>alert('DATA GAGAL DIUBAH !!');location.href='../bagian/edit';</script>";
        }
}else if (isset($_GET['id'])) {
    $delete = $koneksi->query("DELETE FROM bagian WHERE id = '$_GET[id]'");
    
    if ($delete) {
        echo "<script>alert('Data Berhasil Dihapus');location.href='../bagian/';</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus');location.href='../bagian/';</script>";
    }
}