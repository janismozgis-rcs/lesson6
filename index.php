<?php
include 'db.php';

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