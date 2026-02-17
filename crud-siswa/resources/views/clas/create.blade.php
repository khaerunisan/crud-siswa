@extends('Layouts.app')
@section('tittle')
<title>create clas</title>
@endsection
@section('content')
    <h2>Tambah Data Kelas</h2>
    <a href="{{ route('clas.index') }}">Kembali</a>
    <br><br>

    <form action="{{ route('clas.store') }}" method="POST">
        @csrf

        <div>
        <label for="">Name:</label>
        <br>
        <input type="text" name="name">
        <br>
            @error('name')
                <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        
        <div>
            <label for="">Deskripsi:</label>
            <br>
            <textarea id="description" name="description" rows="4" cols="50"></textarea><br>
            @error('description')
                <small style="color:red">{{$message}}</small>
            @enderror
            <br>
        </div>

        

        <button type="submit">Simpan</button>
    </form>
@endsection

