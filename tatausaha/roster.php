<?php 
include './koneksi.php'; 
?>
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
            Set Roster
        </h3>
    </div>
</div>

<div class="row">
    <form method="post">
        <div class="col-lg-7">
            <div class="form-group">
                <label>Hari</label>
                <select name="hari" class="form-control" required>
                    <option value="">Pilih Hari</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jum'at</option>
                    <option value="Sabtu">Sabtu</option>
                </select>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <select name="kelas" class="form-control" required>
                    <option value="">Pilih Kelas</option>
                    <?php 
                        $query=mysqli_query($conn,"SELECT * from tb_kelas order by id_kelas asc");
                        while($row=mysqli_fetch_array($query))
                        {
                    ?>
                        <option value="<?php  echo $row['kelas']; ?>"><?php  echo $row['kelas']; ?></option>
                    <?php 
                        }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <select name="jurusan" class="form-control" required>
                    <option value="">Pilih Jurusan</option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                </select>
            </div>

            <div class="form-group">
                <label>NIP Guru</label>
                <select name="nip" class="form-control" required>
                    <option value="">Pilih NIP Guru</option>
                    <?php 
                        $query=mysqli_query($conn,"SELECT nip,nama_guru from tb_guru order by nip asc");
                        while($row=mysqli_fetch_array($query))
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
                        while($row=mysqli_fetch_array($query))
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
                <select name="mapel" class="form-control" required>
                    <option value="">Pilih Mata Pelajaran yg di Bawakan</option>
                    <?php 
                        $query=mysqli_query($conn,"SELECT mapel from tb_mapel");
                        while($row=mysqli_fetch_array($query))
                        {
                    ?>
                        <option value="<?php  echo $row['mapel']; ?>"><?php  echo $row['mapel']; ?></option>
                    <?php 
                        }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label>Jumlah Les</label>
                <input type="number" class="form-control" name="les" required>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="form-group">
                <label>Jam Mulai</label>
                <input type="time" class="form-control" name="jam_mulai" required>
            </div>
            <div class="form-group">
                <label>Jam Selesai</label>
                <input type="time" class="form-control" name="jam_berakhir" required>
            </div>
        </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <input type="submit" name="input" class="btn btn-success" value="Buat Jadwal"/>
    </div>
    </form>

    <!-- Script Input -->
    <?php
        if(@$_POST['input']){
            $nip = $_POST['nip'];
            $nama = $_POST['nama'];
            $mapel = $_POST['mapel'];
            $hari=$_POST['hari'];
            $jurusan=$_POST['jurusan'];
            $jam_mulai=$_POST['jam_mulai'];
            $jam_berakhir=$_POST['jam_berakhir'];
            $les=$_POST['les'];
            $kelas=$_POST['kelas'];
            
            $query=mysqli_query($conn,"insert into jadwal_guru(nip,nama_guru,mapel_dibawakan,jumlah_les,jam_mulai,jam_berakhir,hari,jurusan,kelas) 
                                values('$nip','$nama', '$mapel', '$les', '$jam_mulai', '$jam_berakhir', '$hari', '$jurusan', '$kelas')") ;
            
            if($query){
            ?>
                <script type="text/javascript">
                alert("Input Data Sukses !")
                window.location="?page=lihatroster";
                </script>
            <?php
            }else{
            ?>
                <script type="text/javascript">
                alert("Input Data Gagal !")
                window.location="?page=lihatroster";
                </script>
            <?php
            } 
        }
    ?>
</div>