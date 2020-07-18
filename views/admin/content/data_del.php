<?php
$id     = $_GET['id'];
// untuk fungsi delete parameternya (nama_tabel, id, id_value)
$delete = $pdo->Delete("tb_data", "id_data", $id);

if ($delete == TRUE) {
  echo "Berhasil";
} else {
  echo "Gagal";
}
