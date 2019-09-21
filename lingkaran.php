<!DOCTYPE html>
<html>
<head><title>Tugas Pertama</title>
<style>

.tombol{
    background:#2C97DF;
    border-top:0;
    border-left:0;
    border-right:0;
    border-bottom:5px solid #2A80B9;
    padding:10px 20px;
    cursor:pointer;
}
.tombol:hover{
    background-color: #2A80B9;
}
.link{
  text-decoration:none;
  color:white;
  font-family:sans-serif;
  font-size:12pt;
}

</style>
</head>
<body>
<center><h1>MENGHITUNG LUAS LINGKARAN</h1>

<h3>Masukkan Ukuran Jari-jari Lingkaran</h3>
<form action="lingkaran.php" method="post">
    <b>Jari-jari Lingkaran : </b><input type="text" name="jari"><br>
    <br>
    <input type="submit" name="submit" value="HITUNG">
</form>
<br>
<?php
if(isset($_POST['submit'])){
    $jari   =$_POST['jari'];
    $phie    =22/7;
	
	$lingkaran = $phie*($jari*$jari); // Menghitung luas lingkaran
	
	echo "Jari-jari lingkaran : <b>$jari</b>, dan phi <b>$phie</b> <br>";
    echo "yaitu : <b>$lingkaran</b>";
    echo "<br><br>------------------------------------------------------<br><br>";
    echo "Jadi Perhitungannya : 3.1428571428571 <b>dikali</b> $jari <b>dikali lagi dengan</b> $jari, maka hasilnya $lingkaran";
}
?>
<br>
<br>
<button class='tombol'><a class='link' href='home.html'>HOME PAGE</a></button>
<button class='tombol'><a class='link' href='segitiga.php'>MENGHITUNG LUAS SEGITIGA</a></button>
<button class='tombol'><a class='link' href='jajargenjang.php'>MENGHITUNG LUAS JAJAR GENJANG</a></button>
</center>
</body>
</html>