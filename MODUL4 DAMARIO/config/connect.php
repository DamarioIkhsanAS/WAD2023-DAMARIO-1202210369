<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$con= mysqli_connect("localhost", "root", "", "modul4_wad");
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if(!$con){
    die("koneksi gagal: " . mysqli_connect_error());
}
// 
 
?>