<?php
    @session_start();
    include "koneksi.php";
    if(@$_SESSION['guru']){
        $id_login=@$_SESSION['guru'];
?>

<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Absensi</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="./index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-send"></i> Absensi
            </li>
        </ol>
    </div>
</div>

<!-- Isi -->
<div class="row">
    <div class="col-lg-5">
        <h3 class="page-header">
            Form Absensi Siswa
        </h3> 

        <form method="post" action="prosestambah.php">
            <div class="form-group">
                <label>Tanggal</label>
                <input class="form-control" name="tanggal" value=" <?php echo $tanggal; ?>" readonly="readonly">
            </div>
            
            <div class="form-group">
                <label>Hari</label>
                <input name="hari" class="form-control" value="<?php echo tanggal("D"); ?>" readonly="readonly">
            </div>
            <?php
                $view=mysqli_query($conn,"select 
                                        tb_pengguna.username, 
                                        tb_guru.nama_guru,
                                        tb_guru.mapel
                                    from 
                                        tb_pengguna, 
                                        tb_guru
                                    where 
                                        tb_pengguna.username='$id_login' 
                                        AND tb_pengguna.username=tb_guru.nip");
                $row=mysqli_fetch_array($view);
            ?>
            <div class="form-group">
                <label>NIP</label>
                <input name="nip" class="form-control" value="<?php echo $row['username']; ?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label>Nama Guru</label>
                <input name="guru" class="form-control" value="<?php echo $row['nama_guru']; ?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label>Mata Pelajaran</label>
                <input name="mapel" class="form-control" placeholder="" value="<?= $row['mapel']; ?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label>Nama Siswa</label>
                <input name="siswa" class="form-control" placeholder="masukkan nama siswa">
            </div>
          
            <div class="form-group" style="margin-top: 30px;">
                <select class="form-control" name="kelas">
                    <option selected>Pilih Kelas</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <input name="jurusan" class="form-control" placeholder="masukkan jurusan">
            </div>
            <div class="form-group" style="margin-top: 30px;">
                <select class="form-control" name="status">
                    <option selected>Pilih Kehadiran</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Sakit">Sakit</option>
                    <option value="Izin">Izin</option>
                    <option value="Alpha">Alpha</option>
                </select>
            </div>
            <input type="submit" name="absen" class="btn btn-primary" value="Absen & Kirim Ke TU">
    </div>
    </form>

    <div class="col-lg-7">
        <h3 class="page-header">
           Hasil Absensi
        </h3>
        <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>No</th>
                                <th>Tanggal</th>
                                <th>Hari</th>
                                <th>Nama Guru Pengajar</th>
                                <th>Mata Pelajaran</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Status Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $view2=mysqli_query($conn,"select tanggal,hari,nama_guru,mapel,nama_siswa,kelas,jurusan,status_kehadiran
                                                    from hasil_absensi where nip='$id_login' order by tanggal asc");
                                $no=1;
                                while($raw2=mysqli_fetch_array($view2)){
                            ?>
                          <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw2['tanggal']; ?></td>
                                <td><?php echo $raw2['hari']; ?></td>
                                <td><?php echo $raw2['nama_guru']; ?></td>
                                <td><?php echo $raw2['mapel']; ?></td>
                                <td><?php echo $raw2['nama_siswa']; ?></td>
                                <td><?php echo $raw2['kelas']; ?></td>
                                <td><?php echo $raw2['jurusan']; ?></td>
                                <td><?php echo $raw2['status_kehadiran']; ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                  
    </div>
</div>

<?php
    }
?>