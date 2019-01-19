<?php
$kode = mysql_query("select max(NIS) from akutansi") or die (mysql_error());
$datakode = mysql_fetch_array($kode);
if ($datakode) {
    $nilaikode = substr($datakode[0], 1);
    $kode =  (int) $nilaikode;
    $kode = $kode + 1 ;
    $hasilkode = "191".str_pad($kode, 3, "0", STR_PAD_LEFT);

}
else{
    $hasilkode = "191001";
}



if($_POST){
    //Ambil data dari form
  $nis=$_POST['NIS'];
  $nama=$_POST['nama'];
  $lahir=$_POST['tanggal_lahir'];
  $alamat=$_POST['alamat'];
  $daftar=$_POST['tanggal_taftar'];
  $asal=$_POST['asal_sekolah'];
    //buat sql
    $sql="INSERT INTO akutansi VALUES ('$nis','$nama','$lahir','$alamat','$daftar','$asal')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }


?>