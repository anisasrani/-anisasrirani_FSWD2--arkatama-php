<!DOCTYPE html>
<html>
    <head>
        <title> FORMULIR DATA </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    </head>
    <body>

<?php
// Insert Data
function insertdata($avatar, $nama, $email, $telepon, $role)
{
    include 'koneksitask19.php';
    $varinsert = "INSERT INTO daftar_pengguna(avatar,nama,email,telepon,posisi)
        VALUES ('$avatar', '$nama', '$email', '$telepon', '$role')";

    if ($conn->query($varinsert) === true) {
        echo 'proses insert berhasil';
    } else {
        echo 'gagal: ' . $conn->error;
    }
}

// Read Data
function readdata()
{
    include 'koneksitask19.php';
    $varread = "SELECT * FROM daftar_pengguna";

    $result = $conn->query($varread);
    if ($result->num_rows > 0) {
        echo '<table border = "1" rules= "ALL">';
        echo '<tr>
        <td>id</td>
        <td>Avatar</td>
        <td>Nama</td>
        <td>Email</td>
        <td>Telepon</td>
        <td>Role</td>
        </tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['avatar'] . '</td>';
            echo '<td>' . $row['nama'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['telepon'] . '</td>';
            echo '<td>' . $row['Posisi'] . '</td>';
        }
        echo '</table>';
    }
}


// Update Data
function updatedata($avatar, $nama, $email, $telepon, $role)
{
    include 'koneksitask19.php';
    $varupdate = "UPDATE daftarpengguna
    SET name = '$name'
    WHERE id = $id";

    if ($conn->query($varupdate) === true) {
        echo 'proses update berhasil';
    } else {
        echo 'gagal: ' . $conn->error;
    }
}

// Delete Data
function deletedata($id)
{
    include 'koneksitask19.php';
    $vardelete = " DELETE FROM daftar_pengguna
    WHERE id = $id";

    if ($conn->query($vardelete) === true) {
        echo 'proses delete berhasil';
    } else {
        echo 'gagal: ' . $conn->error;
    }
}

readdata();
?>
 </body>
</html>