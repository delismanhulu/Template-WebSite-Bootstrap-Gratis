<!-- fungsi header -->
<?php include'header.php'; ?>
<!-- isi contact -->
<main role="main" class="container">
  <div class="row">
    <div class="col-lg-12 col-xl-8">
      <div class="card card-signin flex-row my-5">
        <div class="card-body">
          <h1 class="card-title text-center">CONCACT ME</h1>
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
              <label for="coding">Pesan </label>
              <textarea class="form-control" name="txtpesan" id="registrasi" rows="3" required autofocus></textarea>
            </div>
            <hr>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">KIRIM</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-lg-12 col-xl-4 flex-row my-5">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" data-toggle="modal" data-target=".syarat">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-3">Hub Kami</h5>
          </div>
          <p class="mb-1"> HandPhone : 0813-7565-3271</p> <RB>
          <p class="mb-1"> Email Kami : delishulu.com@gmail.com</p>
        </a>

        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" data-toggle="modal" data-target=".tentang">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-3">Alamat</h5>
            <small class="text-muted">E-DISTRO</small>
          </div>
          <!-- Maps -->

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63709.49807269176!2d98.64080692774932!3d3.6231837583901796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031321dcd6f9e23%3A0x55d47e40fbac2485!2sKopi%20Raden%20Mas!5e0!3m2!1sid!2ssg!4v1597749252815!5m2!1sid!2ssg" width="320PX" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

          <!-- akhir maps -->

          <p class="mb-1"> Jln. Bilal Pulo Brayan Darat I, Kecamatan Medan Timur</p>
        </a>

        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" data-toggle="modal" data-target=".privasi">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-3"> Rekening Kami</h5>
          </div>
          <p class="mb-1">
              An. Delisman Hulu <Br>
              No : 081375653271 <br>
              Bank : BRI
          </p>
        </a>
      </div>
    </div>
  </div>
</main>
<!-- akhir contact -->
<!-- fungsi footer -->
<?php include'footer.php'; ?>