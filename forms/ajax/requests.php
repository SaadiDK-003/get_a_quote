<?php
require_once '../../core/database.php';
if(isset($_POST['pID'])){
    
    $pid = $_POST['pID'];
    $sql = $db->query("UPDATE `pet_sitter` SET `owner_id`='$id' WHERE `id`='$pid'");

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
        <div class="content border p-2">
            <div class="logo">
                <img src="https://picsum.photos/200" class="rounded-circle w-25" alt="img">
            </div>
            <div class="info">
                <h3><?= $info->sitterName ?></h3>
                <p>$<?= $info->charges ?></p>
            </div>
            <?php if ($info->ownerId != $id && $info->status == 'approve') { ?>
                <a href="#!" data-id="<?= $info->id ?>" class="btn btn-primary btn-md btn-info">info</a>
                <a href="#!" data-id="<?= $info->id ?>" class="btn btn-primary btn-md btn-booking">Book</a>
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
    $('.btn-booking').on('click', function(e) {
            let id = $(this).data('id');
            $.ajax({
                url: '<?=site_url?>forms/ajax/requests.php',
                method: 'post',
                data: {
                    pID: id
                },
                success: function(res) {
                    console.log(res);
                    $('.btn-booking').html('Requested').removeClass('btn-primary').addClass('btn-secondary');
                }
            })
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
    $sql = $db->query("UPDATE `pet_sitter` SET `status`='active' WHERE `id`='$acceptReq'");
    if($sql) {
        echo 'Updated Successfully!';
    }
}

?>