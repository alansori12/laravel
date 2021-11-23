<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pasing dari controller ke view</h1>
    <a href="{{ route('tambah') }}">+Tambah data dosen</a>
    
    <table border=1>
    <tr>
        <th>ID</th>
        <th>NIP</th>
        <th>NAMA</th>
        <th>TELP</th>
        <th>EMAIL</th>
        <th>ACTION</th>
        
    </tr>
    @foreach($data as $dosen)
    <tr>
        <td>{{ $dosen->id }}</td>
        <td>{{ $dosen->nip }}</td>
        <td>{{ $dosen->nama }}</td>
        <td>{{ $dosen->telp }}</td>
        <td>{{ $dosen->email }}</td>
        <td>
            <a href="DosenModel/{{$dosen->id}}/edit">Edit</a>
            <a href="DosenModel/{{$dosen->id}}/destroy">Hapus</a>
        </td>
        
    </tr>
    @endforeach
    </table>
</body>
</html>