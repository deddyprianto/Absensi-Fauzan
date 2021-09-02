<?php
include "koneksi.php";
ob_start();
$dataAbsensi = mysqli_query($conn, "SELECT * FROM hasil_absensi");
$no=1;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Convert Data Absensi To PDF</title>
	<style type="text/css">
		td{
			padding: 3px 3px;
		}
	</style>
</head>
<body>
<h3 align="center">Data Absensi Siswa</h3>
<table style="border-collapse:collapse;border-spacing:0;" align="center" border="1">
	<thead>
		<tr>
		    <th>No.</th>
			<th>Tanggal</th>
			<th>Hari</th>
			<th>Nip</th>
			<th>Guru</th>
			<th>Mapel</th>
			<th>Nama Siswa</th>
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>Status Kehadiran</th>
		</tr>
	</thead>
	<tbody>
	<?php 
	while ($data = mysqli_fetch_assoc($dataAbsensi)) {
        echo "<tr>";
                echo "<td>$no</td>";
        		echo "<td>$data[tanggal]</td>";
        		echo "<td>$data[hari]</td>";
        		echo "<td>$data[nip]</td>";
        		echo "<td>$data[nama_guru]</td>";
        		echo "<td>$data[mapel]</td>";
        		echo "<td>$data[nama_siswa]</td>";
        		echo "<td>$data[kelas]</td>";
        		echo "<td>$data[jurusan]</td>";
        		echo "<td>$data[status_kehadiran]</td>";
                $no++;
	}
	?>
	</tbody>
</table>
</body>
</html>
<?php 
	//Meload library mPDF
	require 'vendor/autoload.php';

	//Membuat inisialisasi objek mPDF
	$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4','margin_top' => 25, 'margin_bottom' => 25, 'margin_left' => 25, 'margin_right' => 25]);
	//Memasukkan output yang diambil dari output buffering ke variabel html
	$html = ob_get_contents();
	//Menghapus isi output buffering
	ob_end_clean();
	$mpdf->WriteHTML(utf8_encode($html));

	//Membuat output file
	$content = $mpdf->Output("CetakLaporan.pdf", "I");

?>