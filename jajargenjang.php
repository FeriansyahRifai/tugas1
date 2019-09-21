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
<center><h1>MENGHITUNG LUAS JAJAR GENJANG</h1>

<h3>Masukkan Ukuran Panjang dan Lebar Jajar Genjang</h3>
<form action="jajargenjang.php" method="post">
    <b>Panjang : </b><input type="text" name="panjang"><br />
    <br />
    <b>Lebar : </b><input type="text" name="lebar"><br />
    <br />
    <input type="submit" name="submit" value="HITUNG">
</form>
<br />
<p><b>NOTE :</b> <i>Panjang</i> merupakan <mark>alas jajar genjang</mark>, dan <i>Lebar</i> merupakan <mark>tinggi jajar genjang</mark></p>
<hr>
<?php
if(isset($_POST['submit'])){
	$panjang = $_POST['panjang'];
	$lebar = $_POST['lebar'];
	
	$jajargenjang = $panjang * $lebar; // Menghitung luas jajar genjang
	
	echo "Luas jajar genjang dengan panjang : <b>$panjang</b>, dan lebar <b>$lebar</b> <br>";
    echo "yaitu : <b>$jajargenjang</b>";
    echo "<br><br>------------------------------------------------------<br><br>";
    echo "Jadi Perhitungannya : $panjang <b>dikali</b> $lebar, maka hasilnya $jajargenjang<br><br>";
}
?>
<br>
<br>
<button class='tombol'><a class='link' href='home.html'>HOME PAGE</a></button>
<button class='tombol'><a class='link' href='segitiga.php'>MENGHITUNG LUAS SEGITIGA</a></button>
<button class='tombol'><a class='link' href='lingkaran.php'>MENGHITUNG LUAS LINGKARAN</a></button>
</center>
</body>
</html>