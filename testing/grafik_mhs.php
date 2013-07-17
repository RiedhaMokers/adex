<?php
    include "./config/koneksi.php";

      $hasil=mysql_query("select m.kd_jurusan, j.nm_jurusan, count(m.kd_jurusan) as Jumlah from mhs m, jurusan j where m.kd_jurusan=j.kd_jurusan group by m.kd_jurusan order by m.kd_jurusan");	  
	  echo "<graph caption='Grafik Jumlah Mahasiswa UPI-YPTK' xAxisName='Kode Jurusan' yAxisName='Jumlah Mahasiswa UPI' numberPrefix=''>";
	  $colors = array('gghhtt','F6BD0F','8BBA00','FF8E46','008E8E','D64646','8E468E','588526','B3AA00','008ED6','9D080D','A186BE','CC6600','FDC689','ABA000','F26D7D','FFF200','0054A6','F7941C','CC3300','006600','663300','6DCFF6'); 

	  $no=0;
      while ($data = mysql_fetch_array($hasil)) 
	  {
	  $kode_jur= $data['kd_jurusan'];
	  $nama_jur= $data['nm_jurusan'];
       	echo "<set name='$kode_jur' value='$data[Jumlah]' color='$colors[$no]'/>";
		$no++;
      }
	  echo "</graph>";
?>
