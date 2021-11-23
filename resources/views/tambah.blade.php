<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data dosen</title>
</head>
<body>
    <form action="{{ route('simpan') }}" method="POST">
        @csrf
        <fieldset>
            <legend>Tambah Data Dosen</legend>
            <p>
                <label for="">NIP</label><br>
                <input type="text" name="nip" placeholder="Masukan nip">
            </p>
            <p>
                <label for="">Nama Dosen</label><br>
                <input type="text" name="nama" placeholder="Masukan nama">
            </p>
            <p>
                <label for="">No Telpon</label><br>
                <input type="text" name="telp" placeholder="Masukan no telpon">
            </p>
            <p>
                <label for="">Email</label><br>
                <input type="email" name="email" placeholder="Masukan email">
            </p>
            <p>
                <button type="submit">Tambah Data</button>
            </p>
        </fieldset>
    </form>
</body>
</html>