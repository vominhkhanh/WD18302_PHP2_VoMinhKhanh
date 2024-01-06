<?php 
//controller
include('model.php');

$list_of_courses = get_coures();
$block = (!empty($_GET['block']))?$_GET['block']:'';
$courses_name = find_by_block($block);

include('view.php');
?>