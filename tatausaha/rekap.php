<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Rekap Absensi</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="/som/guru/index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-send"></i> Rekap Absensi
            </li>
        </ol>
    </div>
</div>
<!-- -->
<h4 class="page-header" style="text-align: center;">Absensi Murid Kelas X</h4>  
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
                                                    from hasil_absensi where kelas='X' order by tanggal asc");
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
                    <h4 class="page-header" style="text-align: center;">Absensi Murid Kelas XI</h4>  
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
                                                    from hasil_absensi where kelas='XI' order by tanggal asc");
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
                    <h4 class="page-header" style="text-align: center;">Absensi Murid Kelas XII</h4>  
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
                                                    from hasil_absensi where kelas='XII' order by tanggal asc");
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
                    <a class="btn btn-danger btn-shadow btn-sm" target="_blank" href="../cetakAbsensiPDF.php">Jadikan PDF</a>
                    <a class="btn btn-success btn-shadow btn-sm" target="_blank" href="../cetakAbsensiExcel.php">Jadikan Excel</a>