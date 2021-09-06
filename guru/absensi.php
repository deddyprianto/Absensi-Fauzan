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
                                    where tb_pengguna.username='$id_login' AND tb_pengguna.username=tb_guru.nip ");
                $row=mysqli_fetch_object($view);
            ?>
            <div class="form-group">
                <label>NIP</label>
                <input name="nip" class="form-control" value="<?php echo $row->username; ?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label>Nama Guru</label>
                <input name="guru" class="form-control" value="<?php echo $row->nama_guru; ?>" readonly="readonly">
            </div>
            <div class="form-group">
                <?php 
                    $dataGuru = mysqli_query($conn,"SELECT mapel_dibawakan FROM jadwal_guru where nama_guru='$row->nama_guru' ");
                    $rowmapelDibawakan=mysqli_fetch_array($dataGuru);
                ?>
                <label>Mata Pelajaran yg Dibawakan</label>
                <input name="mapel" class="form-control" placeholder="" value="<?= $rowmapelDibawakan['mapel_dibawakan']; ?>" readonly="readonly">
            </div>         
            <div class="form-group" style="margin-top: 30px;">
                <select class="form-control" name="kelas">
                    <option selected>Pilih Kelas</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
            </div>
            <div class="form-group" style="margin-top: 30px;">
                <select class="form-control" name="jurusan"  id="jurusan">
                    <option selected>Pilih Jurusan</option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                </select>
            </div>
            <div class="form-group inputSayaNama"></div>
            <div class="form-group inputSaya"></div>
            <input type="submit" name="absen" class="btn btn-primary" value="Absen & Kirim Ke TU">  
    </div>
    </form>

    <div class="col-lg-7 modalSaya">
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
                    <!-- AWALAN MODAL  -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">DataBase Siswa Kelas X,XI,XII</h4>
                            </div>
                            <div class="modal-body">
                                <h3 style="text-align: center;">Data Siswa IPA</h3>
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
                            $siswa = mysqli_query($conn,"SELECT * FROM tb_siswa where jurusan='IPA'");
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
                                <td>
                                <div class="checkboxSyaa" style="display: flex; justify-content: space-evenly; align-items: center;">
                                    <input type="checkbox" name="hadir" value="Hadir,<?= $row3['nama_siswa']; ?>" style="margin: 10px;">Hadir
                                    <input type="checkbox" name="sakit" id="sakit" value="Sakit,<?= $row3['nama_siswa']; ?>" style="margin: 10px;">Sakit
                                    <input type="checkbox" name="izin" id="izin" value="Izin,<?= $row3['nama_siswa']; ?>" style="margin: 10px;">Izin 
                                    <input type="checkbox" name="alpha" id="alpha" value="Alpha,<?= $row3['nama_siswa']; ?>" style="margin: 10px;">Alpha 
                                </div>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                                <h3 style="text-align: center;">Data Siswa IPS</h3>
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
                                <th>Pilih Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $siswa = mysqli_query($conn,"SELECT * FROM tb_siswa where jurusan='IPS'");
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
                                <td> 
                                    <div class="checkboxSyaa" style="display: flex; justify-content: space-evenly; align-items: center;">
                                    <input type="checkbox" name="hadir" value="Hadir,<?= $row3['nama_siswa']; ?>" style="margin: 10px;">Hadir
                                    <input type="checkbox" name="sakit" id="sakit" value="Sakit,<?= $row3['nama_siswa']; ?>" style="margin: 10px;">Sakit
                                    <input type="checkbox" name="izin" id="izin" value="Izin,<?= $row3['nama_siswa']; ?>" style="margin: 10px;">Izin 
                                    <input type="checkbox" name="alpha" id="alpha" value="Alpha,<?= $row3['nama_siswa']; ?>" style="margin: 10px;">Alpha 
                                </div>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Selesai</button>
                        </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- akhir modal -->
    </div>
</div>

<?php
    }
?>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>

<script>
$('#jurusan').on('change', function(){
  const selectedPackage = $('#jurusan').val();
  if(selectedPackage){
    $('#exampleModal').modal()
  }
});
$('.modalSaya').on('click', 'input[type=checkbox]' ,(e) => {
    const dataString = e.target.value;
    const hasil = dataString.split(',')
    const [status,nama ] = hasil;
    $('.inputSayaNama').html(`
    <label>Nama Siswa</label>
                <input name="nama" placeholder="${nama}" value="${nama}" class="form-control">
    `)
    $('.inputSaya').html(`
                <label>Status Kehadiran</label>
                <input name="status" placeholder="${status}" value="${status}" class="form-control">
                `)
  
})
</script>