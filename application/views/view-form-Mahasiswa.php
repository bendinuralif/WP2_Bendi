<html>

<head>
    <title>D-Form</title>
</head>

<body>
    <center>
        <form action="<?= base_url('Mahasiswa/cetak'); ?>"
method="post">
            <table>
                <tr>
                    <th colspan="3">
                    Digital Learning Management System(Di-LeMas) 
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                    <th>Nama Mahasiswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kode">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" >
                    </td>
                </tr>
                <tr>
                    <th>Tanggal lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl" >
                    </td>
                </tr>
                <tr>
                    <th>Tempat lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                   <td><input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki<br>
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br></td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama">
                            <option value="">Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katalik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Katalik</option>
                        </select>
                    </td>
                </tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
</form>
    </center>
</body>
</html>