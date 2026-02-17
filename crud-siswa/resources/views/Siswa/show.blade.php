@extends('Layouts.app')
@section('tittle')
<title>show siswa</title>
@endsection
@section('content')
    <h1>Detail siswa</h1>
    
    {{-- profile siswa --}}
    <img src="{{asset('storage/'.$datauser->photo) }}" width="70" alt="">

    {{-- nama siswa --}}
    <h6>{{ $datauser->name }}</h6>

    {{-- nisn siswa --}}
    <h6>{{ $datauser->nisn }}</h6>

    {{-- alamat siswa --}}
    <h6>{{ $datauser->alamat }}</h6>

    {{-- email siswa --}}
    <h6>{{ $datauser->email }}</6>

    {{-- no handphone siswa --}}
    <h6>{{ $datauser->no_handphone }}</h6>
 
    @endsection