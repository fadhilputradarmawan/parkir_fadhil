<?php  include '../../config/koneksi.php'; 
 $plat_nomor = $_POST['plat_nomor']; 
 $id_parkir = $_POST['id_parkir']; 
 $jenis_kendaraan = $_POST['jenis_kendaraan'];
 $model_kendaraan =$_POST['model_kendaraan'];

 $query = mysqli_query($conn,"INSERT INTO kendaraan VALUES('$plat_nomor','$id_parkir','$jenis_kendaraan','$model_kendaraan')");

echo "<script>alert('data berhasil di simpan'); window.location.href='index.php';
</script>";
?>