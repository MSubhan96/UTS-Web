<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	
	<link rel="stylesheet" type="text/css" href="home.css">
	
</head>
<body>
 <div id="wrapper">

<div class="content">
	<header>
		<h1 class="judul">Halaman Admin</h1>
	</header>

	<div class="menu">
	    <ul>
			
			<li><a href="biodata.php">Biodata Siswa</a> </li>
			
			
			
		</ul>
	</div>
<center>
	<div class="badan">
<form action="proses.php" method="post">
<strong>DATA NILAI MAHASISWA</strong><br>
<pre>
Masukan NIM   :<input type="text" name="txtnim"><br>
Masukan Nama  :<input type="téxt" name="txtnama"><br>
Pilih Jurusan :<select name="cjurusan">
               <option>IPS</option>
               <option>IPA</option>
               <option>BAHASA</option></select><br>
Masukan Nilai :<input type="text" name="txtnilai"><br>
               <input type="submit" name="bhasil" value="Hasil"><input type="reset" name="bbatal" value="batal"><br>
</pre>
</center>

</div>
</div>
<center><p> Sistem informasi Siswwa 2018 - 2019</p>
<center><a href="logout.php">[Logout]</a></center>
<p><b> Muhammad Luthfi Efrian -+- Yudha Yaksa Sasongko</b></center>

</body>
</html>
