<?php 
include ('../Model/model.php');

$email = isset($_POST['email']) ? $_POST['email'] : '';
$user = get_user($email);

include ('../View/view.php');

?>