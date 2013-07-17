<?php
echo "<table border=1 align=center style='color:#FF00FF'>";
echo "<tr><th colspan=9>Daftar Mahasiswa UPI-YPTK Padang</th></tr>";
echo "<tr>";
echo "<td>No.</td>";
echo "<td>Nim</td>";
echo "<td>Nama</td>";
echo "<td>Tempat Lahir</td>";
echo "<td>Tanggal Lahir</td>";
echo "<td>Jenis Kelamin</td>";
echo "<td>Kelas</td>";
echo "<td>Kode Jurusan</td>";
echo "<td>Action</td>";
echo "</tr>";
include "./config/koneksi.php";
$sql="select * from mhs order by nim";
$result=mysql_query($sql);
$no=0;
while($data=mysql_fetch_array($result))
{
$no++;
echo "<tr>";
echo "<td>$no</td>";
echo "<td>$data[NIM]</td>";
echo "<td>$data[Nama]</td>";
echo "<td>$data[tempat]</td>";
echo "<td>$data[TglLahir]</td>";
echo "<td>$data[Jekel]</td>";
echo "<td>$data[Kelas]</td>";
echo "<td>$data[Kd_Jurusan]</td>";
?>
<td>
<a href="delete_mhs.php?NimHapus=<?php echo $data[NIM];?>" 
OnClick="return confirm('Anda Yakin Hapus Dengan dengan NIM=<?php echo $data[NIM];?>')"><img src='./Images/delete.png'></img></a> |
<a href='update_mhs.php?NimUbah=<?php echo $data[NIM];?>'><img src='./Images/update.png'></img></a></td>
</tr>
<?php
}
echo "<tr><td colspan=9><center><a href='frm_add_mhs.php'>Tambah Data</a></td></tr>";
echo "</table>";
?>
<script type="text/javascript" src="JS/jquery-1.4.2.js"></script>
<script type="text/javascript" src="JS/jquery.fusioncharts.js"></script>
<SCRIPT LANGUAGE="Javascript" SRC="JS/FusionCharts.js"></SCRIPT>		
</head>
<style type="text/css">
</style>
<body>
	<center>
	<span id="myChart1Container"></span>
	<script type="text/javascript">
	$('#myChart1Container').insertFusionCharts({
		swfPath: "Charts/",
		id: "chart1",
		width: "800",
		height: "300",		
		type: "Column3D",
		data: "grafik_mhs.php",
		dataFormat: "URIData"
	});
	</script>
	</center>
</body>
</html>