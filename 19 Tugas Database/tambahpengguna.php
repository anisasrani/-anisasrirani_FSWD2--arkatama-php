<!DOCTYPE html>
<html>

<head>
    <h2>Form Tambah Pengguna</h2>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <form action=penggunaPOST.php method=post>
        <b>Nama Lengkap : </b><br>
        <input name="nama" placeholder="Masukkan nama lengkap" weidth="20px"> <br>
        
        <b>Role : </b><br>
        <select name="posisi">
            <option value="pilihrole" selected> Pilih Role Pengguna </option>
            <option value="staff"> Staff</option>
            <option value="admin"> Admin</option>
        </select> <br>
        
        <b>Email :</b> <br>
        <input name="email" placeholder="nama@contoh.com"> <br>

        <b>Password :</b> <br>
        <input name="password" placeholder="Masukkan password"> <br>

        
        <b>Telp : </b><br>
        <input name="telepon" placeholder="Masukkan no. HP"> <br>
        
        <b>Alamat Lengkap: </b> <br>
        <textarea name="alamat" rows="5" cols="20" placeholder="Masukkan alamat" > </textarea> <br>
        
        <b>Foto : </b> <br>
        <input type="file" name="foto"> <br>
        <br>
        <input type="submit" value="simpan">
    </form>
</body>

</html>