<?php   include "koneksi.php"; ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Kelas</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="inde.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-group"></i> Kelas
            </li>
        </ol>
    </div>
</div>

<!-- Isi -->
<div class="row">
    <div class="col-lg-5">
        <h3 class="page-header">
            Edit Data Kelas
        </h3>

        <!-- Sript ambil data -->
        <?php
            $id = @$_GET['id'];
            $qrykoreksi=mysqli_query($conn,"select * from tb_kelas where id_kelas='$id'");
            $data=mysqli_fetch_object($qrykoreksi);
        ?>

        <form method="post">
        <div class="form-group">
                <label>Kelas</label>
                <select name="kelas" class="form-control" required>
                    <option value="X" <?= ($data->kelas === 'X') ? 'selected' : ''?>>X</option>
                    <option value="XI" <?= ($data->kelas === 'XI') ? 'selected' : ''?>>XI</option>
                    <option value="XII" <?= ($data->kelas === 'XII') ? 'selected' : ''?>>XII</option>
                </select>
            </div>
        <div class="form-group">
                <label>Jurusan</label>
                <select name="jurusan" class="form-control" required>
                    <option value="IPA" <?= ($data->jurusan === 'IPA') ? 'selected' : ''?>>IPA</option>
                    <option value="IPS" <?= ($data->jurusan === 'IPS') ? 'selected' : ''?>>IPS</option>
                </select>
            </div>
            <input type="submit" name="edit" class="btn btn-default" value="Edit"/>
        </form>

        <!-- Sript Update Data -->
        <?php
        if(@$_POST['edit']){
            $kelas=$_POST['kelas'];
            $jurusan=$_POST['jurusan'];
            
            $query=mysqli_query($conn,"UPDATE tb_kelas SET kelas='$kelas', jurusan='$jurusan' WHERE id_kelas='$id'");
            
            if($query){
                ?>
                    <script type="text/javascript">
                    alert("Edit Data Sukses !")
                    window.location="?page=kelas";
                    </script>
                <?php
            }else{
                ?>
                    <script type="text/javascript">
                    alert("Edit Data Gagal !")
                    window.location="?page=kelas";
                    </script>
                <?php
            } 
        }
?>
    </div>
</div>