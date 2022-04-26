<html>
<head>
    <title>Biodata</title>
</head>
<body>
<center><h1 >Masukkan Data Biodata Anda</h1></center>
<form action="biodataAct.php" method = "POST" >
    <table>
        <tr>
            <td> Nama</td>
            <td> <input type="text" name="nama"></td>
        </tr>
        <tr>
            <td> NPM</td>
            <td> <input type="text" name="npm"></td>
        </tr>
        <tr>
            <td> Alamat</td>
            <td> <textarea name="alamat" cols="20" rows="3"></textarea></td>
        </tr>
        <tr>
            <td> Jenis Kelamin</td>
            <td> <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</td>
            <td> <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
        </tr>
        <tr>
            <td> Tanggal Lahir</td>
            <td> <input type="date" name="tanggal"></td>
        </tr>
        <tr>
            <td> Hobby</td>
            <td> <input type="text" name="hobby"></td>
        </tr>
        
        <tr>
            <td><input type="submit" name="submit" value="submit"></td>
            <td><input type="reset" name="reset" value="reset"></td>
        </tr>
    </table>
</form>
</body>
</html>
