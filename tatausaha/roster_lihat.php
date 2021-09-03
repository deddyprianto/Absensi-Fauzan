<?php include "koneksi.php"; ?>
<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Roster Pelajaran</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="/som/guru/index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-send"></i> Roster Pelajaran
            </li>
        </ol>
    </div>
</div>

<!-- Isi -->


<div class="row" style="margin-bottom:10px;">
    <div class="col-lg-12" style="padding-right:20px; border-right: 1px solid #ccc;">
        <h4 align="center">
            <b>ROSTER GURU KELAS X</b>
        </h4>
        <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>No</th>
                                <th>NIP</th>
                                <th>NAMA GURU</th>
                                <th>Mata Pelajaran yg di bawakan</th>
                                <th>Jumlah Les</th>
                                <th>Jam Mulai/Berakhir</th>
                                <th>Hari</th>
                                <th>Jurusan</th>
                                <th>Kelas</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $view2=mysqli_query($conn,"SELECT * FROM jadwal_guru where kelas='X' order by jam_mulai asc");
                                $no=1;
                                while($raw2=mysqli_fetch_array($view2)){
                            ?>
                          <tr class="success">
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw2['nip']; ?></td>
                                <td><?php echo $raw2['nama_guru']; ?></td>
                                <td><?php echo $raw2['mapel_dibawakan']; ?></td>
                                <td><?php echo $raw2['jumlah_les']; ?></td>
                                <td><?php echo $raw2['jam_mulai']; ?> - <?php echo $raw2['jam_berakhir'] ?></td>
                                <td><?php echo $raw2['hari']; ?></td>
                                <td><?php echo $raw2['jurusan']; ?></td>
                                <td><?php echo $raw2['kelas']; ?></td>
                                <td><i><a href="?page=roster_edit&id=<?php echo $raw2['id'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="roster_hapus.php?id=<?php echo $raw2['id'];?>">Hapus</a></i></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
    </div>
</div>
<div class="row" style="margin-bottom:10px;">
    <div class="col-lg-12" style="padding-right:20px; border-right: 1px solid #ccc;">
        <h4 align="center">
            <b>ROSTER GURU KELAS XI</b>
        </h4>
        <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>No</th>
                                <th>NIP</th>
                                <th>NAMA GURU</th>
                                <th>Mata Pelajaran yg di bawakan</th>
                                <th>Jumlah Les</th>
                                <th>Jam Mulai/Berakhir</th>
                                <th>Hari</th>
                                <th>Jurusan</th>
                                <th>Kelas</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $view2=mysqli_query($conn,"SELECT * FROM jadwal_guru where kelas='XI' order by jam_mulai asc");
                                $no=1;
                                while($raw2=mysqli_fetch_array($view2)){
                            ?>
                          <tr class="success">
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw2['nip']; ?></td>
                                <td><?php echo $raw2['nama_guru']; ?></td>
                                <td><?php echo $raw2['mapel_dibawakan']; ?></td>
                                <td><?php echo $raw2['jumlah_les']; ?></td>
                                <td><?php echo $raw2['jam_mulai']; ?> - <?php echo $raw2['jam_berakhir'] ?></td>
                                <td><?php echo $raw2['hari']; ?></td>
                                <td><?php echo $raw2['jurusan']; ?></td>
                                <td><?php echo $raw2['kelas']; ?></td>
                                <td><i><a href="?page=editguru&id=<?php echo $raw2['id'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="guru_hapus.php?id=<?php echo $raw2['id'];?>">Hapus</a></i></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
    </div>
</div>
<div class="row" style="margin-bottom:10px;">
    <div class="col-lg-12" style="padding-right:20px; border-right: 1px solid #ccc;">
        <h4 align="center">
            <b>ROSTER GURU KELAS XII</b>
        </h4>
        <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>No</th>
                                <th>NIP</th>
                                <th>NAMA GURU</th>
                                <th>Mata Pelajaran yg di bawakan</th>
                                <th>Jumlah Les</th>
                                <th>Jam Mulai/Berakhir</th>
                                <th>Hari</th>
                                <th>Jurusan</th>
                                <th>Kelas</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $view2=mysqli_query($conn,"SELECT * FROM jadwal_guru where kelas='XII' order by jam_mulai asc");
                                $no=1;
                                while($raw2=mysqli_fetch_array($view2)){
                            ?>
                          <tr class="success">
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw2['nip']; ?></td>
                                <td><?php echo $raw2['nama_guru']; ?></td>
                                <td><?php echo $raw2['mapel_dibawakan']; ?></td>
                                <td><?php echo $raw2['jumlah_les']; ?></td>
                                <td><?php echo $raw2['jam_mulai']; ?> - <?php echo $raw2['jam_berakhir'] ?></td>
                                <td><?php echo $raw2['hari']; ?></td>
                                <td><?php echo $raw2['jurusan']; ?></td>
                                <td><?php echo $raw2['kelas']; ?></td>
                                <td><i><a href="?page=editguru&id=<?php echo $raw2['id'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="guru_hapus.php?id=<?php echo $raw2['id'];?>">Hapus</a></i></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
    </div>
</div>





<!--  K E T E R A N G A N  -->
<div class="row">
    <div class="col-lg-12">
    </div>
</div>