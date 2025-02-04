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
            <th>ID parkir</th>
            <th>Biaya parkir</th>
            <th>Waktu parkir</th>
            <th>Tempat parkir</th>
            <th>Aksi</th>
        </tr>
        <?php 
        include '../../config/koneksi.php';
        $query=mysqli_query($conn,"SELECT * FROM parkir");

        if(mysqli_num_rows($query)>0){
            while($result =mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $result['id_parkir']?></td>
                    <td><?php echo $result['biaya_parkir']?></td>
                    <td><?php echo $result['waktu_parkir']?></td>
                    <td><?php echo $result['tempat_parkir']?></td>
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