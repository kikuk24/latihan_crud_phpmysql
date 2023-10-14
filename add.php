<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan PHP MySQL</title>
</head>

<body>
  <form action="insert.php" method="post">
    <label for="nama">Nama</label><br />
    <input type="text" name="nama" id="nama"><br />
    <label for="umur">Umur</label><br />
    <input type="text" name="umur" id="umur"><br />
    <label for="alamat">Alamat</label><br />
    <textarea name="alamat" id="alamat" cols="30">Alamat</textarea><br />
    <label for="jenis_kelamin">Jenis Kelamin</label><br />
    <select name="jenis_kelamin" id="jenis_kelamin"><br />
      <option value="pria">Pria</option>
      <option value="wanita">Wanita</option>
    </select><br /><br />
    <button type="submit">Simpan</button>
  </form>
</body>

</html>