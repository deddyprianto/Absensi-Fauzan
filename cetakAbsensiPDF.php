<?php
include "koneksi.php";
ob_start();
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
<h3 align="center">Data Absensi Siswa Kelas X</h3>
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
	$dataAbsensi = mysqli_query($conn, "SELECT * FROM hasil_absensi where kelas='X' order by tanggal asc");
	$no=1;
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
<h3>Ket absensi kelas X</h3>
<?php 
	$jumlahHadir = mysqli_query($conn, "SELECT status_kehadiran from hasil_absensi where status_kehadiran='Hadir' AND kelas='X'");
	$hadir = mysqli_num_rows($jumlahHadir);
	$jumlahSakit = mysqli_query($conn, "SELECT status_kehadiran from hasil_absensi where status_kehadiran='Sakit' AND kelas='X'");
	$sakit = mysqli_num_rows($jumlahSakit);
	$jumlahIzin = mysqli_query($conn, "SELECT status_kehadiran from hasil_absensi where status_kehadiran='Izin' AND kelas='X'");
	$izin = mysqli_num_rows($jumlahIzin);
	$jumlahAlpha = mysqli_query($conn, "SELECT status_kehadiran from hasil_absensi where status_kehadiran='Alpha' AND kelas='X'");
	$alpha = mysqli_num_rows($jumlahAlpha);
?>
<ul>
	<li>Siswa Hadir: <?= $hadir; ?></li>
	<li>Siswa Sakit: <?= $sakit; ?></li>
	<li>Siswa Izin: <?= $izin; ?></li>
	<li>Siswa Alpha: <?= $alpha; ?></li>
</ul>
<hr>
<h3 align="center">Data Absensi Siswa Kelas XI</h3>
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
	$dataAbsensi = mysqli_query($conn, "SELECT * FROM hasil_absensi where kelas='XI' order by tanggal asc");
	$no=1;
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
<h3>Ket absensi kelas XI</h3>
<?php 
	$jumlahHadir = mysqli_query($conn, "SELECT status_kehadiran from hasil_absensi where status_kehadiran='Hadir' AND kelas='XI'");
	$hadir = mysqli_num_rows($jumlahHadir);
	$jumlahSakit = mysqli_query($conn, "SELECT status_kehadiran from hasil_absensi where status_kehadiran='Sakit' AND kelas='XI'");
	$sakit = mysqli_num_rows($jumlahSakit);
	$jumlahIzin = mysqli_query($conn, "SELECT status_kehadiran from hasil_absensi where status_kehadiran='Izin' AND kelas='XI'");
	$izin = mysqli_num_rows($jumlahIzin);
	$jumlahAlpha = mysqli_query($conn, "SELECT status_kehadiran from hasil_absensi where status_kehadiran='Alpha' AND kelas='XI'");
	$alpha = mysqli_num_rows($jumlahAlpha);
?>
<ul>
	<li>Siswa Hadir: <?= $hadir; ?></li>
	<li>Siswa Sakit: <?= $sakit; ?></li>
	<li>Siswa Izin: <?= $izin; ?></li>
	<li>Siswa Alpha: <?= $alpha; ?></li>
</ul>
<hr>
<h3 align="center">Data Absensi Siswa Kelas XII</h3>
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
	$dataAbsensi = mysqli_query($conn, "SELECT * FROM hasil_absensi where kelas='XII' order by tanggal asc");
	$no=1;
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
<h3>Ket absensi kelas XII</h3>
<?php 
	$jumlahHadir = mysqli_query($conn, "SELECT status_kehadiran from hasil_absensi where status_kehadiran='Hadir' AND kelas='XII'");
	$hadir = mysqli_num_rows($jumlahHadir);
	$jumlahSakit = mysqli_query($conn, "SELECT status_kehadiran from hasil_absensi where status_kehadiran='Sakit' AND kelas='XII'");
	$sakit = mysqli_num_rows($jumlahSakit);
	$jumlahIzin = mysqli_query($conn, "SELECT status_kehadiran from hasil_absensi where status_kehadiran='Izin' AND kelas='XII'");
	$izin = mysqli_num_rows($jumlahIzin);
	$jumlahAlpha = mysqli_query($conn, "SELECT status_kehadiran from hasil_absensi where status_kehadiran='Alpha' AND kelas='XII'");
	$alpha = mysqli_num_rows($jumlahAlpha);
?>
<ul>
	<li>Siswa Hadir: <?= $hadir; ?></li>
	<li>Siswa Sakit: <?= $sakit; ?></li>
	<li>Siswa Izin: <?= $izin; ?></li>
	<li>Siswa Alpha: <?= $alpha; ?></li>
</ul>
<h5 style="text-align: right; color: gray;">
Mengetahui, TataUsaha <br> 
                        <?php
                            function tanggal($format,$nilai="now"){
                                $en=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","Jan","Feb",
                                "Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
                                $id=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu",
                                "Jan","Feb","Maret","April","Mei","Juni","Juli","Agustus","September",
                                "Oktober","November","Desember");
                                return str_replace($en,$id,date($format,strtotime($nilai)));
                            }

                            date_default_timezone_set('Asia/Jakarta');
                            echo tanggal("D, j M Y");
                        ?>          
</h2>
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