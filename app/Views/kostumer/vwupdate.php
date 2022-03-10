<div class="container">
  <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 edit_information">
    <form action="<?= base_url(); ?>/Profile/update" method="POST" enctype="multipart/form-data">
      <h3 class="text-center">Edit Personal Information</h3>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <label class="profile_details_text">First Name:</label>
            <input type="text" name="first_name" class="form-control" value="<?= $cust['kostumer_nama']; ?>">
            <input type="hidden" name="username" class="form-control" value="<?= session()->get('username'); ?>">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <label class="profile_details_text">Last Name: </label>
            <input type="text" name="last_name" class="form-control" value="">
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
          <div class="form-group">
            <label class="profile_details_text">Email Address:</label>
            <input type="text" name="email" class="form-control" value="">
          </div>
        </div> -->
  </div>
  <div class="row">
    <div class=" col-md-8 col-sm-12 col-xs-12">
      <div class="form-group">
        <label class="profile_details_text">Mobile Number:</label>
        <input type="text" name="kostumer_hp" class="form-control" value="<?= $cust['kostumer_hp']; ?>">
      </div>
    </div>
  </div>
  <div class="row">
    <div class=" col-md-8 col-sm-12 col-xs-12">
      <div class="form-group">
        <label class="profile_details_text">Address:</label>
        <input type="text" name="alamat" class="form-control" value="<?= $cust['kostumer_alamat']; ?>">
      </div>
    </div>
  </div>
  <div class="row">
    <div class=" col-md-8 col-sm-12 col-xs-12">
      <div class="form-group">
        <label class="profile_details_text">Date Of Birth:</label>
        <input type="date" name="date_birth" class="form-control" value="<?= $cust['kostumer_nama']; ?>">
      </div>
    </div>
  </div>
  <div class="row">
    <div class=" col-md-8 col-sm-12 col-xs-12">
      <div class="form-group">
        <label class="profile_details_text">Gender:</label>
        <select name="gender" class="form-control" value="">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
    </div>
  </div>
  <!-- <div class="row">
    <div class=" col-md-8 col-sm-12 col-xs-12">
      <div class="form-group">
        <label class="profile_details_text">Nationality:</label>
        <input type="text" name="nationality" class="form-control" value="">
      </div>
    </div>
  </div> -->
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