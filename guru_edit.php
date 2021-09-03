<?php   include "koneksi.php"; ?>
<div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Guru</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="inde.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-child"></i> Guru
            </li>
        </ol>
    </div>
</div>

<!-- ISI -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header" style="margin-top:-5px;">
            Edit Data Guru
        </h3>
    </div>
</div>

<div class="row">
    &nbsp&nbsp&nbsp *edit nip akan mengubah username guru <br><br>
    <!-- Sript ambil data -->
    <?php
        $id = @$_GET['id'];
        $qrykoreksi=mysqli_query($conn,"select * from tb_guru where id_guru='$id'");
        $data=mysqli_fetch_object($qrykoreksi);
    ?>
    <form method="post">
        <div class="col-lg-6">
            <div class="form-group">
                <label>NIP</label>
                <input class="form-control" name="nip" value="<?php echo $data->nip;?>">
            </div>
            <?php
               $a=mysqli_query($conn,"select * from tb_pengguna where username='$data->nip'"); 
               $b=mysqli_fetch_object($a);
            ?>
            <div class="form-group">
                <label>Nama Guru</label>
                <input class="form-control" name="nama_guru" value="<?php echo $data->nama_guru;?>" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="Laki-laki" <?= ($data->jenis_kelamin === 'Laki-laki') ? 'selected' : ''?>>Laki-laki</option>
                    <option value="Perempuan" <?= ($data->jenis_kelamin === 'Perempuan') ? 'selected' : ''?>>Perempuan</option>
                </select>
            </div>  
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input class="form-control" name="tempat_lahir" value="<?php echo $data->tempat_lahir;?>" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $data->tanggal_lahir;?>">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" value="<?php echo $data->alamat;?>" required>
            </div>
            <div class="form-group">
                <label>Agama</label>
                <input class="form-control" name="agama" value="<?php echo $data->agama;?>" required>
            </div>
            <div class="form-group">
                <label>Pelajaran</label>
                <input class="form-control" name="jurusan" value="<?php echo $data->jurusan;?>" required>
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
        $nip=$_POST['nip'];
        $nama_guru=$_POST['nama_guru'];
        $jenis_kelamin=$_POST['jenis_kelamin'];
        $tempat_lahir=$_POST['tempat_lahir'];
        $tanggal_lahir=$_POST['tanggal_lahir'];
        $alamat=$_POST['alamat'];
        $agama=$_POST['agama'];
        $jurusan=$_POST['jurusan'];
        $query=mysqli_query($conn,"UPDATE tb_guru SET nip='$nip', nama_guru='$nama_guru', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir',
                            tanggal_lahir='$tanggal_lahir', alamat='$alamat', agama='$agama', jurusan='$jurusan' WHERE id_guru='$id'");

        $query1=mysqli_query($conn,"UPDATE tb_pengguna SET username='$nip' where id_pengguna='$b->id_pengguna'");
        if($query){
        ?>
            <script type="text/javascript">
            alert("Input Data Sukses !")
            window.location="?page=lihatguru";
            </script>
        <?php
        }else{
        ?>
            <script type="text/javascript">
            alert("Input Data Gagal !")
            window.location="?page=lihatguru";
            </script>
        <?php
        } 
    }
    ?>
</div>