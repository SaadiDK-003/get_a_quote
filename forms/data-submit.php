<?php
require_once '../core/database.php';
// pet sitter

if(isset($_POST['p'])) {
    
    $petName = $_POST['pet_name'];
    $charges = $_POST['charges'];
    $services = $_POST['services_offer'];

    $sql = $db->query("INSERT INTO `pet_sitter` (pet_name,charges,services_offer,sitter_id) VALUES('$petName','$charges','$services','$id')");
    if($sql){
        echo 'Submitted Successfully.';
    }
}

?>