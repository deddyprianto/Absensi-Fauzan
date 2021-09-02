<?php 
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=dataabsensi.com.xls");
include "koneksi.php";
$dataAbsensi = mysqli_query($conn, "SELECT * FROM hasil_absensi");
$no=1;
?>
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