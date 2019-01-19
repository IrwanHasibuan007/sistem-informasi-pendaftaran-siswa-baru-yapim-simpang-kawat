<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pendaftar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
                         <div class="form-group">
                            <label for="NIS" class="col-sm-3 control-label">NIS</label>
                            <div class="col-sm-9">
                                <input type="text" name="NIS" class="form-control" id="NIS" placeholder="Inputkan NIS Siswa" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Siswa" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_lahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="textarea" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat Siswa" required>
                            </div>
                        </div>
                        <div class="form-group">
                       
                         <div class="form-group">
                            <label for="tgl_daftar" class="col-sm-3 control-label">Tanggal Daftar</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_daftar" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Daftar" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="asal" class="col-sm-3 control-label">Asal Sekolah</label>
                            <div class="col-sm-9">
                                <input type="text" name="asal" class="form-control" id="inputPassword3" placeholder="Inputkan Asal Sekolah" required>
                            </div>
                        </div>
                        


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-7">
                                <button type="submit" class="btn btn-Info">
                                    <span class="fa fa-save"></span> Simpan Data Siswa</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pendaftar
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nis=$_POST['NIS'];
    $nama=$_POST['nama'];
    $lahir=$_POST['tgl_lahir'];
    $alamat=$_POST['alamat'];
  $daftar=$_POST['tgl_daftar'];
    $asal=$_POST['asal'];
 
    //buat sql
    $sql="INSERT INTO arsip VALUES ('','$nis','$nama','$lahir','$alamat','$daftar','$asal')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
