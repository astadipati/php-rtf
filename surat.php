<?php
// membaca data dari form
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$tanggal = $_POST['tanggal'];
$wali = $_POST['wali'];
// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("temp.rtf");
// isi dokumen dinyatakan dalam bentuk string
$document = str_replace("#NAMA", $nama, $document);
$document = str_replace("#KELAS", $kelas, $document);
$document = str_replace("#ALAMAT", $alamat, $document);
$document = str_replace("#TANGGAL", $tanggal, $document);
$document = str_replace("#WALI", $wali, $document);
// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=suratIjin.rtf");
header("Content-length: ".strlen($document)); 
echo $document;
?>