<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    function update($id, $nama_mobil, $brand_mobil, $warna_mobil, $tipe_mobil, $harga_mobil ){
        GLOBAL $connect;
    
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        $id = $id;
        $nama = $nama_mobil;
        $brand = $brand_mobil;
        $warna = $warna_mobil;
        $tipe = $tipe_mobil;
        $harga = $harga_mobil;

        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        $querry = "UPDATE showroom_mobil set nama_mobil='$nama', brand_mobil='$brand', warna_mobil='$warna', tipe_mobil='$tipe', harga_mobil='$harga' WHERE id = $id";
        // Eksekusi perintah SQL
        $result=mysqli_query($connect, $querry);
        // Buatkan kondisi jika eksekusi query berhasil
        if ($result){
            echo "Data Berhasil diubah";
            header("Location:list_mobil.php");
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        }else{
        echo "Data Gagal diubah";
        header("Location:list_mobil.php");
        }
    }
    // Panggil fungsi update dengan data yang sesuai
    $id=$id;
    $nama = $_POST['nama_mobil'];
    $brand = $_POST['brand_mobil'];
    $warna = $_POST['warna_mobil'];
    $tipe = $_POST['tipe_mobil'];
    $harga = $_POST['harga_mobil'];
    update($id, $nama, $brand, $warna, $tipe, $harga);
// Tutup koneksi ke database setelah selesai menggunakan database
?>