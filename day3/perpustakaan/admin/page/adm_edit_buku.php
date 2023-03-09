<?php
    if (isset($_POST['submit_buku'])){
        $idbuku = $_POST['id_buku'];
        $judul = $_POST['judul'];
        $kategori = $_POST['kategori'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $status = $_POST['status'];
        if (empty($idbuku)||empty($judul)){
            echo "judul dan id kosong";
        }
        else{
            echo "sedang submit";
            // $sql = mysqli_query($koneksi, "INSERT INTO buku(id_buku,judul,kategori,pengarang,penerbit,status)
            // VALUES('$idbuku','$judul','$kategori','$pengarang','$penerbit','$status')");
            $sql = mysqli_query($koneksi, "UPDATE buku 
            SET judul='$judul',kategori='$kategori',pengarang='$pengarang',penerbit='$penerbit', status='$status' 
            WHERE id_buku='$idbuku'");

            if ($sql){
                echo "berhasil dunk :v";
                echo "<meta http-equiv='refresh' content='0 url=index.php?page=buku'>";
            }
            else {
                echo "yah, gagal :(";
            }

        }
    }
?>

<div class="container">
    <h2>Halaman Edit Buku</h2>
    <a href="index.php?page=buku"> Kembali Kehalaman Management<a/>
    <?php
        $idbuku = $_GET['id'];
        $sql = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$idbuku'");
        $result = mysqli_fetch_array($sql);
    ?>
    <form method="post" action="">
        <input type="text" name="id_buku" placeholder="ID Buku" class="form-control" value="<?php echo $result['id_buku']?>"><br>
        <input type="text" name="judul" placeholder="Judul Buku" class="form-control" value="<?php echo $result['judul']?>"<br>
        <input type="text" name="kategori" placeholder="Kategori" class="form-control" value="<?php echo $result['kategori']?>"<br>
        <input type="text" name="pengarang" placeholder="Pengarang" class="form-control" value="<?php echo $result['pengarang']?>"<br>
        <input type="text" name="penerbit" placeholder="Penerbit" class="form-control" value="<?php echo $result['penerbit']?>"<br>
        <select name="status" class="form-control">
            <option value="available">Available</option>
            <option value="unavailable">Unavailable</option>
        </select>
        <input type="submit" name="submit_buku" value="Update Buku" clas="btn btn-primary"><br>
    </form>
</div>
