<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pemain</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pemain</th>
                <th>Nomor</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($data_pemain as $pemain)
            <td>{{$pemain->id}}</td>
            <td>{{$pemain->nama}}</td>
            <td>{{$pemain->no_punggung}}</td>
            <td>{{$pemain->posisi}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
