    <table width='100%'>
        <tr>
            <th>No</th>
            <th align="left">Nama</th>
            <th align="left">NRP</th>
            <th align="left">Email</th>
            <th align="left">Jurusan</th>
        </tr>

        <?php foreach ($result as $row) : ?>
            <tr>
                <td align="center"><?= $no++ ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['nrp'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['jurusan'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>