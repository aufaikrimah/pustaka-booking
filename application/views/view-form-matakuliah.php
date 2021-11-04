<html>
<head>

    <title>Tampil Data Matakuliah</title>
</head>
<body>
    <center>
    <table>
    <tr>
    <th colspan="3">
    Form Input Data Mata Kuliah
    </th>
    </tr>
    <tr>
    <td colspan="3">
    <hr>
    </td>
    </tr>
    <tr>
    <th>Kode MTK</th>
    <td>:</td>  
    <td>
        <input type="text" name="kode" id="kode" value="<?php echo set_value('kode'); ?>" placeholder="Required">
    </td>
    <td>Kode Wajib diisi</td>
    <td><?php echo form_error('kode'); ?></td>
</tr>
    <tr>
    <th>Nama MTK</th>
    <td>:</td>
    <td>
        <input type="text" name="nama" id="nama" value="<?php echo set_value('nama'); ?>" placeholder="Required">
    </td>
    <td>Nama Matakuliah Wajib diisi</td>
    <td><?php echo form_error('nama'); ?></td>>
    </td>
    </tr>
    <tr>
    <th>SKS</th>
    <td>:</td>
    <td>
        <select name="sks" id="sks">
            <option value="">Pilih SKS</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
</select>
    <td>SKS Wajib dipilih</td>
    </td>
    <td><?php echo form_error('sks'); ?></td>
    </tr>
    <tr>
    <td colspan="3" align="center">
    <a href="<?= base_url('matakuliah'); 
    ?>">Kirim</a>
    </td>

    </tr>
    </table>
    </center>
</body>
</html>