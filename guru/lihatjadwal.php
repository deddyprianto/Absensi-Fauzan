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
            <small>Lihat Jadwal</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="/som/guru/index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-bell"></i> Lihat Jadwal
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<div class="row" style="margin-top:30px;">
    <div class="col-lg-5">
        <h3 class="page-header" style="margin-top:0px; font-weight: bold; color: gray;">
            Roster & Jadwal Guru
        </h3>
    </div>
    <div class="col-lg-7" style="border-left: 1px solid #ccc;">
    <?php 
        $nama = mysqli_query($conn,"select nama_guru from jadwal_guru where nip='$id_login'");
        $namaGuru = mysqli_fetch_array($nama);
    ?>
        <h3 class="page-header" style="margin-top:0px; font-weight: bold; color: gray;">
            Jadwal Mengajar: <?= $namaGuru['nama_guru']; ?>
        </h3>
        <div class="table-responsive">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        SENIN
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>No</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Mata Pelajaran</th>
                                <th>Waktu</th>
                                <th>Jumlah Les</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $view2=mysqli_query($conn,"select nama_guru, mapel_dibawakan, jumlah_les,kelas,jam_mulai,jam_berakhir,jurusan
                                                    from jadwal_guru where hari='Senin' AND nip='$id_login' order by jam_mulai asc");
                                $no=1;
                                while($raw2=mysqli_fetch_array($view2)){
                            ?>
                          <tr class="success">
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw2['kelas']; ?></td>
                                <td><?php echo $raw2['jurusan']; ?></td>
                                <td><?php echo $raw2['mapel_dibawakan']; ?></td>
                                <td><?php echo $raw2['jam_mulai']; ?> - <?php echo $raw2['jam_berakhir'] ?></td>
                                <td><?php echo $raw2['jumlah_les']; ?></td>
                            </tr>
                            <?php $no++; }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        SELASA
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Mata Pelajaran</th>
                                <th>Waktu</th>
                                <th>Jumlah Les</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $view2=mysqli_query($conn,"select nama_guru, mapel_dibawakan, jumlah_les,kelas,jam_mulai,jam_berakhir,jurusan
                                                    from jadwal_guru where hari='Selasa' AND nip='$id_login' order by jam_mulai asc");
                                $no=1;
                                while($raw2=mysqli_fetch_array($view2)){
                            ?>
                           <tr class="success">
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw2['kelas']; ?></td>
                                <td><?php echo $raw2['jurusan']; ?></td>
                                <td><?php echo $raw2['mapel_dibawakan']; ?></td>
                                <td><?php echo $raw2['jam_mulai']; ?> - <?php echo $raw2['jam_berakhir'] ?></td>
                                <td><?php echo $raw2['jumlah_les']; ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        RABU
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Mata Pelajaran</th>
                                <th>Waktu</th>
                                <th>Jumlah Les</th>
                            </tr>
                        </thead>
                        <tbody>
                         
                            <?php
                                $view2=mysqli_query($conn,"select nama_guru, mapel_dibawakan, jumlah_les,kelas,jam_mulai,jam_berakhir,jurusan
                                                    from jadwal_guru where hari='Rabu' AND nip='$id_login' order by jam_mulai asc");
                                $no=1;
                                while($raw2=mysqli_fetch_array($view2)){
                            ?>
                            <tr class="success">
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw2['kelas']; ?></td>
                                <td><?php echo $raw2['jurusan']; ?></td>
                                <td><?php echo $raw2['mapel_dibawakan']; ?></td>
                                <td><?php echo $raw2['jam_mulai']; ?> - <?php echo $raw2['jam_berakhir'] ?></td>
                                <td><?php echo $raw2['jumlah_les']; ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                  
                </div>
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        KAMIS
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Mata Pelajaran</th>
                                <th>Waktu</th>
                                <th>Jumlah Les</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $view2=mysqli_query($conn,"select nama_guru, mapel_dibawakan, jumlah_les,kelas,jam_mulai,jam_berakhir,jurusan
                                                    from jadwal_guru where hari='Kamis' AND nip='$id_login' order by jam_mulai asc");
                                $no=1;
                                while($raw2=mysqli_fetch_array($view2)){
                            ?>
                            <tr class="success">
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw2['kelas']; ?></td>
                                <td><?php echo $raw2['jurusan']; ?></td>
                                <td><?php echo $raw2['mapel_dibawakan']; ?></td>
                                <td><?php echo $raw2['jam_mulai']; ?> - <?php echo $raw2['jam_berakhir'] ?></td>
                                <td><?php echo $raw2['jumlah_les']; ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        JUM'AT
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Mata Pelajaran</th>
                                <th>Waktu</th>
                                <th>Jumlah Les</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $view2=mysqli_query($conn,"select nama_guru, mapel_dibawakan, jumlah_les,kelas,jam_mulai,jam_berakhir,jurusan
                                                    from jadwal_guru where hari='Jumat' AND nip='$id_login' order by jam_mulai asc");
                                $no=1;
                                while($raw2=mysqli_fetch_array($view2)){
                            ?>
                         <tr class="success">
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw2['kelas']; ?></td>
                                <td><?php echo $raw2['jurusan']; ?></td>
                                <td><?php echo $raw2['mapel_dibawakan']; ?></td>
                                <td><?php echo $raw2['jam_mulai']; ?> - <?php echo $raw2['jam_berakhir'] ?></td>
                                <td><?php echo $raw2['jumlah_les']; ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <h4 class="page-header" style="margin-top:7px;" align="center">
                        SABTU
                    </h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Mata Pelajaran</th>
                                <th>Waktu</th>
                                <th>Jumlah Les</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $view2=mysqli_query($conn,"select nama_guru, mapel_dibawakan, jumlah_les,kelas,jam_mulai,jam_berakhir,jurusan
                                                    from jadwal_guru where hari='Sabtu' AND nip='$id_login' order by jam_mulai asc");
                                $no=1;
                                while($raw2=mysqli_fetch_array($view2)){
                            ?>
                          <tr class="success">
                                <td><?php echo $no; ?></td>
                                <td><?php echo $raw2['kelas']; ?></td>
                                <td><?php echo $raw2['jurusan']; ?></td>
                                <td><?php echo $raw2['mapel_dibawakan']; ?></td>
                                <td><?php echo $raw2['jam_mulai']; ?> - <?php echo $raw2['jam_berakhir'] ?></td>
                                <td><?php echo $raw2['jumlah_les']; ?></td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php
    }
?>