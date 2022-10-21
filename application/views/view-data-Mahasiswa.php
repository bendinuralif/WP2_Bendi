<html>
<head>
    <title>Tampil Data Matakuliah</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3"> Tampil Data Mata Kuliah </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>nama</td>
                <td>:</td>
                <td> <?= $nama; ?> </td>
            </tr>
            <tr>
                <td>kode</td>
                <td>:</td>
                <td> <?= $kode; ?> </td>
            </tr>
            <tr>
                <td>kelas</td>
                <td>:</td>
                <td> <?= $kelas; ?> </td>
            </tr>
            <tr>
                <td>tgl</td>
                <td>:</td>
                <td> <?= $tgl; ?> </td>
            </tr>
            <tr>
                <td>tempat</td>
                <td>:</td>
                <td> <?= $tempat; ?> </td>
            </tr>
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td> <?= $alamat; ?> </td>
            </tr>
            <tr>
                <td>jenis_kelamin</td>
                <td>:</td>
                <td> <?= $jenis_kelamin; ?> </td>
            </tr>
            <tr>
                <td>agama</td>
                <td>:</td>
                <td> <?= $agama; ?> </td>
            </tr>
            <tr>
                <td colspan="3" align="center"> <a href="<?= base_url('Mahasiswa'); ?>">Kembali</a> </td>
            </tr>
        </table>
    </center>
</body>
</html>