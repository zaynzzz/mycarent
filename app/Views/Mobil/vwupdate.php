<div class="container">
  <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 edit_information">
    <form action="<?= base_url(); ?>/Mobil/update/<?= $car['id_mobil']; ?>" method="POST" enctype="multipart/form-data">
      <h3 class="text-center">Ubah Informasi Mobil</h3>
  </div>
  <div class="row">
    <div class=" col-md-8 col-sm-12 col-xs-12">
      <div class="form-group">
        <label class="profile_details_text">Merk Mobil:</label>
        <input type="text" name="mobil_merk" class="form-control" value="<?= $car['mobil_merk']; ?>">
      </div>
    </div>
  </div>
  <div class="row">
    <div class=" col-md-8 col-sm-12 col-xs-12">
      <div class="form-group">
        <label class="profile_details_text">Mobil Warna:</label>
        <select name="mobil_warna" class="form-control" value="">
          <option value="Merah">Merah</option>
          <option value="Biru">Biru</option>
          <option value="Hitam">Hitam</option>
          <option value="Hijau">Hijau</option>
          <option value="Kuning">Kuning</option>
          <option value="Putih">Putih</option>
          <option value="Orange">Orange</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class=" col-md-8 col-sm-12 col-xs-12">
      <div class="form-group">
        <label class="profile_details_text">Plat Mobil:</label>
        <input type="text" name="mobil_plat" class="form-control" value="<?= $car['mobil_plat']; ?>">
      </div>
    </div>
  </div>
  <div class="row">
    <div class=" col-md-8 col-sm-12 col-xs-12">
      <div class="form-group">
        <label class="profile_details_text">Mobil Tahun:</label>
        <input type="text" name="mobil_tahun" class="form-control" value="<?= $car['mobil_tahun']; ?>">
      </div>
    </div>
  </div>
  <!-- <div class="row">
    <div class=" col-md-8 col-sm-12 col-xs-12">
      <div class="form-group">
        <label class="profile_details_text">Mobil Status:</label>
        <input type="text" name="mobil_status" class="form-control" value="<?= $car['mobil_status']; ?>">
      </div>
    </div>
  </div> -->
  <div class="row">
    <div class=" col-md-8 col-sm-12 col-xs-12">
      <div class="form-group">
        <label class="profile_details_text">Mobil Status:</label>
        <select name="mobil_status" class="form-control" value="">
          <option value="Aktif">Aktif</option>
          <option value="Mati">Mati</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class=" col-md-8 col-sm-12 col-xs-12 submit">
      <div class="form-group">
        <input type="submit" class="btn btn-success" value="Submit">
      </div>
    </div>
  </div>
  </form>
</div>
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 edit_information">
  <form action="<?= base_url(); ?>/Profile/changeavatar" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class=" col-md-12 col-xs-8">
        <div class="form-group">
          <label class="profile_details_text">Change Display Picture</label>
          <input type="file" name="avatar" class="form-control" value="">
        </div>
      </div>
    </div>
    <div class="row">
      <div class=" col-md-12 submit">
        <div class="form-group">
          <input type="hidden" name="username" class="form-control" value="<?= session()->get('username'); ?>">
          <input type="submit" class="btn btn-success" value="Submit">
        </div>
      </div>
    </div>
  </form>
</div>