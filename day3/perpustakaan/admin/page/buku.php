<div class="col-lg-12">
    <section class="panel">
        <a href="index.php?page=adm_tambah_buku" class="btn btn-succes">Tambah Buku</a>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
                $sql = mysqli_query($koneksi, "SELECT * FROM buku");
                $no = 1;
                while($result = mysqli_fetch_array($sql)){ ?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $result['judul'];?></td>
                        <td><?php echo $result['kategori'];?></td>
                        <td><?php echo $result['pengarang'];?></td>
                        <td><?php echo $result['penerbit'];?></td>
                        <td><?php echo $result['status'];?></td>
                        <td><a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Hapus<a/></td>
                    </tr>
                <?php
                $no++;
                }
            ?>
            <tr>

            </tr>
        </table>
    </section>
</div>

