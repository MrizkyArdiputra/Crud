<?php
include 'koneksi.php';
$id =$_GET['id'];
$select_Id = "SELECT id,nama_produk, qty, harga from produk WHERE id=$id";
$row = $koneksi->query($select_Id);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
  <form action="update.php" method="post">
          <input type="hidden" value="<?php echo $id ?>" name="id">
          
          <div class="mb-3">
              <label>Nama Produk</label>
              <input
              type="text"
              class="form-control"
              name="nama"
              placeholder="Masukan Nama barang"
              />
            </div>
          <div class="mb-3">
              <label>QTY</label>
              <input
              type="text"
              class="form-control"
              name="qty"
              placeholder="Masukan Jumlah Barang"
              />
            </div>
          <div class="mb-3">
              <label>Harga</label>
              <input
              type="text"
              class="form-control"
              name="harga"
              placeholder="Masukan Harga Barang"
              />
            </div>
            <div>
                <button type="submit">Save</button>
            </div>
      </form>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>