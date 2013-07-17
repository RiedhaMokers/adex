<?php
$nim		= $_POST['txtnim'];
$nama		= $_POST['txtnama'];
$tempat		= $_POST['txttempat'];
$tgl		= $_POST['tgllhir'];
$jekel		= $_POST['jekel'];
$kelas		= $_POST['kelas'];
$jurusan	= $_POST['jurusan'];

include "./Config/Koneksi.php";
$sqlSimpan = "insert into mhs values ('$nim', '$nama', '$tempat', '$tgl', '$jekel', '$kelas', '$jurusan')";
mysql_query($sqlSimpan);
include "list_mhs.php";

?>