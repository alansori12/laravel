<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data dosen</title>
</head>
<body>
    <form action="/DosenModel/{{$data->id}}/update" method="POST">
        @csrf
        <fieldset>
            <legend>Edit Data Dosen</legend>
            <p>
                <label for="">NIP</label><br>
                <input type="text" name="nip" placeholder="Masukan nip" value="{{ $data->nip }}">
            </p>
            <p>
                <label for="">Nama Dosen</label><br>
                <input type="text" name="nama" placeholder="Masukan nama" value="{{ $data->nama }}">
            </p>
            <p>
                <label for="">No Telpon</label><br>
                <input type="text" name="telp" placeholder="Masukan no telpon" value="{{ $data->telp }}">
            </p>
            <p>
                <label for="">Email</label><br>
                <input type="email" name="email" placeholder="Masukan email"value="{{ $data->email }}">
            </p>
            <p>
                <input type="submit" value="Edit Data">
            </p>
        </fieldset>
    </form>
</body>
</html>