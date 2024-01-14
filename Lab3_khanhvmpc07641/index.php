<?php

require_once "vendor/autoload.php";

use App\Core\Field;
use App\Core\Form;

$form = new Form;
$firstname= new Field('firstname');
$lastname = new Field('lastname');
$email = new Field('email');
$password = new Field('password');
$confirmPassword = new Field('confirmpassword');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Create Account</h1>
        <?php Form::begin('', 'post'); ?>
        <div class="row">
            <div class="col">
                <?php echo $form->field('firstname'); ?>
            </div>
            <div class="col">
                <?php echo $form->field('lastname'); ?>
            </div>
        </div>
        <?php echo $form->field('email'); ?>
        <?php echo $form->field('password')->passwordField(); ?>
        <?php echo $form->field('confirmpassword')->passwordField(); ?>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo Form::end(); ?>
    </div>
</body>
</html>
