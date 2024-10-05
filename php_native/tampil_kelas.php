<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include "koneksi.php";
    $query_kelas = mysqli_query($conn, "SELECT * FROM `kelas`");?>

    <table class="table table-hover table-striped">
        <tr>
            <th>No</th>
            <th>Kelas</th>
            <th>Kelompok</th>
        </tr>
        <?php while ($data_kelas = mysqli_fetch_array($query_kelas)) { ?> 
        <tr>
            <td><?=$data_kelas['id_kelas']?></td>
            <td><?=$data_kelas['nama_kelas']?></td>
            <td><?=$data_kelas['kelompok']?></td>
        </tr>
        <?php } ?>
        

    </table>
</body>
</html>