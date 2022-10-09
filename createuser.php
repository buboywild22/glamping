<?php
include 'includes/partials/head.inc.php';
require __DIR__ . '/database/users.php';
require __DIR__ . '/database/department.php';
$departments = getDept();
$user = [
    'id' => '',
    'name' => '',
    'username' => '',
    'email' => '',
    'phone' => '',
    'website' => '',
    'deptName'=> '',
];

$errors = [
    'name' => "",
    'username' => "",
    'email' => "",
    'phone' => "",
    'website' => "",
];
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = createUser($_POST);

        uploadImage($_FILES['picture'], $user);

        header("Location: index.php");
    }
}

?>

<?php 
include "includes/partials/formuser.inc.php";
include "includes/partials/footer.inc.php";
?>