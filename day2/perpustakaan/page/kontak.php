<?php
if (isset($_POST['submit_kontak'])){
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $pesan = $_POST['pesan'];

    if (empty($email)||empty($nama)){
        echo '<div class= "warning">Data tidak boleh kosong</div>';
    }
    else{
        echo "test";
        $insert = mysqli_query($koneksi, "INSERT INTO kontak(email, nama, tanggal, pesan)
        VALUES('$email','$nama','$tanggal','$pesan')");
        if ($insert){
            echo '<div class="success">Kontak berhasil disimpan</div>';
        }
        else {
            echo '<div class="error">Kontak Gagal disimpan</div>';
        }
    }
}
?>
<div class="col-lg-12">
    <section class="panel">
        <form action="" method="post">
            <input type = "text" name= "email" placeholder="Email"class="form-control"><br>
            <input type = "date" name= "tanggal" placeholder="Tanggal Kontak"class="form-control"><br>
            <input type = "text" name= "nama" placeholder="Nama Kontak"class="form-control"><br>
            <textarea name= "pesan" class="form-control"></textarea><br>
            <input type = "submit" name= "submit_kontak" value="Submit" class="submit">
        </form>
    </section>
</div>    