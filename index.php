<?php
require_once 'core/database.php';
if (!is_loggedin()) {
?><script>
        window.location.href = "login.php";
    </script><?php
            }
            include_once 'includes/header.php';
            include_once 'includes/aside.php';
                ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php if ($data->role == 'admin') { ?>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Admin | Pet Sitter Approval</h3>
                                <h3 class="card-title position-absolute text-success h3 msg-table" style="left:50%;transform:translateX(-50%)"></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>Sitter Name</th>
                                            <th>Pet Name</th>
                                            <th>Services Offer</th>
                                            <th>Charges per Day</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $getData = $db->query("CALL `pet_sitter_list_admin`()");
                                        while ($row = mysqli_fetch_object($getData)) {
                                        ?>
                                            <tr>
                                                <td><?= $row->sitterName ?></td>
                                                <td><?= $row->petName ?></td>
                                                <td><?= $row->services ?></td>
                                                <td><?= $row->charges ?></td>
                                                <td><span class="btn 
                                            <?php if ($row->status == 'pending') { ?>
                                                btn-warning
                                            <?php } else if ($row->status == 'approve' || $row->status == 'active') { ?>
                                                btn-success
                                            <?php } ?>
                                            "><?= $row->status ?></span></td>
                                                <?php if ($row->status != 'active' && $row->status != 'approve') : ?>
                                                    <td><a data-id="<?= $row->pID ?>" class="btn btn-success btn-sm btn-approve">Approve</a> <!--| 
                                                    <a data-id="< ?= $row->pID ?>" class="btn btn-sm btn-warning btn-rej">Rejected</a> -->
                                                        |
                                                        <a data-id="<?= $row->pID ?>" class="btn btn-sm btn-danger btn-delete">Remove</a>
                                                    </td>
                                                <?php else : ?>
                                                    <td>-</td>
                                                <?php endif; ?>
                                            </tr>
                                        <?php }
                                        $getData->close();
                                        $db->next_result();
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sitter Name</th>
                                            <th>Pet Name</th>
                                            <th>Services Offer</th>
                                            <th>Charges per Day</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Admin | Active Services</h3>
                                <h3 class="card-title position-absolute text-success h3 msg-table" style="left:50%;transform:translateX(-50%)"></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example3" class="table table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>Service Holder</th>
                                            <th>Pet Name</th>
                                            <th>Services Offer</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Charges per Day</th>
                                            <th>Total Charges</th>
                                            <th>Pet Sitter</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $getData = $db->query("CALL `owners_list_admin`()");
                                        while ($row = mysqli_fetch_object($getData)) {
                                        ?>
                                            <tr>
                                                <td><?= $row->ownerName ?></td>
                                                <td><?= $row->petName ?></td>
                                                <td><?= $row->services ?></td>
                                                <td><?= (empty($row->startDate)) ? '-' : $row->startDate ?></td>
                                                <td><?= (empty($row->endDate)) ? '-' : $row->endDate ?></td>
                                                <td>$<?= $row->charges ?></td>
                                                <td>

                                                    <?php if (!empty($row->startDate)) : ?>
                                                        <span class="font-weight-bold">For <?= $row->days ?> days:</span> $<?= ($row->days * $row->charges) ?>
                                                    <?php else : ?>
                                                        $0
                                                    <?php endif; ?>

                                                </td>
                                                <td><a href="#!" data-sid="<?= $row->sitterID ?>" class="btn btn-sm btn-info btn-sitter-info" data-toggle="modal" data-target="#modal-default">info</a></td>
                                                <td><span class="btn 
                                            <?php if ($row->status == 'pending') { ?>
                                                btn-warning
                                            <?php } else if ($row->status == 'approve' || $row->status == 'active') { ?>
                                                btn-success
                                            <?php } ?>
                                            "><?= $row->status ?></span></td>
                                            </tr>
                                        <?php }
                                        $getData->close();
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Service Holder</th>
                                            <th>Pet Name</th>
                                            <th>Services Offer</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Charges per Day</th>
                                            <th>Total Charges</th>
                                            <th>Pet Sitter</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Pet Sitter Info</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h5 class="name">Name: <span></span></h5>
                        <h5 class="email">Email: <span></span></h5>
                        <h5 class="contact">Contact: <span></span></h5>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

    <?php } ?>


    <?php if ($data->role == 'sitter') { ?>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title msg">
                                    <!-- If you need clarification while filling this form then please email us at <strong class="text-warning">support@octoinsurance.com</strong> or call us at <strong class="text-warning">469-898-8348</strong> -->
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="pet_sitter">
                                <div class="card-body">
                                    <!-- row 1 start -->
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-sm-12">
                                            <label for="firstName">Pet Name <span class="text-danger">*</span></label>
                                            <select name="pet_name" id="pet_name" class="form-control" required>
                                                <option value="" selected hidden>Select Pet</option>
                                                <option value="Cat">Cat</option>
                                                <option value="Dog">Dog</option>
                                                <option value="Mouse">Mouse</option>
                                                <option value="Parrot">Parrot</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6 col-sm-12">
                                            <label for="charges">Charges per Day ($)<span class="text-danger">*</span></label>
                                            <input type="text" name="charges" class="form-control" id="charges" placeholder="Eg. 5,10,20" required>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <label for="services_offer">Services offer <span class="text-danger">*</span></label>
                                            <input type="text" name="services_offer" class="form-control" id="services_offer" placeholder="Eg. Dog Walk, Dog Sitting, Cat Care etc." required>
                                        </div>
                                    </div>
                                    <!-- row 1 end -->
                                </div>
                                <!-- /.card-body -->
                                <input type="hidden" name="p" value="pet_sitter_service">
                                <input type="hidden" name="edit_id" value="">
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">My Services</h3>
                                <h3 class="card-title position-absolute text-danger h3 msg-table" style="left:50%;transform:translateX(-50%)"></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>Service Holder</th>
                                            <th>Pet Name</th>
                                            <th>Services Offer</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Charges per Day</th>
                                            <th>Total Charges</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $getData = $db->query("CALL `pet_sitter_list`($id)");
                                        while ($row = mysqli_fetch_object($getData)) {
                                        ?>
                                            <tr>
                                                <td><?= ($row->oID == 0) ? '-' : $row->u ?></td>
                                                <td><?= $row->petName ?></td>
                                                <td><?= $row->services ?></td>
                                                <td><?= (empty($row->startDate)) ? '-' : $row->startDate ?></td>
                                                <td><?= (empty($row->endDate)) ? '-' : $row->endDate ?></td>
                                                <td>$<?= $row->charges ?></td>
                                                <td>

                                                    <?php if (!empty($row->startDate)) : ?>
                                                        <span class="font-weight-bold">For <?= $row->days ?> days:</span> $<?= ($row->days * $row->charges) ?>
                                                    <?php else : ?>
                                                        $0
                                                    <?php endif; ?>

                                                </td>
                                                <td><span class="<?= ($row->status == 'approve' || $row->status == 'active') ? 'btn btn-success' : 'btn btn-warning' ?>"><?= (empty($row->startDate) && $row->oID != 0) ? 'requested' : $row->status ?></span></td>
                                                <td>
                                                    <?php if ($row->status == 'pending') { ?>
                                                        <a data-id="<?= $row->pID ?>" class="btn btn-info btn-edit">Edit</a> | <a data-id="<?= $row->pID ?>" class="btn btn-danger btn-delete">Remove</a>
                                                    <?php } else { ?>
                                                        -
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Service Holder</th>
                                            <th>Pet Name</th>
                                            <th>Services Offer</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Charges per Day</th>
                                            <th>Total Charges</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    <?php } else if ($data->role == 'owner') { ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">List of Pet Sitters</h3>
                            </div>
                            <!-- /.card-header -->

                            <div class="row text-center p-3">
                                <div class="col-12 mb-3 text-left">
                                    <label for="animal">Select Pet</label>
                                    <select name="select_pet" id="select_pet" class="form-control">
                                        <option value="" selected hidden>Select Pet</option>
                                        <option value="Cat">Cat</option>
                                        <option value="Dog">Dog</option>
                                        <option value="Mouse">Mouse</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row text-center p-3 render_data"></div>

                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Services Accepted</h3>
                                <h3 class="card-title position-absolute text-success h3 msg-table" style="left:50%;transform:translateX(-50%)"></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php

                                check_end_date($db);

                                ?>
                                <table id="example2" class="table table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>Sitter Name</th>
                                            <th>Pet Name</th>
                                            <th>Services Offer</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Charges per Day</th>
                                            <th>Total Charges</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $getData = $db->query("CALL `services_accepted`($id)");
                                        while ($row = mysqli_fetch_object($getData)) {
                                        ?>
                                            <tr>
                                                <td><?= $row->sitterName ?></td>
                                                <td><?= $row->petName ?></td>
                                                <td><?= $row->services ?></td>
                                                <td><?= $row->startDate ?></td>
                                                <td><?= $row->endDate ?></td>
                                                <td>$<?= $row->charges ?></td>
                                                <td><span class="font-weight-bold">For <?= $row->days ?> days:</span> $<?= ($row->days * $row->charges) ?></td>
                                                <td><span class="btn <?= ($row->status == 'active') ? 'btn-success' : 'btn-danger' ?>"><?= $row->status ?></span></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sitter Name</th>
                                            <th>Pet Name</th>
                                            <th>Services Offer</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Charges per Day</th>
                                            <th>Total Charges</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->

    <?php } ?>


</div>
<!-- /.content-wrapper -->

<?php include_once './includes/footer.php'; ?>
<script>
    $(document).ready(function() {

        $('#select_pet').on('change', function(e) {
            let pName = $(this).val();
            $.ajax({
                url: 'forms/ajax/requests.php',
                method: 'post',
                data: {
                    pName: pName
                },
                success: function(res) {
                    $('.render_data').html(res);
                }
            })
        });


        $('#pet_sitter').on('submit', function(e) {
            e.preventDefault();
            let data = $(this).serialize();
            $.ajax({
                url: 'forms/data-submit.php',
                method: 'post',
                data: data,
                success: function(res) {
                    $('.msg').html(res);
                    setTimeout(function() {
                        location.reload()
                    }, 1800);
                }
            })
        });

        $('.btn-approve').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            $.ajax({
                url: 'forms/ajax/requests.php',
                method: 'post',
                data: {
                    approve_sitter: id
                },
                success: function(res) {
                    $('.msg-table').html(res);
                    setTimeout(function() {
                        location.reload()
                    }, 1800);
                }
            });
        });

        $('.btn-edit').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            $.ajax({
                url: 'forms/ajax/requests.php',
                method: 'post',
                data: {
                    edit_sitter_info: id
                },
                success: function(res) {
                    let data = JSON.parse(res);
                    $(`select[name="pet_name"] option[value=${data.pet_name}]`).attr('selected', true);
                    $('input[name="charges"]').val(data.charges);
                    $('input[name="services_offer"]').val(data.services_offer);
                    $('input[name="edit_id"]').val(data.id);
                    console.log(data);
                }
            });
        });

        $('.btn-sitter-info').on('click', function(e) {
            e.preventDefault();
            let getSitterInfo = $(this).data('sid');
            $.ajax({
                url: 'forms/ajax/requests.php',
                method: 'post',
                data: {
                    getSitterInfo: getSitterInfo
                },
                success: function(response) {
                    let res = JSON.parse(response);
                    $('.modal-body h5.name span').html(res.username);
                    $('.modal-body h5.email span').html(res.email);
                    $('.modal-body h5.contact span').html(res.contact);
                }
            })
        });

        $('.btn-delete').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            $.ajax({
                url: 'forms/ajax/requests.php',
                method: 'post',
                data: {
                    delete_sitter: id
                },
                success: function(res) {
                    $('.msg-table').html(res);
                    setTimeout(function() {
                        location.reload()
                    }, 1800);
                }
            });
        });

    });
</script>