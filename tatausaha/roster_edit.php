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
        $qrykoreksi=mysqli_query($conn,"select * from jadwal_guru where id_jadwal='$id'");
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
                        while($row=$data)
                        {
                    ?>
                        <option value="<?php  echo $row['nip']; ?>"><?= $row['nip']; ?>--<?php  echo $row['nama_guru']; ?></option>
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
                        while($row=$data)
                        {
                    ?>
                        <option value="<?php  echo $row['nama_guru']; ?>"><?php  echo $row['nama_guru']; ?></option>
                    <?php 
                        }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label>Mata Pelajaran</label>
                <input type="time" class="form-control" name="mapel_dibawakan" value="<?php echo $data['mapel_dibawakan']; ?>" required>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="form-group">
                <label>Jumlah Les</label>
                <input type="time" class="form-control" name="jumlah_les" value="<?php echo $data['jumlah_les']; ?>" required>
            </div>
            <div class="form-group">
                <label>Jam Mulai</label>
                <input type="time" class="form-control" name="jam_mulai" value="<?php echo $data['jam_mulai']; ?>" required>
            </div>
            <div class="form-group">
                <label>Jam Berakhir</label>
                <input type="time" class="form-control" name="jam_berakhir" value="<?php echo $data['jam_berakhir']; ?>" required>
            </div>
            <div class="form-group">
                <label>Hari</label>
                <input type="time" class="form-control" name="hari" value="<?php echo $data['hari']; ?>" required>
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
            $id_mengajar=$_POST['id_mengajar'];
            $hari=$_POST['hari'];
            $jam_mulai=$_POST['jam_mulai'];
            $jam_berakhir=$_POST['jam_berakhir'];
            $kelas=$_POST['kelas'];

            $query=mysqli_query($conn,"UPDATE tb_jadwal SET id_mengajar='$id_mengajar', hari='$hari', jam_mulai='$jam_mulai',
                            jam_berakhir='$jam_berakhir', id_kelas='$kelas' WHERE id_jadwal='$id'");

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