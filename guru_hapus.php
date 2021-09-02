<?php
include "koneksi.php";
$kode = @$_GET['id'];
$a=mysqli_query($conn,"select nip from tb_guru where id_guru = '$kode'");
$b=mysqli_fetch_array($a);

mysqli_query($conn,"delete from tb_pengguna where username=$b[nip]");

mysqli_query($conn,"delete from tb_guru where id_guru = '$kode'");
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="inde.php?page=lihatguru";
</script>