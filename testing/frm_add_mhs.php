<script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript"></script>
<script language="javascript">

function cekform(form){
  if (form.nim.value == "")
  {
    alert("Anda belum mengisikan Nomor Induk Mahasiswa");
    form.nim.focus();
    return (false);
  }   
  if (form.nama.value=="")
  {
	alert("Anda Belum Mengisikan Nama Mahasiswa");
	form.nama.focus();
	return (false);
  }
  if (form.tempat.value =="")
{
	alert("Anda Belum Mengisi Tempat Lahir")
	form.tempat.focus();
	return (false);
}  
  if (form.tanggal.value =="")
{
	alert("Anda Belum Mengisi Tanggal Lahir")
	form.tanggal.focus();
	return (false);
} 
  if (form.kelas.value =="")
{
	alert("Anda Belum Memilih Kelas Mahasiswa")
	form.kelas.focus();
	return (false);
} 
  if (form.jurusan.value =="")
{
	alert("Anda Belum Memilih Kode Jurusan Mahasiswa")
	form.jurusan.focus();
	return (false);
} 
	return (true);

 }
</script>
<link type="text/css" href="js/themes/base/ui.all.css" rel="stylesheet" />   

    <script type="text/javascript" src="js/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="js/ui/ui.core.js"></script>
    <script type="text/javascript" src="js/ui/ui.datepicker.js"></script>
    
    <script type="text/javascript" src="js/ui/i18n/ui.datepicker-id.js"></script>

    <script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal").datepicker({

					dateFormat  : 'yy-mm-dd',        
          changeMonth : true,
          changeYear  : true					
        });
	 
      });
    </script>


<form action="simp_mhs.php" method="post" onSubmit='return cekform(this)'>
<table border=1 align="center" bgcolor=#F2FB66>
<tr><th colspan=3>ENTRY DATA MAHASISWA</th></tr>
<tr>
<td>Nomor Induk Mahasiswa</td>
<td>:</td>
<td>
<input type="text" id="nim" name="txtnim" size=16>
</td>
</tr>

<tr>
<td>Nama Mahasiswa</td>
<td>:</td>
<td>
<input type="text" id="nama" name="txtnama" size=40>
</td>
</tr>

<tr>
<td>Tempat/ Tgl. Lahir</td>
<td>:</td>
<td>
<input type="text" id="tempat" name="txttempat" size=20> /
<input id="tanggal" type="text" name="tgllhir" size=45>
</td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td> : </td>
<td>
<input type="radio" id="jk" name="jekel" value="Laki-Laki">Laki-Laki
<input type="radio" id="jk" name="jekel" value="Perempuan">Perempuan
</td>
</tr>

<tr>
<td>Kelas</td>
<td>:</td>
<td>
<?php
echo "<select name='kelas'>";
echo "<option value='' selected>-Pilih Kelas-</option>";
include ("./Config/Koneksi.php");
$sql="select * from kelas";
$query=mysql_query("$sql");
while($data=mysql_fetch_array($query))
{
echo "<option value=$data[Nm_Kelas]>$data[Nm_Kelas]</option>";
}
echo "</select>";
?>
</td>
</tr>

<tr>
<td>Kode Jurusan</td>
<td> : </td>
<td>
<?php
echo "<select name='jurusan'>";
echo "<option value='' selected>-Pilih Jurusan-</option>";
include "./Config/Koneksi.php";
$sql="select * from jurusan order by Kd_Jurusan";
$hasil=mysql_query($sql);
while ($row=mysql_fetch_array($hasil))
{
echo "<option value=$row[Kd_Jurusan]>$row[Kd_Jurusan]-$row[Nm_Jurusan]</option>";
}

echo "</select>";
?>
</td>
</tr>

<tr>
<td></td>
<td></td>
<td>
<input type="submit" name="simpan" value="SAVE">
<input type="reset" name="batal" value="CANCEL">
</td>
</tr>
</table>
</form>