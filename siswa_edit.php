<?php   include "koneksi.php"; ?>
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
            Edit Data Siswa
        </h3>
    </div>
</div>

<div class="row">
    <!-- Sript ambil data -->
    <?php
        $id = $_GET['id'];
        $qrykoreksi=mysqli_query($conn,"select * from tb_siswa where id_siswa='$id'");
        $data=mysqli_fetch_object($qrykoreksi);
    ?>
    <form method="post">
        <div class="col-lg-6">
            <div class="form-group">
                <label>NIS</label>
                <input class="form-control" name="nis" value="<?php echo $data->nis;?>" required>
            </div>
            <div class="form-group">
                <label>Nama Siswa</label>
                <input class="form-control" name="nama_siswa" value="<?php echo $data->nama_siswa;?>" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" required>
                    <option value="Laki-laki" <?= ($data->jenis_kelamin === 'Laki-laki') ? 'selected' : ''?>>Laki-laki</option>
                    <option value="Perempuan" <?= ($data->jenis_kelamin === 'Perempuan') ? 'selected' : ''?>>Perempuan</option>
                </select>
            </div>
               <div class="form-group">
                <label>Agama</label>
                <input class="form-control" name="agama" value="<?php echo $data->agama;?>" required>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input class="form-control" name="tempat_lahir" value="<?php echo $data->tempat_lahir;?>" required>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control"   value="<?php echo $data->tanggal_lahir;?>" name="tanggal_lahir" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" value="<?php echo $data->alamat;?>" required>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <select name="kelas" class="form-control" required>
                    <option value="">Pilih Kelas</option>
                    <option value="X" <?= ($data->kelas === 'X') ? 'selected' : ''?>>X</option>
                    <option value="XI" <?= ($data->kelas === 'XI') ? 'selected' : ''?>>XI</option>
                    <option value="XII" <?= ($data->kelas === 'XII') ? 'selected' : ''?>>XII</option>
                </select>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <select name="jurusan" class="form-control" required>
                    <option value="">Pilih Jurusan</option>
                    <option value="IPA" <?= ($data->jurusan === 'IPA') ? 'selected' : ''?>>IPA</option>
                    <option value="IPS" <?= ($data->jurusan === 'IPS') ? 'selected' : ''?>>IPS</option>
                </select>
            </div>
        </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <input type="submit" name="edit" class="btn btn-default" value="Edit"/>
    </div>
    </form>

    <!-- Script Input -->
    <?php 
    if(@$_POST['edit']){
        $nis=$_POST['nis'];
        $nama_siswa=strtoupper($_POST['nama_siswa']);
        $jenis_kelamin=strtoupper($_POST['jenis_kelamin']);
        $agama=strtoupper($_POST['agama']);
        $tempat_lahir=strtoupper($_POST['tempat_lahir']);
        $tanggal_lahir=$_POST['tanggal_lahir'];
        $alamat=strtoupper($_POST['alamat']);
        $kelas=strtoupper($_POST['kelas']);
        $jurusan=strtoupper($_POST['jurusan']);
        $query=mysqli_query($conn,"UPDATE tb_siswa SET nis='$nis', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin',agama='$agama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat',kelas='$kelas', jurusan='$jurusan' WHERE id_siswa='$id'");
        
        if($query){
        ?>
            <script type="text/javascript">
            alert("Edit Data Sukses !")
            window.location="?page=lihatsiswa";
            </script>
        <?php
        }else{
        ?>
            <script type="text/javascript">
            alert("Edit Data Gagal !")
            window.location="?page=lihatsiswa";
            </script>
        <?php
        } 
    }
    ?>
</div>