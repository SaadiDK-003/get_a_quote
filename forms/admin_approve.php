<?php
require_once '../core/database.php';
if (!is_loggedin()) {
?><script>
        window.location.href = "../login.php";
    </script><?php
            }
            include_once '../includes/header.php';
            include_once '../includes/aside.php';
                ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Admin Approval</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Admin Approval</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

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
                                            <?php if($row->status == 'pending') { ?>
                                                btn-warning
                                            <?php } else if($row->status == 'approve' || $row->status == 'active') {?>
                                                btn-success
                                            <?php } ?>
                                            "><?= $row->status ?></span></td>
                                            <td><a data-id="<?= $row->pID ?>" class="btn btn-success btn-sm btn-approve">Approve</a> | <a data-id="<?= $row->pID ?>" class="btn btn-sm btn-warning btn-rej">Rejected</a> | <a data-id="<?= $row->pID ?>" class="btn btn-sm btn-danger btn-delete">Remove</a></td>
                                        </tr>
                                    <?php } ?>
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
</div>
<!-- /.content-wrapper -->

<?php include_once '../includes/footer.php'; ?>
<script>
    $(document).ready(function() {

        $('.btn-approve').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            $.ajax({
                url: 'ajax/requests.php',
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

        $('.btn-delete').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            $.ajax({
                url: 'ajax/requests.php',
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