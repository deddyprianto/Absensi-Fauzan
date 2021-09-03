<?php
include "koneksi.php";
$kode = $_GET['id'];

mysqli_query($conn,"delete from jadwal_guru where id = '$kode'");
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="index.php?page=lihatroster";
</script>