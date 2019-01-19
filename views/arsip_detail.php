<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM arsip WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        
                         <tr>
                            <td>NIS</td> <td><?= $data['NIS'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Siswa</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td> <td><?= $data['tgl_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Daftar</td> <td><?= $data['tgl_daftar'] ?></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td> <td><?= $data['asal'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pendaftar </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

