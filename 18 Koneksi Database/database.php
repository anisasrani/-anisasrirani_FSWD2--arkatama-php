<!DOCTYPE html>
<html>

<head>
    <title>Koneksi Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
<?php
// Insert Data
function insertdatacar($nama, $url, $banner)
{
    include 'koneksi.php';
    $varinsert = "INSERT INTO carousels(name, url, banner)
VALUES ('$nama', '$url', '$banner')";

    if ($conn->query($varinsert) === true) {
        echo 'proses insert berhasil';
    } else {
        echo 'gagal: ' . $conn->error;
    }
}

function insertdataprod($nama, $desc, $status)
{
    include 'koneksi.php';
    $varinsert = "INSERT INTO products(name, description, status)
VALUES ('$nama', '$desc', '$status')";

    if ($conn->query($varinsert) === true) {
        echo 'proses insert berhasil';
    } else {
        echo 'gagal: ' . $conn->error;
    }
}

// Read Data
function readdatacar()
{
    include 'koneksi.php';
    $varread = "SELECT * FROM carousels";

    $result = $conn->query($varread);
    if ($result->num_rows > 0) {
        echo '<table border = "1" rules= "ALL">';
        echo '<tr>
        <td>id</td>
        <td>Name</td>
        <td>Url</td>
        <td>Banner</td>
        <td>Created</td>
        <td>Update</td>
        </tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['url'] . '</td>';
            echo '<td>' . $row['banner'] . '</td>';
            echo '<td>' . $row['created_at'] . '</td>';
            echo '<td>' . $row['update_at'] . '</td>';
        }
        echo '</table>';
    }
}

function readdataprod()
{
    include 'koneksi.php';
    $varread = "SELECT * FROM products";

    $result = $conn->query($varread);
    if ($result->num_rows > 0) {
        echo '<table border = "1" rules= "ALL">';
        echo '<tr>
        <td>id</td>
        <td>Name</td>
        <td>Description</td>
        <td>Status</td>
        <td>Created</td>
        <td>Update</td>
        </tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['description'] . '</td>';
            echo '<td>' . $row['status'] . '</td>';
            echo '<td>' . $row['created_at'] . '</td>';
            echo '<td>' . $row['updated_at'] . '</td>';
        }
        echo '</table>';
    }
}

// Update Data
function updatedata($name, $id)
{
    include 'koneksi.php';
    $varupdate = "UPDATE carousels
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
    include 'koneksi.php';
    $vardelete = " DELETE FROM carousels
    WHERE id = $id";

    if ($conn->query($vardelete) === true) {
        echo 'proses delete berhasil';
    } else {
        echo 'gagal: ' . $conn->error;
    }
}

// Join Data
function joindata()
{
    include 'koneksi.php';
    $varjoin = "CREATE VIEW arkatama_store.view_join as SELECT id, name, url, banner, created_at, update_at
    FROM carousels
    UNION ALL
    SELECT id, name, description, status, created_at, updated_at
    FROM products";

    if ($conn->query($varjoin) === true) {
        echo 'proses join berhasil';
    } else {
        echo 'gagal : ' . $conn->error;
    }
}

function viewjoin()
{
    include 'koneksi.php';
    $varreadjoin = "SELECT * FROM view_join";

    $result = $conn->query($varreadjoin);
    if ($result->num_rows > 0) {
        echo '<table class="table table-dark table-hover rules= "ALL">';
        echo '<tr>
        <td>id</td>
        <td>Name</td>
        <td>Info</td>
        <td>Keterangan</td>
        <td>Created</td>
        <td>Update</td>
        </tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['url'] . '</td>';
            echo '<td>' . $row['banner'] . '</td>';
            echo '<td>' . $row['created_at'] . '</td>';
            echo '<td>' . $row['update_at'] . '</td>';
        }
        echo '</table>';
    }
}

viewjoin()
?>
</body>
</html>