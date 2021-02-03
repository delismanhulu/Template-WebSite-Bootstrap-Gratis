<!-- fungsi header -->
<?php include'header.php'; ?>
<!-- isi contact -->
<main role="main" class="container">
  <div class="row">
    <div class="col-lg-12 col-xl-8">
      <div class="card card-signin flex-row my-5">
        <div class="card-body">
          <H5 class="card-title text-center">Daftar Pesanan</H5>
           <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Total</th>
      <th scope="col">Batal</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Produk 1</td>
      <td>Rp. 100.000</td>
      <td>2</td>
      <td>Rp. 200.000</td>
      <td><a class="btn btn-danger btn-sm" href="detail_produk.php">Batal</a></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Produk 2</td>
      <td>Rp. 200.000</td>
      <td>1</td>
      <td>Rp. 200.000</td>
      <td><a class="btn btn-danger btn-sm" href="detail_produk.php">Batal</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Produk 3</td>
      <td>Rp. 150.000</td>
      <td>2</td>
      <td>Rp. 300.000</td>
      <td><a class="btn btn-danger btn-sm" href="detail_produk.php">Batal</a></td>
    </tr>
    <tr>
      <td colspan="4">Total </td>
      <td><b>Rp. 700.000</b></td>
    </tr>
  </tbody>
</table>
<a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Check Out</a>
        </div>
      </div>
    </div>

    <div class="col-lg-12 col-xl-4 flex-row my-5">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" data-toggle="modal" data-target=".syarat">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-3">Biodata Customer</h5>
          </div>
          <form action="#" method="POST" class="needs-validation" novalidate>
            
          <div class="form-label-group">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama"  required autofocus>
            </div>
            <div class="form-label-group">
            
            <label>HendPhone</label>
              <input type="number" name="handphone"id="coding" class="form-control" placeholder="HandPhone" required autofocus>
            </div>

            <div class="form-label-group">
              <label>Email</label>
              <input type="email" name="email"  id="inputEmail" class="form-control" placeholder="Email address" required>
            </div>
            <div class="form-label-group">
              <label for="coding">Alamat Pemesan </label>
              <textarea class="form-control" name="txtpesan" id="registrasi" rows="3" required autofocus></textarea>
            </div>
            <hr>
           
          </form>
        </a>
      </div>
    </div>
  </div>
</main>
<!-- akhir contact -->
<!-- fungsi footer -->
<?php include'footer.php'; ?>