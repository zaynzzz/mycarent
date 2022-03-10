<form action="<?= base_url(); ?>/Mobil/tambah" method="POST" enctype="multipart/form-data">
    <h3 class="text-dark text-center">Tambah Mobil Baru</h3>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
            <div class="form-group">
                <label class="profile_details_text">Merk Mobil:</label>
                <input type="text" name="mobil_merk" class="form-control">
            </div>
            <div class="form-group">
                <label class="profile_details_text">No. Plat Mobil:</label>
                <input type="text" name="mobil_plat" class="form-control">
            </div>
            <div class="form-group">
                <label class="profile_details_text">Warna Mobil:</label>
                <input type="text" name="mobil_warna" class="form-control">
            </div>
            <div class="form-group">
                <label class="profile_details_text">Mobil Tahun:</label>
                <input type="text" name="mobil_tahun" class="form-control">
            </div>
            <div class="form-group">
                <label class="profile_details_text">Tarif Mobil:</label>
                <input type="text" name="tarif" class="form-control">
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="profile_details_text">Kondisi Mobil:</label>
                    <select name="mobil_status" class="form-control" value="">
                        <option value="Aktif">Aktif</option>
                        <option value="Need service">Perlu Servis</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="profile_details_text">Kursi tersedia:</label>
                    <select name="kursi" class="form-control" value="">
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="8">8</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="profile_details_text">Status:</label>
                    <select name="status" class="form-control" value="">
                        <option value="tersedia">Tersedia</option>
                        <option value="on-rent">On-Rent</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <label for="" class="form-label"></label>
                <input type="file" class="form-control" name="image" id="" placeholder="" aria-describedby="fileHelpId">
            </div>
            <div class="row">
                <div class=" col-md-8 col-sm-12 col-xs-12 submit my-3">
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Tambah">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>