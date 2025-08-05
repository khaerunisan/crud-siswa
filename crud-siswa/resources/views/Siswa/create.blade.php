<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Halaman Tambah Siswa</title>
</head>
        <body>
            <h1>Halaman Tambah Siswa</h1>
            <h1> Tambah Data Siswa</h1>
            <a href="/">Kembali</a>
            <form action="/Siswa/store"method="post" enctype="multipart/form-data"> 
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
        <input type="text" name="name">
        <br>
                @error('name')
                <small style="color:red">{{$message}}</small>
                 @enderror
    </div>
    <br>
            <div>
                <label for="">Nisn:</label>
                <br>
                <input type="text" name="nisn">
                <br>
                @error('nisn')
                <small style="color:red">{{$message}}</small>
                 @enderror
        </div>
    <br>
        <div>
                <label for="">Alamat:</label>
                <br>
                <input type="text" name="alamat">
                <br>
                @error('alamat')
                <small style="color:red">{{$message}}</small>
                 @enderror
        </div>
    <br>
        <div>
                <label for="">Email:</label>
                <br>
                <input type="text" name="email">
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
                    <br>
                @error('password')
                <small style="color:red">{{$message}}</small>
                 @enderror
            </div>
        <br>
                <div>
                    <label for="">No Handphone:</label>
                    <br>
                    <input type="text" name="no_handphone">
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