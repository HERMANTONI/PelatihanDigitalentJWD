<table class="table">
    <thead>
        <tr>
            <td>No</td>
            <td>ID Buku</td>
            <td>Judul</td>
            <td>Pengarang</td>
            <td>Penerbit</td>
            <td>Kategori</td>
            <td>Status</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $sql = mysqli_query($koneksi,"SELECT * FROM buku");
        if ($sql){
            while($result = mysqli_fetch_array($sql)){ ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $result['judul'];?></td>
                    <td><?php echo $result['pengarang'];?></td>
                    <td><?php echo $result['penerbit'];?></td>
                    <td><?php echo $result['kategori'];?></td>
                    <td><?php echo $result['status'];?></td>
                </tr>
            <?php
            $no++;
            }
        }
        ?>
    </tbody>
</table>
