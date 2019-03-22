<?php
include 'db.php';
echo '<pre>';
var_dump($_SERVER);
die;
include 'parts/header.php';

if (isset($_GET['page']) && $_GET['page'] == 'articles') {
    include 'parts/articles.php';
} elseif (isset($_GET['page']) && $_GET['page'] == 'register') {
    include 'parts/register.php';
} elseif (isset($_GET['page']) && $_GET['page'] == 'login') {
    include 'parts/login.php';
} else {
    include 'parts/content.php';
}

include 'parts/footer.php';