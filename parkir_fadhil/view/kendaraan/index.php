<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button onclick="pindahkehalaman()">tambah data</button>

<script>
    function pindahkehalaman(){
        window.location.href = "tambahan.php";
    }
</script>
    <table border="2">
        <tr>
            <th>Plat nomor</th>
            <th>ID parkir</th>
            <th>Jenis kendaraan</th>
            <th>Model kendaraan</th>
            <th>Aksi</th>
        </tr>
        <?php 
        include '../../config/koneksi.php';
        $query=mysqli_query($conn,"SELECT * FROM kendaraan");
        if(mysqli_num_rows($query)>0){
            while($result=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                <td><?php echo $result['plat_nomor']?></td>
                    <td><?php echo $result['id_parkir']?></td>
                    <td><?php echo $result['jenis_kendaraan']?></td>
                    <td><?php echo $result['model_kendaraan']?></td>
                    <td>
                        <a href="">HAPUS</a>
                        <a href="">EDIT</a>
                    </td>
                </tr>
                <?php
            }
        }else{
            echo"data kosong";
        }
        ?>
    </table>
</body>
</html>