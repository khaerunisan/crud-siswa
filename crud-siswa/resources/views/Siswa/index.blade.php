<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Baru</title>
</head>
    <body>

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
                    <td>{{ $siswa->clas->name }}</td>
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
                         <a href="/Siswa/detail/{{ $siswa->id }}" onclick="return confirm('yakin?')">
                           Detail
                        </a>
                    </td>
                </tr>
                @endforeach

                </tr>
            <tbody>
        </table>
    </div>
    </body>
    </html>