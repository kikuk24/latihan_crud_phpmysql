<?php

include("connection.php");

$id = $_GET['key'];
$query = mysqli_query($connect, "DELETE FROM karyawan WHERE id=$id");

if ($query) {
  header("location:index.php");
} else {
  echo "Data Gagal Dihapus";
}