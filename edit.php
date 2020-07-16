<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <section id="box-data">
        <a href="index.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.646 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
        </svg> Lihat Semua Data</a>
        <h3>Edit data</h3>

        <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $query_mysql = mysql_query("SELECT * FROM produk WHERE id='$id'")or die(mysql_error());
        while($data = mysql_fetch_array($query_mysql)){
        ?>

        <form action="update.php" method="post">
        <div class="form-group">
            <label for="exampleInputText">Nama Produk</label>
            <input type="hidden" class="form-control" id="exampleInputId" name = "id" value="<?php echo $data['id'] ?>">
            <input type="text" class="form-control" id="exampleInputText" name="nama_produk" value="<?php echo $data['nama_produk'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputText1">Keterangan</label>
            <input type="text" class="form-control" id="exampleInputText1" name = "keterangan" value="<?php echo $data['keterangan'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputNumber">Harga</label>
            <input type="number" class="form-control" id="exampleInputNumber" name = "harga" value="<?php echo $data['harga'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputNumber1">Jumlah</label>
            <input type="number" class="form-control" id="exampleInputNumber1" name = "jumlah" value="<?php echo $data['jumlah'] ?>">
        </div>
        <button type="submit" class="btn btn-primary" value="Simpan">Submit</button>
        </form>
        <?php } ?>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
