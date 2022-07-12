<?php
 include 'koneksi.php';
$lists = array();
 $sql = "SELECT * from produk";
 $result = $koneksi->query($sql); 
 if ($result->num_rows > 0) {while($row=$result->fetch_assoc()){$lists[]=$row;} }
 $koneksi->close();
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
      <div class="container-fluid w-75 my-5">
      <h3 class="text-center">Data Barang</h3>
      <form action="create.php" method="post">
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
    <table class="table">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>QTY</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($lists as $list){
            ?>
        <tr>
                <td scope="row"><?php echo $list["nama_produk"];?></td>
                <td scope="row"><?php echo $list["qty"];?></td>
                <td scope="row"><?php echo $list["harga"];?></td>
                <td scope="row">
                    <a href="edit.php?id=<?php echo $list['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $list['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php }
            ?>
        </tbody>
    </table>
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>