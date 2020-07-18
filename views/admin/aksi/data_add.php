<?php
$id_oto = $myfun->get_id_otomatis('tb_data', 'id_data');
$id_data = strip_tags($id_oto);
$judul   = strip_tags($_POST['judul']);
$link    = strip_tags($_POST['link']);
$text    = strip_tags($_POST['text']);

$error = [];
foreach ($_POST as $key => $value) {
  if (empty($value)) {
    $error[] = $key;
  }
}

if (count($error) == 0) {
  $insert = $pdo->Insert("tb_data", ["id_data", "judul", "link", "text"], [$id_data, $judul, $link, $text]);
  
  if ($insert == TRUE) {
    exit(json_encode(array('title' => 'Berhasil!', 'text' => 'Data Jenis Barang ditambah.', 'type' => 'success', 'button' => 'Ok!')));
  } else {
    exit(json_encode(array('title' => 'Berhasil!', 'text' => 'Data Jenis Barang ditambah.', 'type' => 'success', 'button' => 'Ok!')));
  }
} else {
  exit(json_encode(array('type' => 'validasi', 'error' => $error)));
}
