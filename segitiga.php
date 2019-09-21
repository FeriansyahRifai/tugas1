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
<center><h1>MENGHITUNG LUAS SEGITIGA</h1>

<h3>Masukkan Ukuran Alas dan Tinggi Segitiga</h3>
<form action="segitiga.php" method="post">
    <b>Alas Segitiga : </b><input type="text" name="alas"><br>
    <br>
    <b>Tinggi Segitiga : </b><input type="text" name="tinggi"><br>
    <br>
    <input type="submit" name="submit" value="HITUNG">
</form>
<br>
<?php
if(isset($_POST['submit'])){
	$alas = $_POST['alas'];
	$tinggi = $_POST['tinggi'];
	
	$segitiga = 1/2 * $alas * $tinggi; // Menghitung luas segitiga
	
	echo "Luas segitiga dengan alas : <b>$alas</b>, dan tinggi <b>$tinggi</b> <br>";
    echo "yaitu : <b>$segitiga</b>";
    echo "<br><br>------------------------------------------------------<br><br>";
    echo "Jadi Perhitungannya : $alas <b>dikali</b> $tinggi lalu <b>dibagi</b> 2, maka hasilnya $segitiga";
}
?>
<br>
<br>
<button class='tombol'><a class='link' href='home.html'>HOME PAGE</a></button>
<button class='tombol'><a class='link' href='lingkaran.php'>MENGHITUNG LUAS LINGKARAN</a></button>
<button class='tombol'><a class='link' href='jajargenjang.php'>MENGHITUNG LUAS JAJAR GENJANG</a></button>
</center>
</body>
</html>