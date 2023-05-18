<!DOCTYPE html>
<html>
    <head>
        <title> Menu Utama Pengguna </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    </head>
    <body>
        <h1> Daftar Pengguna Website </h1>
        <br>
        <a href="tambahpengguna.php"> <button type="button" class="btn btn-info btn-lg">Tambah Data</button></a>
        <button type="button" class="btn btn-success btn-lg">Update Data</button>
        <br>
        <br> 
    <?php
    // Koneksi dengan database
    include 'koneksitask19.php';

    // Menampilkan database
    $varread = "SELECT * FROM daftar_pengguna";

    $result = $conn->query($varread);
    
    if ($result->num_rows > 0){
        echo '<table class="table table-striped-columns">';
        echo '<tr>
        <th>id</th>
        <th>Aksi</th>
        <th>Avatar</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Role</th>
        </tr>';
    while ($row = $result->fetch_assoc()){
        echo "
            <tbody>
            <tr>
            <td>$row[id]</td>
            <td>
                <div class ='row'>
                <div class='col d-flex justify-content-center'>
                    <a href='' class='btn btn-sm btn-primary'>Detail</a>
                </div>
                <div class='col d-flex justify-content-center'>
                    <a href='' class='btn btn-sm btn-warning'>Edit</a>
                </div>
                <div class='col d-flex justify-content-center'>
                    <a href='' class='btn btn-sm btn-danger'>Hapus</a>
                </div>
                </div>
            </td>
            <td>$row[avatar]</td>
            <td>$row[nama]</td>
            <td>$row[email]</td>
            <td>$row[telepon]</td>
            <td>$row[role]</td>
        ";
        }
    }
    ?>
    </body>
</html>