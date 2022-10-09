<?php
include 'includes/partials/head.inc.php';
require __DIR__ . '/database/users.php';


if (!isset($_POST['id'])) {
    include "includes/partials/not_found.php";
    exit;
}
$userId = $_POST['id'];
deleteUser($userId);

header("Location: allusers.php");
