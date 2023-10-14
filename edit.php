<?php
 include("connection.php");
 $id = $_GET['key'];

$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE id=$id");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan PHP MySQL</title>
</head>

<body>
  <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $result[0]['id']; ?>">
    <label for="nama">Nama</label><br />
    <input type="text" name="nama" id="nama" value="<?= $result[0]['nama']; ?>"><br />
    <label for="umur">Umur</label><br />
    <input type="text" name="umur" id="umur" value="<?= $result[0]['umur']; ?>"><br />
    <label for="alamat">Alamat</label><br />
    <textarea name="alamat" id="alamat" cols="30" rows="10"><?= $result[0]['alamat']; ?></textarea><br />
    <label for="jenis_kelamin">Jenis Kelamin</label><br />
    <select name="jenis_kelamin" id=""><br />
      <option value="pria" <?= $result[0]['jenis_kelamin'] == 'pria' ? 'selected' : '' ?>>Pria</option>
      <option value="wanita" <?= $result[0]['jenis_kelamin'] == 'wanit' ? 'selected' : '' ?>>Wanita</option>
    </select><br /><br />
    <button type="submit">Simpan</button>
  </form>
</body>

</html>