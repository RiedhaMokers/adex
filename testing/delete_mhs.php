<?php
if (! $_GET['NimHapus']=="")
{
include "./config/koneksi.php";
$sqlHapus="delete from mhs where nim='".$_GET['NimHapus']."'";
mysql_query($sqlHapus) or die ("Query Gagal");
include "list_mhs.php";
}
else
{
include "list_mhs.php";
}
?>