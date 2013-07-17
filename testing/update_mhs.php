<?php
include "./config/koneksi.php";
if (! $_GET['NimUbah']=="")
{
$sqlUbah="Select * from mhs where nim='".$_GET['NimUbah']."'";
$query=mysql_query($sqlUbah);
$row=mysql_fetch_array($query);
	$nim	= $row['NIM'];
	$nama	= $row['Nama'];
	$tmpat	= $row['tempat'];
	$tgl	= $row['TglLahir'];
	$jk		= $row['Jekel'];
	$kls	= $row['Kelas'];
	$kdjur	= $row['Kd_Jurusan'];
}
?>
<html>
<head>
<title>Update Data Mahasiswa</title>
</head>
<body>
<form action="ubah_mhs_simpan.php" method="POST">
<table border=1 align=center>

<tr><th colspan=3>UNIVERSITAS PUTRA INDONESIA "YPTK" PADANG</th></tr>
<tr><th colspan=3>FORM UBAH DATA MAHASISWA</th><tr>

<tr>
<td>Nomor Induk Mahasiswa (NIM)</td>
<td> : </td>
<td>
<input name="txtnim" type="text" size=16 maxlength=16 value="<?php echo "$nim" ?>" disabled>
<input name="txtnim1" type="hidden" size=16 maxlength=16 value="<?php echo "$nim" ?>">

</td>
</tr>

<tr>
<td>Nama Mahasiswa</td>
<td> : </td>
<td>
<input name='txtnama' type='text' size=25 maxlength=25 value="<?php echo "$nama" ?>">
</td>
</tr>

<tr>
<td>Tempat Lahir</td>
<td> : </td>
<td>
<input name='txttmpat' type='text' size=25 maxlength=25 value=<?php echo "$tmpat" ?>>
</td>
</tr>

<tr>
<td>Tanggal Lahir</td>
<td> : </td>
<td>
<input name='txttgl' type='text' size=25 maxlength=25 value=<?php echo "$tgl" ?>>
</td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td> : </td>
<td>
<input name='txtJekel' type='text' size=25 maxlength=25 value=<?php echo "$jk" ?>>
</td>
</tr>

<tr>
<td>Kelas</td>
<td> : </td>
<td>
<select name='kelas'>
<?php
include "./config/koneksi.php";
echo "<option value=$kls>$kls</option>";
$sql1="select * from kelas";
$query1=mysql_query($sql1);
while($data1=mysql_fetch_array($query1))
{
echo "<option value=$data1[Nm_Kelas]>$data1[Nm_Kelas]</option>";
}
?>
</select>
</td>
</tr>

<tr>
<td>Kode Jurusan</td>
<td> : </td>
<td>
<select name='jurusan'>
<?php
echo "<option value=$kdjur>$kdjur</option>";
$sql2=mysql_query("select * from jurusan");
while($data2=mysql_fetch_array($sql2))
{
echo "<option value=$data2[Kd_Jurusan]>$data2[Kd_Jurusan]-$data2[Nm_Jurusan]</option>";
}
?>
</select>
</td>
</tr>

<tr>
<td></td>
<td></td>
<td>
<input type="submit" name="update" value="UBAH">
<input type="reset" name="reset" value="CANCEL">
</td>
</tr>
</table>
</body>
</html>