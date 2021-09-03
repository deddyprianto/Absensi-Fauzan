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
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header" style="margin-top:-5px;">
            Edit Roster
        </h3>
    </div>
</div>

<div class="row">
    <!-- Sript ambil data -->
    <?php
        $id = @$_GET['id'];
        $qrykoreksi=mysqli_query($conn,"select * from jadwal_guru where id='$id'");
        $data=mysqli_fetch_array($qrykoreksi);
    ?>

    <form method="post">
        <div class="col-lg-7">
            <div class="form-group">
                <label>NIP</label>
                <select name="nip" class="form-control" required>
                    <option value="">Pilih NIP Guru</option>
                    <?php 
                        $query=mysqli_query($conn,"SELECT nip,nama_guru from tb_guru order by nip asc");
                        while($row=mysqli_fetch_array($query))
                        {
                    ?>
                        <option value="<?php  echo $row['nip']; ?>"  <?= ($row['nip'] === $data['nip']) ? 'selected' : ''?>><?= $row['nip']; ?>--<?php echo $row['nama_guru']; ?></option>
                    <?php 
                        }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label>Nama Guru</label>
                <select name="nama" class="form-control" required>
                    <option value="">Pilih Nama Guru</option>
                    <?php 
                        $query=mysqli_query($conn,"SELECT nama_guru from tb_guru order by nip asc");
                        while($row=mysqli_fetch_array($query))
                        {
                    ?>
                        <option value="<?php  echo $row['nama_guru']; ?>" <?= ($row['nama_guru'] === $data['nama_guru']) ? 'selected' : ''?>><?php  echo $row['nama_guru']; ?></option>
                    <?php 
                        }
                ?>
                </select>
            </div>
            <div class="form-group">
                 <label>Pilih Mapel</label>
            <select name="mapel" class="form-control" required>
                    <option value="">Pilih Mapel</option>
                    <?php 
                        $query=mysqli_query($conn,"SELECT mapel from tb_mapel");
                        while($row=mysqli_fetch_array($query))
                        {
                    ?>
                        <option value="<?= $row['mapel']; ?>" <?= ($row['mapel'] === $data['mapel_dibawakan']) ? 'selected' : ''?>><?= $row['mapel']; ?></option>
                    <?php 
                        }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label>Jumlah Les</label>
                <input type="number" class="form-control" name="jumlah_les" value="<?php echo $data['jumlah_les']; ?>" required>
            </div>
            <div class="form-group">
                <label>Jam Mulai</label>
                <input type="time" class="form-control" name="jam_mulai" value="<?php echo $data['jam_mulai']; ?>" required>
            </div>
            <div class="form-group">
                <label>Jam Berakhir</label>
                <input type="time" class="form-control" name="jam_berakhir" value="<?php echo $data['jam_berakhir']; ?>" required>
            </div>
        </div>

        <div class="col-lg-5">
       
            <div class="form-group">
                <label>Hari</label>
                <select name="hari" class="form-control">
                    <option value="Senin" <?= ($data['hari'] === 'Senin') ? 'selected' : ''?>>Senin</option>
                    <option value="Selasa" <?= ($data['hari'] === 'Selasa') ? 'selected' : ''?>>Selasa</option>
                    <option value="Rabu" <?= ($data['hari'] === 'Rabu') ? 'selected' : ''?>>Rabu</option>
                    <option value="Kamis" <?= ($data['hari'] === 'Kamis') ? 'selected' : ''?>>Kamis</option>
                    <option value="Jumat" <?= ($data['hari'] === 'Jumat') ? 'selected' : ''?>>Jum'at</option>
                    <option value="Sabtu" <?= ($data['hari'] === 'Sabtu') ? 'selected' : ''?>>Sabtu</option>
                </select>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <select name="jurusan" class="form-control">
                    <option value="IPA" <?= ($data['jurusan'] === 'IPA') ? 'selected' : ''?>>IPA</option>
                    <option value="IPS" <?= ($data['jurusan'] === 'IPS') ? 'selected' : ''?>>IPS</option>
                </select>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <select name="kelas" class="form-control">
                    <option value="X" <?= ($data['kelas'] === 'X') ? 'selected' : ''?>>X</option>
                    <option value="XI" <?= ($data['kelas'] === 'XI') ? 'selected' : ''?>>XI</option>
                    <option value="XII" <?= ($data['kelas'] === 'XII') ? 'selected' : ''?>>XII</option>
                </select>
            </div>
        </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <input type="submit" name="edit" class="btn btn-default" value="Edit"/>
    </div>
    </form>

    <?php
        if(@$_POST['edit']){
            $nip=$_POST['nip'];
            $nama=$_POST['nama'];
            $mapel=$_POST['mapel'];
            $jumlah_les=$_POST['jumlah_les'];
            $jam_mulai=$_POST['jam_mulai'];
            $jam_berakhir=$_POST['jam_berakhir'];
            $hari=$_POST['hari'];
            $jurusan=$_POST['jurusan'];
            $kelas=$_POST['kelas'];

            $query=mysqli_query($conn,"UPDATE jadwal_guru SET nip='$nip', nama_guru='$nama', mapel_dibawakan='$mapel',
                            jumlah_les='$jumlah_les', jam_mulai='$jam_mulai', jam_berakhir='$jam_berakhir', hari='$hari', jurusan='$jurusan', kelas='$kelas'  WHERE id='$id'");
            if($query){
            ?>
                <script type="text/javascript">
                alert("Edit Data Sukses !")
                window.location="?page=lihatroster";
                </script>
            <?php
            }else{
            ?>
                <script type="text/javascript">
                alert("Edit Data Gagal !")
                window.location="?page=lihatroster";
                </script>
            <?php
            } 
        }
    ?>

</div>