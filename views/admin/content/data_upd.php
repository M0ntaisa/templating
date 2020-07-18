<?php
$id    = $_GET['id'];
$query = $pdo->GetWhere('tb_data', 'id_data', $id);
$row = $query->fetch(PDO::FETCH_OBJ);
?>
<h2>Ubah Data</h2>

<form method="post">
  <table border="0">

    <!-- untuk id_data yg akan diubah -->
    <input type="hidden" name="id_data" value="<?= $id; ?>" readonly>

    <tr>
      <td>Judul</td>
      <td><input type="text" name="judul" value="<?= $row->judul; ?>"> </td>
    </tr>
    <tr>
      <td>Link</td>
      <td><input type="text" name="link" value="<?= $row->link; ?>"> </td>
    </tr>
    <tr>
      <td>Text</td>
      <td><textarea name="text" rows="8" cols="30"><?= $row->text; ?></textarea> </td>
    </tr>
    <tr>
      <td>
        <a href="javascript:history.back()">Batal</a>
        <input type="submit" name="ubah" value="Ubah">
      </td>
    </tr>
  </table>
</form>

<?php
if (isset($_POST['ubah'])) {

  $id_data = strip_tags($_POST['id_data']);
  $judul   = strip_tags($_POST['judul']);
  $link    = strip_tags($_POST['link']);
  $text    = strip_tags($_POST['text']);

  // untuk fungsi update parameternya (nama_tabel, id untuk where, id untuk nilai, nama_kolom, nama_value/nama_hasil)
  $update = $pdo->Update('tb_data', 'id_data' ,$id_data, ['judul', 'link', 'text'], [$judul, $link, $text]);

  if ($update == TRUE) {
    echo "Berhasil";
  } else {
    echo "Gagal";
  }

}
?>