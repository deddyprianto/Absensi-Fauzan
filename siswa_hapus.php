<?php
include "koneksi.php";
$kode = @$_GET['id'];

mysqli_query($conn,"delete from tb_siswa where id_siswa = '$kode'");
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="inde.php?page=lihatsiswa";
</script>