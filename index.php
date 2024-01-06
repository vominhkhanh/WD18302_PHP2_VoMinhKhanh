<?php 
echo "PC07641 - Lab 1.1 <br>";

$coures = [
    'block1' => 'Lập trình PHP2',
    'block2' => 'Lập trình PHP3',
    'block3' => 'Lập trình PHP4'
];

//Model
function get_coures() {
    global $coures;
    return array_values($coures);
}
var_dump(get_coures());

function find_by_block($block){
    global $coures;
    return array_key_exists($block , $coures)?$coures[$block]:"Invalid Coures";
}
find_by_block("block1");
//controller

$list_of_coures = get_coures();
$block = (!empty($_GET['block']))?$_GET['block']:'';
$coures_name = find_by_block($block);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1_VoMinhKhanh_PC07641</title>
</head>
<body>
    <h1><?= $coures_name ?></h1>
    <form action="">
        <select name="block" id="">
        <?php foreach($coures as $key=>$value):?>
            <option value="<?= $key ?>"> <?= $value ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Tìm Khoá Học</button>
    </form>
</body>
</html>