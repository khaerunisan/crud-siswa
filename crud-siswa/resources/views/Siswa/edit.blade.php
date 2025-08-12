<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit Data Siswa</title>
</head>
        <body>
            <h1>Edit data siswa</h1>
            <h1>Tambah data siswa</h1>
            <a href="/">Kembali</a><br>
            <img width="70" src="{{ asset('storage/'.$datauser->photo) }}"><br>
            <form action="/Siswa/update/{{ $datauser->id }}"method="post" enctype="multipart/form-data"> 
                @csrf
            <br>
            <div>
            <br>
            <label for="">Kelas</label><br>
            <select name="kelas">
                @foreach ($clases as $clas)
                <option value="{{$clas->id}}">{{$clas->name}}</option>
                @endforeach

            </select><br>
            @error('kelas')
            <small style="color:red">{{$message}}</small>
            @enderror
             </div>
</br>

    <div>
        <label for="">Name:</label>
        <br>
        <input type="text" name="name" value="{{ $datauser->name}}">
        <br>
                @error('name')
                <small style="color:red">{{$message}}</small>
                 @enderror
    </div>
    <br>
            <div>
                <label for="">Nisn:</label>
                <br>
                <input type="text" name="nisn" value="{{ $datauser->nisn}}"><br>
                <br>
                @error('nisn')
                <small style="color:red">{{$message}}</small>
                 @enderror
        </div>
    <br>
        <div>
                <label for="">Alamat:</label>
                <br>
                <input type="text" name="alamat" value="{{ $datauser->alamat}}"><br>
                <br>
                @error('alamat')
                <small style="color:red">{{$message}}</small>
                 @enderror
        </div>
    <br>
        <div>
                <label for="">Email:</label>
                <br>
                <input type="text" name="email" value="{{ $datauser->email}}" >
                <br>
                @error('email')
                <small style="color:red">{{$message}}</small>
                 @enderror
        </div>
    <br>
            <div>
                    <label for="">Password:</label>
                    <br>
                    <input type="password" name="password">
                    <small style= "color:green">Abaikan jika tidak ingin diubah</small><br>
                    <br>
                @error('password')
                <small style="color:red">{{$message}}</small>
                 @enderror
            </div>
        <br>
                <div>
                    <label for="">No Handphone:</label>
                    <br>
                    <input type="text" name="no_handphone" value="{{ $datauser->no_handphone}}"><br>
                    <br>
                @error('no_handphone')
                <small style="color:red">{{$message}}</small>
                 @enderror
                </div>
        <br>
                <div>
                    <label for="">Foto:</label>
                    <br>
                    <input type="file" name="foto">
                </div>
<br>
        <div>
        <button type="submit">Simpan</button>
        </div>
        </form>
    </body>
            </form>
    </body>
        </html>