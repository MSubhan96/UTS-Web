
<html>
 <head>
  <title>Biodata</title>
  	
	<link rel="stylesheet" type="text/css" href="home.css">
	
 </head>
 <body>
 
 <center><h1>Masukkan Biodata</h1> </center>
  <table >
  <form action="biodataoutput.php" method="post">
  <tr>
   <td>NIP</td>
   <td>:</td>
   <td><input type=text name=NIP></td>
  </tr>
  <tr>
   <td>Nama Lengkap</td>
   <td>:</td>
   <td><input type=text name=Nama></td>
  </tr>
  <tr>
   <td>Nilai Smt </td>
   <td>:</td>
   <td><input type=text name=IPK size=5></td>
  </tr>
  <tr>
   <td>Lama Study</td>
   <td>:</td>
   <td><input type=text name=Tahun size=5>Tahun<input type=text name=Bulan size=5>Bulan</td>
  </tr>
  <tr>
  <td>Jurusan</td>
  <td>:</td>
   <td>
    <input type=radio name="jurusan" value="ipa">Ipa
    <input type=radio name="jurusan" value="Ips">Ips
    <input type=radio name="jurusan" value="Bahasa">Bahasa
   </td>
  </tr>
  <tr>
   <td>Tempat dan Tanggal Lahir</td>
   <td>:</td>
   <td><input type=text name=Tempat size=15>
   <select name=Tgl>
   <option name=Tgl>Tgl
   <option name=Tgl>1
   <option name=Tgl>2
   <option name=Tgl>3
   <option name=Tgl>4
   <option name=Tgl>5
   <option name=Tgl>6
   <option name=Tgl>7
   <option name=Tgl>8
   <option name=Tgl>9
   <option name=Tgl>10
   <option name=Tgl>11
   <option name=Tgl>12
   <option name=Tgl>13
   <option name=Tgl>14
   <option name=Tgl>15
   <option name=Tgl>16
   <option name=Tgl>17
   <option name=Tgl>18
   <option name=Tgl>19
   <option name=Tgl>20
   <option name=Tgl>21
   <option name=Tgl>22
   <option name=Tgl>23
   <option name=Tgl>24
   <option name=Tgl>26
   <option name=Tgl>27
   <option name=Tgl>28
   <option name=Tgl>29
   <option name=Tgl>30
   <option name=Tgl>31
   </select>
   <select name=Bln>
   <option name=Bln>Bln
   <option name=Bln>Januari
   <option name=Bln>Februari
   <option name=Bln>Maret
   <option name=Bln>April
   <option name=Bln>Mei
   <option name=Bln>Juni
   <option name=Bln>Juli
   <option name=Bln>Agustus
   <option name=Bln>September
   <option name=Bln>Oktober
   <option name=Bln>November
   <option name=Bln>Desember
   </select>
   <select name=Thn>
   <option name=Thn>Thn
   <option name=Thn>2012
   <option name=Thn>2011
   <option name=Thn>2010
   <option name=Thn>2009
   <option name=Thn>2008
   <option name=Thn>1993
   <option name=Thn>1992
   </select>
   </td>
  </tr>
  <tr>
   <td>Jenis Kelamin</td>
   <td>:</td>
   <td><input type=radio name=JK value=Laki-laki>Laki-laki<input type=radio name=JK value=Perempuan>Perempuan</td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td>:</td>
   <td><input type=textfield name=alamat></td>
  </tr>
  <tr>
   <td> </td>
   <td> </td>
   <td>
   <button><a href="admin.php"> Kembali  </a> </button>
   <input type="submit" name=tambah value=Tambah_Data></td>
  </tr>
  </form>
  </table>
 </body>
</html>
