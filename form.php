<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('method non autorisée');
}

$title = $_POST['fname'];
$date  = cleanInput($_POST['date']);
$email  = cleanInput($_POST['email']);
$message  = cleanInput($_POST['message']);
$title = cleanInput($title);
$errors = [];

function cleanInput(string $value): string
{
    $value = trim($value);
    $value = htmlspecialchars($value);
    return $value;
}

if (empty($title)) {
    $errors['errorTitle'] = 'Ce champ ne doit pas être vide';
}
if (strlen($title) <= 2) {
    $errors['errorTitle'] = 'Le nom doit contenir plus de 2 caractères';
}
if (empty($date)) {
    $errors['errorDate'] = 'Merci de selectionner une date';
}
if (empty($email)) {
    $errors['errorEmail'] = 'Veuillez renseigner votre email';
}
if (empty($message)) {
    $errors['errorMessage'] = 'Merci de compléter votre message';
}

if (count($errors) === 0) {
    header('Location: contact.php?success=true');
} else {
    header('Location: /contact.php?' . http_build_query($errors));
}

