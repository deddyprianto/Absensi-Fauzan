<?php
include "koneksi.php";
$kode = @$_GET['id'];

mysql_query("delete from tb_mengajar where id_mengajar = '$kode'") or die (mysql_error());
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="inde.php?page=setmapel";
</script>