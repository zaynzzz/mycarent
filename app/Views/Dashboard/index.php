<link rel="stylesheet/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<div class="col-md-12 mb-xl-0 mb-4">
    <div class="row d-flex justify-content-between">
        <div class="card col-md-3">
            <div class="card-body p-3">
                <div class="row fs-5">
                    <div class="col-12">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Mobil</p>
                            <h5 class="font-weight-bolder mb-0">
                                <span class="text-success text-xl font-weight-bolder ">Jumlah Mobil </span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 my-1 text-end">
                        <a href="#datamobil" class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md col-12">
                            <i class="text-lg fas fa-car opacity-10" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-6 my-1">
                        <div class="row">
                            <div class=" fs-3 opacity-10" aria-hidden="true"><?= $count; ?> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-md-3">
            <div class="card-body p-3">
                <div class="row fs-5">
                    <div class="col-12">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Admin</p>
                            <h5 class="font-weight-bolder mb-0">
                                <span class="text-success text-xl font-weight-bolder ">Jumlah Admin </span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 my-1 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md col-12">
                            <i class="text-lg fas fa-car opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-6 my-1">
                        <div class="">
                            <div class=" fs-3 opacity-10" aria-hidden="true"><?= $cadmin; ?> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-md-3">
            <div class="card-body p-3">
                <div class="row fs-5">
                    <div class="col-12">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Member</p>
                            <h5 class="font-weight-bolder mb-0">
                                <span class="text-success text-xl font-weight-bolder ">Jumlah Member</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 my-1 text-end">
                        <a href="#datamember" class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md col-12">
                            <i class="text-lg fas fa-car opacity-10" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-6 my-1">
                        <div class="">
                            <div class=" fs-3 opacity-10" aria-hidden="true"><?= $ckostumer; ?> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row d-flex justify-content-between">
    <div class="col-md-6 my-5 row d-flex justify-content-between">
        <div class="card col-12">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
                            <h5 class="font-weight-bolder mb-0">
                                $53,000
                                <span class="text-success text-sm font-weight-bolder">+55%</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 my-5 row d-flex justify-content-between">
        <div class="card col-5">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
                            <h5 class="font-weight-bolder mb-0">
                                $53,000
                                <span class="text-success text-sm font-weight-bolder">+55%</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 my-5 row d-flex justify-content-between">
    <div class="row">
        <div id='datamobil' class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Data Mobil</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table id='tabelmobil' class="table align-items-center mb-0">
                            <a class="mx-4 text-light btn btn-info" href="<?= base_url(); ?>/Mobil">
                                <i class="fas fa-plus"></i>
                            </a>
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Merk Mobil</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Warna</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mobil Tahun</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status </th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($mobil as $car) : ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <!-- <img src="<?= base_url(); ?>/assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1"> -->
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?= $car['mobil_merk']; ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= $car['mobil_warna']; ?></p>
                                        </td>
                                        <td class="align-middle text-center text-lg">
                                            <span class="<?= ($car['mobil_tahun'] <= 2021) ? "text-danger" : "text-success" ?> text-secondary text-xs font-weight-bold"><?= $car['mobil_tahun']; ?>
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class=" <?= ($car['mobil_status'] < 1) ? "badge badge-sm bg-gradient-danger" : "badge badge-sm bg-gradient-success"; ?>">
                                                <?= ($car['mobil_status'] < 1) ? "Need Service" : "Active"; ?>
                                            </span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="<?= base_url(); ?>/Mobil/vwupdate/<?= $car['id_mobil']; ?>" class="text-light bg-gradient-info badge badge-sm font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                            <a href="<?= base_url(); ?>/Mobil/del/<?= $car['id_mobil']; ?>" class="text-light fas fa-trash bg-gradient-danger badge badge-sm font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div id='datamember' class="col-md-12 my-5 row d-flex justify-content-between">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Data Member</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <!-- <a class="mx-4 text-light btn btn-info" href="<?= base_url(); ?>/Profile/vwadd"> -->
                            <!-- <i class="fas fa-plus"></i> -->
                            </a>
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Member Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gender</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mobile Number </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID Card KTP </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Of Birth </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status </th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kostumer as $cst) : ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?= $cst['kostumer_nama']; ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= $cst['kostumer_alamat']; ?></p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class=""><?= $cst['kostumer_jk']; ?></span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold"><?= $cst['kostumer_hp']; ?></span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold"><?= $cst['kostumer_ktp']; ?></span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold"><?= $cst['date_birth']; ?></span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="<?= ($cst['is_active'] === '1') ? "badge badge-sm bg-gradient-success" : "badge badge-sm bg-gradient-danger"; ?> "><?= ($cst['is_active'] === '1') ? "Active" : "Disable"; ?></span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="<?= base_url(); ?>/Profile/vwupdate/<?= $cst['id_kostumer']; ?>" class="text-light bg-gradient-info badge badge-sm font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                            <a href="<?= base_url(); ?>/Profile/del/<?= $cst['id_kostumer']; ?>" class="text-light fas fa-trash bg-gradient-danger badge badge-sm font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            </a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {});
</script>