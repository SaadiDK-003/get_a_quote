<?php
require_once '../../core/database.php';
if(isset($_POST['pID'])){
    
    $pid = $_POST['pID'];
    $days = $_POST['days'];
    $sql = $db->query("UPDATE `pet_sitter` SET `owner_id`='$id', `days`='$days' WHERE `id`='$pid'");

    if($sql) {
        echo 'updated';
    }

}

if(isset($_POST['pName'])) {
    $pName = $_POST['pName'];
?>
<?php
$sitter_data = $db->query("CALL `list_pet_sitters`('$pName')");
while ($info = mysqli_fetch_object($sitter_data)) :
?>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
        <div class="content border p-2 position-relative">
            <div class="logo">
                <img src="https://picsum.photos/20<?=$info->id?>" class="rounded-circle w-25" alt="img">
            </div>
            <div class="info">
                <h4><strong>Name: </strong><?= $info->sitterName ?></h4>
                <h5><strong>Charges: </strong>$<?= $info->charges ?></h5>
            </div>
            <?php if ($info->ownerId != $id && $info->status == 'approve') { ?>
                <a href="#!" data-id="<?= $info->id ?>" class="btn btn-info btn-md btn-sitter-info">info</a>
                <div class="btns">
                    <div class="days">
                        <span>Days:</span>
                        <div class="qty">
                            <button class="btn btn-xs btn-decr"><i class="fas fa-minus"></i></button>
                            <input type="number" value="1" min="1" class="form-control" name="days" id="days">
                            <button class="btn btn-xs btn-incr"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <a href="#!" data-id="<?= $info->id ?>" class="btn btn-primary btn-md btn-booking">Book</a>
                </div>
            <?php } else if($info->ownerId == $id && $info->status == 'approve') {  ?>
                <a href="#!" data-id="<?= $info->id ?>" class="btn btn-primary btn-md btn-info">info</a>
                <a href="#!" class="btn btn-secondary btn-md">Requested</a>
            <?php } else { ?>
                <a href="#!" data-id="<?= $info->id ?>" class="btn btn-primary btn-md btn-info">info</a>
                <a href="#!" class="btn btn-success btn-md">Accepted</a>
            <?php } ?>
        </div>
    </div>
<?php endwhile; ?>

<script>
    $(document).ready(function(){
        $('.btn-booking').on('click', function(e) {
            let id = $(this).data('id');
            let days = $('.qty input[type="number"]').val();
            $.ajax({
                url: '<?=site_url?>forms/ajax/requests.php',
                method: 'post',
                data: {
                    pID: id,
                    days:days
                },
                success: function(res) {
                    console.log(res);
                    $('.btn-booking').html('Requested').removeClass('btn-primary').addClass('btn-secondary');
                }
            })
        });
        $('.btn-sitter-info').on('click', function(e){
            e.preventDefault();
            let id = $(this).data('id');
            $.ajax({
                url: '<?=site_url?>forms/ajax/requests.php',
                method: 'post',
                data: {
                    get_sitter_info : id
                },
                success: function(res) {
                    console.log(res);
                    // $('.btn-booking').html('Requested').removeClass('btn-primary').addClass('btn-secondary');
                }
            })
        });

        $('.qty').on('click', '.btn-decr', function(e){
            e.preventDefault();
            let val = +$('.qty input[type="number"]').val();
            $('.qty input[type="number"]').val(val-1);
        });
        $('.qty').on('click', '.btn-incr', function(e){
            e.preventDefault();
            let val = +$('.qty input[type="number"]').val();
            $('.qty input[type="number"]').val(val+1);
        });
    });

</script>
<?php

}

if(isset($_POST['delete_sitter'])) {
    $delID = $_POST['delete_sitter'];
    $sql = $db->query("DELETE FROM `pet_sitter` WHERE `id`='$delID'");
    if($sql) {
        echo 'Deleted Successfully!';
    }
}
if(isset($_POST['cancelReq'])) {
    $cancelID = $_POST['cancelReq'];
    $sql = $db->query("UPDATE `pet_sitter` SET `owner_id`='0' WHERE `id`='$cancelID'");
    if($sql) {
        echo 'Updated Successfully!';
    }
}



if(isset($_POST['approve_sitter'])) {
    $approve_sitter = $_POST['approve_sitter'];
    $sql = $db->query("UPDATE `pet_sitter` SET `status`='approve' WHERE `id`='$approve_sitter'");
    if($sql) {
        echo 'Updated Successfully!';
    }
}

if(isset($_POST['acceptReq'])) {
    $acceptReq = $_POST['acceptReq'];
    $days = $_POST['days'];
    $currentDate = date('Y-m-d');
    $endDate = date('Y-m-d', strtotime('+'.$days.' days'));
    $sql = $db->query("UPDATE `pet_sitter` SET `status`='active', `start_date`='$currentDate', `end_date`='$endDate' WHERE `id`='$acceptReq'");
    if($sql) {
        echo 'Updated Successfully!';
    }
}

?>