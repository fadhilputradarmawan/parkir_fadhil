<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>halaman tambah data</h1> 
<form action="simpan.php" method="POST"> 
    <label for="">id_parkir</label>
    <input type="text" name="id_parkir"><br>  
    <label for="">biaya_parkir</label>
    <input type="text" name="biaya_parkir"><br>
    <label for="">waktu_parkir</label> 
    <input type="time" name="waktu_parkir"><br> 
    <label for="">tempat_parkir</label>
    <input type="text" name="tempat_parkir"><br>
    <button type="submit">simpan</button> 
</form> 
        
</body>
</html>