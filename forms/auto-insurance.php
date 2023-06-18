<?php
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
                    <h1>Auto Insurance Quote Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Auto Insurance Quote Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">If you need clarification while filling this form then please email us at <strong class="text-warning">support@octoinsurance.com</strong> or call us at <strong class="text-warning">469-898-8348</strong></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <!-- row 1 start -->
                                <div class="row">
                                    <div class="form-group col-lg-4 col-sm-12">
                                        <label for="firstName">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="firstName" placeholder="Peter" required>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-12">
                                        <label for="lastName">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="lastName" placeholder="White" required>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-12">
                                        <label for="middleName">Middle Name (optional) <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="middleName" placeholder="Jone">
                                    </div>
                                </div>
                                <!-- row 1 end -->
                                <!-- row 2 start -->
                                <div class="row">
                                    <div class="form-group col-lg-4 col-md-12">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" placeholder="peter@gmail.com" required>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-12">
                                        <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="phone" placeholder="+1 (824) 143-4105" required>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-12">
                                        <label for="dateOfBirth">Date Of Birth <span class="text-danger">*</span></label>
                                        <input type="text" name="dateOfBirth" class="form-control" id="dateOfBirth">
                                    </div>
                                </div>
                                <!-- row 2 end -->
                                <!-- row 3 start -->
                                <div class="row">
                                    <div class="form-group col-lg-4 col-md-12">
                                        <label for="drivingLicenseNumber">Driving License Number (DL) <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="drivingLicenseNumber" placeholder="Enter Your Driving License Number" required>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-12">
                                        <label for="drivingLicenseState">Driving License State <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="drivingLicenseState" placeholder="Enter Your Driving License State" required>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-12">
                                        <label for="drivingLicenseExpirationDate">Driving License Expiration Date <span class="text-danger">*</span></label>
                                        <input type="text" name="drivingLicenseExpirationDate" class="form-control" id="drivingLicenseExpirationDate">
                                    </div>
                                </div>
                                <!-- row 3 end -->
                                <!-- row 4 start -->
                                <div class="row">
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label for="address1">Address</label>
                                        <input type="text" class="form-control" id="address1" placeholder="Enter Your Address">
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12">
                                        <input type="address2" class="form-control" id="address2" placeholder="">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-12">
                                        <label for="city">City</label>
                                        <input type="text" name="city" class="form-control" id="city">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-12">
                                        <label for="state">State/Province</label>
                                        <select name="state" id="state" class="form-control">
                                            <option value="" selected hidden>Select State</option>
                                            <option value="Alabama">
                                                Alabama </option>
                                            <option value="Alaska">
                                                Alaska </option>
                                            <option value="Arkansas">
                                                Arkansas </option>
                                            <option value="Arizona">
                                                Arizona </option>
                                            <option value="California">
                                                California </option>
                                            <option value="Colorado">
                                                Colorado </option>
                                            <option value="Connecticut">
                                                Connecticut </option>
                                            <option value="Delaware">
                                                Delaware </option>
                                            <option value="District of Columbia">
                                                District of Columbia </option>
                                            <option value="Florida">
                                                Florida </option>
                                            <option value="Georgia">
                                                Georgia </option>
                                            <option value="Hawaii">
                                                Hawaii </option>
                                            <option value="Idaho">
                                                Idaho </option>
                                            <option value="Illinois">
                                                Illinois </option>
                                            <option value="Indiana">
                                                Indiana </option>
                                            <option value="Iowa">
                                                Iowa </option>
                                            <option value="Kansas">
                                                Kansas </option>
                                            <option value="Kentucky">
                                                Kentucky </option>
                                            <option value="Louisiana">
                                                Louisiana </option>
                                            <option value="Maine">
                                                Maine </option>
                                            <option value="Maryland">
                                                Maryland </option>
                                            <option value="Massachusetts">
                                                Massachusetts </option>
                                            <option value="Michigan">
                                                Michigan </option>
                                            <option value="Minnesota">
                                                Minnesota </option>
                                            <option value="Mississippi">
                                                Mississippi </option>
                                            <option value="Missouri">
                                                Missouri </option>
                                            <option value="Montana">
                                                Montana </option>
                                            <option value="Nebraska">
                                                Nebraska </option>
                                            <option value="Nevada">
                                                Nevada </option>
                                            <option value="New Hampshire">
                                                New Hampshire </option>
                                            <option value="New Jersey">
                                                New Jersey </option>
                                            <option value="New Mexico">
                                                New Mexico </option>
                                            <option value="New York">
                                                New York </option>
                                            <option value="North Carolina">
                                                North Carolina </option>
                                            <option value="North Dakota">
                                                North Dakota </option>
                                            <option value="Ohio">
                                                Ohio </option>
                                            <option value="Oklahoma">
                                                Oklahoma </option>
                                            <option value="Oregon">
                                                Oregon </option>
                                            <option value="Pennsylvania">
                                                Pennsylvania </option>
                                            <option value="Rhode Island">
                                                Rhode Island </option>
                                            <option value="South Carolina">
                                                South Carolina </option>
                                            <option value="South Dakota">
                                                South Dakota </option>
                                            <option value="Tennessee">
                                                Tennessee </option>
                                            <option value="Texas">
                                                Texas </option>
                                            <option value="Utah">
                                                Utah </option>
                                            <option value="Vermont">
                                                Vermont </option>
                                            <option value="Virginia">
                                                Virginia </option>
                                            <option value="Washington">
                                                Washington </option>
                                            <option value="West Virginia">
                                                West Virginia </option>
                                            <option value="Wisconsin">
                                                Wisconsin </option>
                                            <option value="Wyoming">
                                                Wyoming </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-12">
                                        <label for="zip">Zip/Postal</label>
                                        <input type="text" name="zip" class="form-control" id="zip">
                                    </div>
                                </div>
                                <!-- row 4 end -->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="isMarried">
                                    <label class="form-check-label" for="isMarried">Are you married?</label> <span class="married-status text-bold">| No</span>
                                </div>
                                <!-- row 5 start -->
                                <div class="row married mt-2 d-none">
                                    <div class="form-group col-lg-4 col-md-12">
                                        <label for="spouseName">Spouse Information <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="spouseName" placeholder="Enter Your Spouse Name" required>
                                    </div>
                                </div>
                                <!-- row 5 end -->
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
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
</div>
<!-- /.content-wrapper -->

<?php include_once '../includes/footer.php'; ?>
<script>
    $(document).ready(function() {
        $('input[name="dateOfBirth"]').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "minYear": 1933,
            "maxYear": 2007,
            "startDate": "06/12/2007"
        }, function(start, end, label) {
            console.log(moment().diff(start, 'days'));
            var years = moment().diff(start, 'years');
            console.log("You are " + years + " years old!");
        });
        $('input[name="drivingLicenseExpirationDate"]').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "minYear": 2013,
            "maxYear": 2033
        }, function(start, end, label) {});

        $('input[id="isMarried"]').on('change', function() {
            if ($(this).is(':checked')) {
                $('.married').removeClass('d-none');
                $('.married-status').text('| Yes');
            } else {
                $('.married').addClass('d-none');
                $('.married-status').text('| No');
            }
        });
    });
</script>