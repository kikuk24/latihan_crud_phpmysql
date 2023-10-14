<?php

include("connection.php");
$query = mysqli_query($connect, "SELECT * FROM karyawan");

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
  <form action="search.php" method="get">
    <input type="text" name="keyword">
    <button type="submit">Cari</button>
  </form>
  <br>
  <table border="1">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Umur</th>
      <th>Alamat</th>
      <th>Jenis Kelamin</th>
      <th>Action</th>
    </tr>
    <?php foreach ($result as $key => $value) : ?>
      <tr>
        <td><?= $key + 1; ?></td>
        <td><?= $value['nama']; ?></td>
        <td><?= $value['umur']; ?></td>
        <td><?= $value['alamat']; ?></td>
        <td><?= $value['jenis_kelamin']; ?></td>
        <td>
          <a href="edit.php?key=<?= $value['id']; ?>">Edit</a>
          <a href="delete.php?key=<?= $value['id']; ?>">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
  <a href="add.php">Tambah Data</a>


</body>

</html>