<?php
require_once 'core/database.php';
if(!is_loggedin()){
    ?><script>window.location.href = "login.php";</script><?php
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

  <?php if($data->role == 'sitter') { ?>
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
                                        <th>Pet Name</th>
                                        <th>Charges per Day</th>
                                        <th>Services Offer</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $getData = $db->query("CALL `pet_sitter_list`($id)");
                                while($row = mysqli_fetch_object($getData)){
                                ?>
                                    <tr>
                                        <td><?=$row->petName?></td>
                                        <td><?=$row->charges?></td>
                                        <td><?=$row->services?></td>
                                        <td><span class="<?= ($row->status == 'approve' || $row->status == 'active') ? 'btn btn-success' : 'btn btn-warning' ?>"><?=$row->status?></span></td>
                                        <td>
                                            <?php if($row->status == 'pending') { ?>
                                                <a data-id="<?=$row->pID?>" class="btn btn-danger btn-delete">Remove</a>
                                            <?php } else{ ?>
                                            -
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Pet Name</th>
                                        <th>Charges per Day</th>
                                        <th>Services Offer</th>
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
  <?php } else if($data->role == 'owner') { ?>
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
                    pName:pName 
                },
                success: function(res) {
                    $('.render_data').html(res);
                }
            })
        });
    });
</script>