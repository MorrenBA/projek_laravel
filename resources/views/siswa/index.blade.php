@extends('layout')

@section('content')

    <h2>Data Siswa</h2>
    <p>Berikut adalah daftar seluruh siswa:</p>

    <table>
        <thead>
            <tr>
                <th>NO</th>
                
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $s)
                <tr> 
    <td>
                        {{ $loop->iteration }}
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>{{ $s->tanggal_lahir }}</td>
        </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection