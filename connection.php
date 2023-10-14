<?php

$connect = mysqli_connect("localhost", "root", "", "latihan_php_mysql");

if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}