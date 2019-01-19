<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="background: #008299" >

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama">Sistem Informasi Pendaftaran Siswa Baru</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="?page=utama">Home</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendaftaran <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=arsip&actions=tampil">Akuntansi(AKA)</a></li>
                        <li><a href="?page=peminjaman&actions=tampil">Teknik Komputer Jaringan(TKJ)</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Siswa Baru <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=arsip&actions=report">Akuntansi(AKA)</a></li>
						            <li><a href="?page=peminjaman&actions=report">Teknik Komputer Jaringan(TKJ)</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil">User</a></li>


                <?php } ?>


                <li><a href="?page=about&actions=tampil">About</a></li>
                

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
