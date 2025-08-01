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
            <form action="/Siswa/store"method="post"> 
                @csrf
            <br>
            <div>
            <br>
            <label for="">Kelas</label>
            <select name="kelas">
                <option value="1">XII PPLG 1</option>
                <option value="2">XII PPLG 2</option>
                <option value="3">XII PPLG 3</option>
            </select>
             </div>
</br>

    <div>
        <label for="">Name:</label>
        <br>
        <input type="text" name="name">
    </div>
    <br>
            <div>
                <label for="">Nisn:</label>
                <br>
                <input type="text" name="nisn">
        </div>
    <br>
        <div>
                <label for="">Alamat:</label>
                <br>
                <input type="text" name="alamat">
        </div>
    <br>
        <div>
                <label for="">Email:</label>
                <br>
                <input type="text" name="email">
        </div>
    <br>
            <div>
                    <label for="">Password:</label>
                    <br>
                    <input type="password" name="password">
            </div>
        <br>
                <div>
                    <label for="">No Handphone:</label>
                    <br>
                    <input type="text" name="no_handphone">
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