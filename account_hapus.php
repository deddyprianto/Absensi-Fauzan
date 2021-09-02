<?php
include "koneksi.php";
$kode = @$_GET['id'];

mysqli_query($conn,"delete from tb_pengguna where id_pengguna = '$kode'");
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="inde.php?page=account";
</script>