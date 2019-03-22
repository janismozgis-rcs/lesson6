<?php
include 'db.php';

// $query = "SELECT count(id) FROM users WHERE email = ?";
// $sql = $db->prepare($query);
// $sql->bind_param('s', $selectEmail);
// $selectEmail = 'janis@peteris.lv';
// $sql->execute();
// $sql->bind_result($id, $email, $first_name, $last_name);

// echo '<pre>';
// while($sql->fetch()) {
//     var_dump($id, $email, $first_name, $last_name);
// }

include 'parts/header.php';

if (isset($_GET['page']) && $_GET['page'] == 'articles') {
    include 'parts/articles.php';
} elseif (isset($_GET['page']) && $_GET['page'] == 'register') {
    include 'parts/register.php';
} else {
    include 'parts/content.php';
}

include 'parts/footer.php';