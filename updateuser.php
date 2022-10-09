<?php
include 'includes/partials/head.inc.php';
require __DIR__ . '/database/users.php';
include __DIR__ .'/database/department.php';

$departments = getDept();

if (!isset($_GET['id'])) {
    include "includes/partials/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "includes/partials/not_found.php";
    exit;
}

$errors = [
    'name' => "",
    'username' => "",
    'email' => "",
    'phone' => "",
    'website' => "",
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = updateUser($_POST, $userId);
        uploadImage($_FILES['picture'], $user);
        header("Location: allusers.php");
    }
}

?>

<?php 
include 'includes/partials/formuser.inc.php'; 
include 'includes/partials/footer.inc.php';
?>