@extends('dashboard.index')

@section('judul','Pemain')

@section('content')
<h1>Your Profile Page</h1>

<table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Posisi</th>
            <th>Email</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 1; $i <= 10; $i++) <tr>
            <td>Nama {{ $i }}</td>
            <td>{{ $i % 2 == 0 ? 'GK' : 'CB' }}</td>
            <td>email{{ $i }}@example.com</td>
            <td>Keterangan {{ $i }}</td>
            </tr>
            @endfor
    </tbody>
</table>

@endsection