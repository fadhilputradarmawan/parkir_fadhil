<?php  include '../../config/koneksi.php'; 
 $id_parkir = $_POST['id_parkir']; 
 $biaya_parkir = $_POST['biaya_parkir']; 
 $waktu_parkir = $_POST['waktu_parkir'];
 $tempat_parkir =$_POST['tempat_parkir'];

 $query = mysqli_query($conn,"INSERT INTO parkir VALUES('$id_parkir','$biaya_parkir','$waktu_parkir','$tempat_parkir')");

echo "<script>alert('data berhasil di simpan'); window.location.href='index.php';
</script>";
?>