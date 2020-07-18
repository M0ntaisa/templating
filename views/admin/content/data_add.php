<?php
// $id_oto = $myfun->get_kode_otomatis('tb_data', 'id_data', 'INP');
?>
<h2>Tambah Data</h2>

<form action="aksi/?aksi=data_add" id="form-add">
  <table border="0">
    <tr>
      <td>Judul</td>
      <td>
        <input type="text" name="judul" id="judul" />
        <div id="error"></div>
      </td>
    </tr>
    <tr>
      <td>Link</td>
      <td>
        <input type="text" name="link" id="link" />
        <div id="error"></div>
      </td>
    </tr>
    <tr>
      <td>Email</td>
      <td>
        <input type="email" name="email" id="email" />
        <div id="error"></div>
      </td>
    </tr>
    <tr>
      <td>Text</td>
      <td>
        <textarea name="text" id="text" rows="8" cols="30"></textarea>
        <div id="error"></div>
      </td>
    </tr>
    <tr>
      <td>
        <a href="javascript:history.back()">Batal</a>
        <input type="submit" name="add" id="add" value="Add">
      </td>
    </tr>
  </table>
</form>