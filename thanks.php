<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

<?php
$user_name      = $_POST['user_name'];
$user_email     = $_POST['email'];
$first_name     = $_POST['first_name'];
$select         = $_POST ['select'];
$user_message   = $_POST ['user_message'];


$errors = [];

if (empty($user_name)) {
    $errors['user_name'] = 'Entre ton nom';
    echo $errors ['user_name'] . '<br>';
}
if (empty($first_name)) {
    $errors['first_name'] = 'Entre ton prénom';
    echo $errors ['first_name'] . '<br>';
}
if (empty($select)) {
    $errors['select'] = 'Type de la demande';
    echo $errors ['select'] . '<br>';
}
if (empty($user_message)) {
    $errors['user_message'] = 'Inscris ton message';
    echo $errors ['user_message'] . '<br>';
}
if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Invalid email format';
    echo $errors ['email'] . '<br>';
}
if (count($errors) === 0){
    echo  "Merci " . $_POST['first_name'] . " " . $_POST['user_name'] . " de nous avoir contacté à propos de " .  $_POST['select'] .
        ". Un de nos conseiller vous contactera soit à l’adresse " . $_POST['email'] . " ou par téléphone au " . $_POST['phone_number'] . " dans les plus brefs délais pour traiter votre demande : " . $_POST['user_message'] ;
}

?>


</body>
</html>