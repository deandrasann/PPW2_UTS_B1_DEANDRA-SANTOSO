@extends('headerfooter.footer')
@section('content')
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
@endsection
