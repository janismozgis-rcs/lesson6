<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .active {
            color: red;
        }
    </style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<a href="/lesson6" class="asdasd<?= !isset($_GET['page']) ? ' active' : ''; ?>">Index</a>
<a href="/lesson6?page=articles" class="asdasd<?= $_GET['page'] == 'articles' ? ' active' : ''; ?>">Articles</a>

<?php if (isset($_SESSION['user_id'])) { ?>
    <a href="/lesson6/logout.php">Logout</a>
<?php } else { ?>
    <a href="/lesson6?page=register" class="asdasd<?= $_GET['page'] == 'register' ? ' active' : ''; ?>">Register</a>
    <a href="/lesson6?page=login" class="asdasd<?= $_GET['page'] == 'login' ? ' active' : ''; ?>">Login</a>
<?php } ?>

<h3>Main menu goes in here</h3>
