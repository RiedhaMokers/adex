<?php
include "./config/koneksi.php";
$nim	= $_POST['txtnim1'];
$nama	= $_POST['txtnama'];
$tempat = $_POST['txttmpat'];
$tgl	= $_POST['txttgl'];
$jekel	= $_POST['txtJekel'];
$kls	= $_POST['kelas'];
$jurusan= $_POST['jurusan'];
echo "$nama";

$sqlUbah="update mhs set Nama='$nama',
						 tempat='$tempat',
						 TglLahir='$tgl',
						 Jekel='$jekel',
						 Kelas='$kls',
						 Kd_Jurusan='$jurusan' 
						 where NIM='$nim'";
mysql_query($sqlUbah) or die ("Query Failed");
include "list_mhs.php";
?>