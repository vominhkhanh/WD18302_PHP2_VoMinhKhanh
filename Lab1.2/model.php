<?php 
function get_coures() {
    include('data.php');
    return array_values($courses);
}
get_coures();
function find_by_block($block){
    include('data.php');
    return array_key_exists($block , $courses)?$courses[$block]:"Invalid Coures";
}
find_by_block("block1");
?>