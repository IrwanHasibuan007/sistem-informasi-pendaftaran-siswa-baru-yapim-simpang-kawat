<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM arsip WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="NIS" class="col-sm-3 control-label">NIS</label>
                            <div class="col-sm-9">
                                <input type="text" name="NIS" value="<?=$data['NIS']?>"class="form-control" id="inputEmail3" placeholder="NIS">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama Siswa">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_lahir" value="<?=$data['tgl_lahir']?>" class="form-control" id="inputEmail3" placeholder="Tanggal Lahir">
                            </div>
                        </div>
               
                        
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>
                           
                        <div class="form-group">
                            <label for="tgl_daftar" class="col-sm-3 control-label">Tanggal Daftar</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_daftar" value="<?=$data['tgl_daftar']?>" class="form-control" id="inputEmail3" placeholder="Tanggal Lahir">
                            </div>
                        </div>           

                        <div class="form-group">
                            <label for="asal" class="col-sm-3 control-label">Asal Sekolah</label>
                            <div class="col-sm-9">
                                <input type="text" name="asal" value="<?=$data['asal']?>" class="form-control" id="inputPassword3" placeholder="Asal Sekolah">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data </button>
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
    $sql="UPDATE arsip SET NIS='$nis',nama='$nama',tgl_lahir='$lahir',alamat='$alamat',tgl_daftar='$daftar',asal='$asal' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



