<?php


include './lib/koneksi.php';


$query = mysqli_query(mysql: $connectDatabase, query: "SELECT * FROM `makanan`");

?>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>
                aksi

            </th>
        </tr>
    </thead>
    <tbody>
        <?php if ($query-> num_rows > 0): ?>
        <?php
        $i = 1;
        ?>
        <?php while($data = mysqli_fetch_assoc($query)): ?>

        <tr>
            <td><?= $i ?></td>
            <td><?= $data["nama"] ?></td>
            <td><?= $data["harga"] ?></td>
            <td>
                <a href="update.php?id=<?=$data["id"]?>">Edit</a>
                <a href="delete.php?id=<?=$data["id"]?>" onclick="confirm(`Serius lu mau hapus`)">Hapus</a>
            </td>
        </tr>

        <?php endwhile ?>
    <?php else: ?>
        <tr>
            <td colspan="3">Data tidak tersedia</td>
        </tr>
    <?php endif ?>
        
    </tbody>
</table>