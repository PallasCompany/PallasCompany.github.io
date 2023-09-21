<!DOCTYPE html>
<html>
<head>
<title>Aplikasi Kalkulator Online</title>
</head>
<body>
    <main>
<!--Membuat Kolom Ke Tengah-->
<article style="widht:40%;float:left:margin:40px 30%;text-align:center">
    <h1>Aplikasi Kalkulator Online</h1>
<form method="post" action="kalkulator.php">
<!--Input Angka Dan Pemilihan Operasi-->
<input type="text" size="1" name="x" id="x" />
    <select name="hitung" id="hitung">
        <option value="1">+</option>option>
        <option value="2">-</option>option>
        <option value="3">*</option>option>
    </select><input type="text" size="1" name="y" id="y" />
<!--Ini Bagian Proses-->
<input type="submit" name="submit" value="=">&nbsp;&nbsp;0</form>

</article>
    </main>
</body>
</html>

<?php
$server="localhost";
$pemakai = "username";
$password = "pass";
$id_mysql = mysql_connect($server, $pemakai, $password);
if (! $id_mysql)
die("Tak dapat melakukan koneksi ke server MySQL");

$db_databaseku = mysql_select_db("databaseku", $id_mysql);
if (! $db_databaseku)
die("Tak dapat mengakses database");

// Bagian untuk membaca data
$sql = "SELECT user, nama FROM tabelku";
$hasil = mysql_query($sql, $id_mysql);
if (! $hasil)
die("Salah SQL");

while ($baris = mysql_fetch_row($hasil))
{
$user = $baris[0];
$nama = $baris[1];

print("$nip - $nama");
}
