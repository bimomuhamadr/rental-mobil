<?php
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("rental-mobil");
if(!$con){
echo"Tidak Dapat terkoneksi ke Server";
}
// else{
// 	echo"Berhasil terkoneksi ke Server !";
// }
if(!$db){
echo"Tidak Dapat Memilih database/Database tidak ada";
}
// else{
// 	echo"Berhasil terkoneksi ke Database !";
// }
$pdo = new PDO('mysql:host='.'localhost'.';dbname='.'rental-mobil', 'root', '');
?>