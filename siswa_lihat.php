<?php include "koneksi.php"; ?>
<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Siswa</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="inde.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i> Siswa
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header" style="margin-top:-5px;">
            Report Data Siswa
        </h3>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <?php $jumlahSiswaKelasX = mysqli_query($conn, "SELECT kelas from tb_siswa where kelas='X'");
                $hitung = mysqli_num_rows($jumlahSiswaKelasX);
        ?>
        <h4>Data Siswa Kelas X Jumlah: <?= $hitung; ?></h4>
    <div class="table-responsive">
                     <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>J Kelamin</th>
                                <th>Agama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $siswa = mysqli_query($conn,"SELECT * FROM tb_siswa where kelas='X'");
                                while($row3=mysqli_fetch_array($siswa)){
                            ?>
                            <tr>
                                <td><?php echo $row3['nis']; ?></td>
                                <td><?php echo $row3['nama_siswa']; ?></td>
                                <td><?php echo $row3['jenis_kelamin']; ?></td>
                                <td><?php echo $row3['agama']; ?></td>
                                <td><?php echo $row3['tempat_lahir']; ?></td>
                                <td><?php echo $row3['tanggal_lahir']; ?></td>
                                <td><?php echo $row3['alamat']; ?></td>
                                <td><?php echo $row3['kelas']; ?></td>
                                <td><?php echo $row3['jurusan']; ?></td>
                                <td><i><a href="?page=editsiswa&id=<?php echo $row3['id_siswa'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="siswa_hapus.php?id=<?php echo $row3['id_siswa'];?>">Hapus</a></i></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
    <?php $jumlahSiswaKelasX = mysqli_query($conn, "SELECT kelas from tb_siswa where kelas='XI'");
                $hitung = mysqli_num_rows($jumlahSiswaKelasX);
        ?>
        <h4>Data Siswa Kelas XI Jumlah <?= $hitung; ?></h4>
    <div class="table-responsive">
                     <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>J Kelamin</th>
                                <th>Agama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $siswa = mysqli_query($conn,"SELECT * FROM tb_siswa where kelas='XI'");
                                while($row3=mysqli_fetch_array($siswa)){
                            ?>
                            <tr>
                                <td><?php echo $row3['nis']; ?></td>
                                <td><?php echo $row3['nama_siswa']; ?></td>
                                <td><?php echo $row3['jenis_kelamin']; ?></td>
                                <td><?php echo $row3['agama']; ?></td>
                                <td><?php echo $row3['tempat_lahir']; ?></td>
                                <td><?php echo $row3['tanggal_lahir']; ?></td>
                                <td><?php echo $row3['alamat']; ?></td>
                                <td><?php echo $row3['kelas']; ?></td>
                                <td><?php echo $row3['jurusan']; ?></td>
                                <td><i><a href="?page=editsiswa&id=<?php echo $row3['id_siswa'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="siswa_hapus.php?id=<?php echo $row3['id_siswa'];?>">Hapus</a></i></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
    <?php $jumlahSiswaKelasX = mysqli_query($conn, "SELECT kelas from tb_siswa where kelas='XII'");
                $hitung = mysqli_num_rows($jumlahSiswaKelasX);
        ?>
        <h4>Data Siswa Kelas XII Jumlah <?= $hitung; ?></h4>
    <div class="table-responsive">
                     <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>J Kelamin</th>
                                <th>Agama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $siswa = mysqli_query($conn,"SELECT * FROM tb_siswa where kelas='XII'");
                                while($row3=mysqli_fetch_array($siswa)){
                            ?>
                            <tr>
                                <td><?php echo $row3['nis']; ?></td>
                                <td><?php echo $row3['nama_siswa']; ?></td>
                                <td><?php echo $row3['jenis_kelamin']; ?></td>
                                <td><?php echo $row3['agama']; ?></td>
                                <td><?php echo $row3['tempat_lahir']; ?></td>
                                <td><?php echo $row3['tanggal_lahir']; ?></td>
                                <td><?php echo $row3['alamat']; ?></td>
                                <td><?php echo $row3['kelas']; ?></td>
                                <td><?php echo $row3['jurusan']; ?></td>
                                <td><i><a href="?page=editsiswa&id=<?php echo $row3['id_siswa'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="siswa_hapus.php?id=<?php echo $row3['id_siswa'];?>">Hapus</a></i></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
    </div>
</div>