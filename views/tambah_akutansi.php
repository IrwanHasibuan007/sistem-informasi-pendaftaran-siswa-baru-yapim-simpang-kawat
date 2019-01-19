<?php

    include"koneksi.php";

    $nis   =$_POST['NIS'];
    $nama =$_POST['nama'];
    $lahir   =$_POST['tanggal_lahir'];
    $alamat =$_POST['alamat'];
    $daftar   =$_POST['tanggal_daftar'];
    $asal   =$_POST['asal_sekolah'];
    
    $insert ="insert into akutansi (NIS,nama,tanggal_lahir,alamat,tanggal_daftar,asal_sekolah)
                values ('$nis',
                        '$nama',
                            '$lahir',
                                '$alamat',
                                    '$daftar',
                                       '$Asal' )";
    $query=  mysqli_query($koneksi, $insert) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }



?>