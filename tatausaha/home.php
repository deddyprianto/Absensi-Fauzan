<!-- Page Heading -->
<?php include "koneksi.php"; ?>

<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Dashboard Tata Usaha <small>SMA TERPADU ASSHULAHAA</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12" style="display: flex; flex-wrap: wrap; justify-content: center;">
    <?php 
    $data = mysqli_query($conn,"SELECT * FROM tb_guru");
        $jumlahGuru = mysqli_num_rows($data);
    ?>
        <div class="card" style="border-radius: 15px; width: 20%; height: 200px; background-color: #eaeaea; margin: 20px; display: flex; justify-content: center; align-items: center;">
        <i class="fa fa-fw fa-users" style="color: gray; font-size: 100px;"></i> <span style="font-size: 17px; color: gray;">Jumlah Guru <?= $jumlahGuru; ?></span>
        </div>
        <div class="card" style="border-radius: 15px; width: 20%; height: 200px; background-color: #eaeaea; margin: 20px; display: flex; justify-content: center; align-items: center;">
        <?php 
    $data = mysqli_query($conn,"SELECT * FROM tb_siswa");
        $jumlahSiswa = mysqli_num_rows($data);
    ?>
        <i class="fa fa-fw fa-graduation-cap" style="color: red; font-size: 100px;"></i> <span style="font-size: 17px; color: gray;">Jumlah Siswa <?= $jumlahSiswa; ?></span>
        </div>
        <div class="card" style="border-radius: 15px; width: 20%; height: 200px; background-color: #eaeaea; margin: 20px; display: flex; justify-content: center; align-items: center;">
        <?php 
    $data = mysqli_query($conn,"SELECT * FROM tb_kelas");
        $jumlahKelas = mysqli_num_rows($data);
    ?>
        <i class="fa fa-fw fa-search-plus" style="color: salmon; font-size: 100px;"></i> <span style="font-size: 17px; color: gray;">Jumlah Kelas <?= $jumlahKelas; ?></span>
        </div>
        <div class="card" style="border-radius: 15px; width: 20%; height: 200px; background-color: #eaeaea; margin: 20px; display: flex; justify-content: center; align-items: center;">
        <?php 
    $data = mysqli_query($conn,"SELECT * FROM tb_mapel");
        $jumlahMapel = mysqli_num_rows($data);
    ?>
        <i class="fa fa-fw fa-book" style="color: darkkhaki; font-size: 100px;"></i> <span style="font-size: 17px; color: gray;">Jumlah Mapel <?= $jumlahMapel; ?></span>
        </div>
        <div class="card" style="border-radius: 15px; width: 20%; height: 200px; background-color: #eaeaea; margin: 20px; display: flex; justify-content: center; align-items: center;">
        <?php 
    $data = mysqli_query($conn,"SELECT * FROM tb_pengguna");
        $jumlahPengguna = mysqli_num_rows($data);
    ?>
        <i class="fa fa-fw fa-sign-in" style="color: green; font-size: 100px;"></i> <span style="font-size: 17px; color: gray;">Jumlah Akun <?= $jumlahPengguna; ?></span>
        </div>
    
       
    </div>
</div>