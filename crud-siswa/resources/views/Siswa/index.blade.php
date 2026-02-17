@extends('Layouts.app')
@section('tittle')
<title>Index Siswa</title>
@endsection
@section('content')
        <h1>Halaman Beranda</h1>
        <h1>List Data Siswa</h1>
        <a href="Siswa/create">Tambah</a>
        <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                    <th>Foto</th>
                    <th>Name</th>
                    <th>Nisn</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $siswa )
                <tr>
                    <td><img src="{{ asset('storage/'.$siswa->photo)}}"alt="" width="40"></td>
                    <td>{{ $siswa->name }}</td>
                    <td>{{ $siswa->nisn }}</td>
                    <td>
                        @if ($siswa->clas)
                        {{ $siswa->clas->name }}
                    @else
                      @endif
                    </td>
                    <td>{{ $siswa->alamat }}</td>
                     <td class="option-links">
                        {{-- Delete --}}
                        <a href="/Siswa/delete/{{ $siswa->id }}" onclick="return confirm('yakin?')">
                            Delete
                        </a>

                        {{-- Edit --}}
                         <a href="/Siswa/edit/{{ $siswa->id }}" onclick="return confirm('yakin?')">
                           Edit
                        </a>

                        {{-- Detail --}}
                         <a href="/Siswa/show/{{ $siswa->id }}">Detail</a>
                    </td>
                </tr>
                @endforeach

                </tr>
            <tbody>
        </table>
    </div>
    @endsection
    