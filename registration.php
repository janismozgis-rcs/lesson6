<?php
include 'db.php';

$email = $_POST['email'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$password = $_POST['password'];

$erros = [];

// check if required fields are filled
if (!$email) {
    $erros[] = 'Email address is no provided';
}
if (!$firstName) {
    $erros[] = 'First name address is no provided';
}
if (!$lastName) {
    $erros[] = 'Last name address is no provided';
}
if (!$password) {
    $erros[] = 'Password address is no provided';
}

// check if email is not taken
$query = "SELECT id FROM users WHERE email = ?";
$sql = $db->prepare($query);
$sql->bind_param('s', $email);
$sql->execute();
$sql->bind_result($id);
$sql->fetch();

if ($id) {
    $erros[] = 'Email is already in use';
}

if (count($erros) > 0) {
    // form is not valid
    header('Location: /lesson6/?page=register&errors=true');
} else {
    // register the user
    $sqlInsert = $db->prepare("INSERT INTO users SET email = ?, first_name = ?, last_name = ?, password = ?");
    $sqlInsert->bind_param('ssss', $email, $firstName, $lastName, $encryptedPassword);
    $encryptedPassword = md5($password);
    $sqlInsert->execute();

    header('Location: /lesson6/?page=login');

}