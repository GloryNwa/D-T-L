
<?php

$_POST['val'];
$_POST['user_id'];
$query = mysqli_query("Update `customers` SET `status` = '".$_POST['val']."' WHERE `id` = '".$_POST['user_id']."'");
if($query){
    $sql = mysqli_query("SELECT * FROM `customers` WHERE `id` ='".$_POST['user_id']."'");
    $data = mysqli_fetch_assoc($query);
    echo $data['status'];
}


?>
