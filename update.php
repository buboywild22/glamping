<?php
include 'includes/partials/head.inc.php';
require __DIR__ . '/database/products.php';

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
    'prodName' => "",
    'price' => "",
    'discount' => "",
    'sold' => "",
    'prodImage' => "",
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = updateUser($_POST, $userId);
        uploadImage($_FILES['picture'], $user);
        header("Location: allItems.php");
    }
}

?>

<?php 
include 'includes/partials/form.inc.php'; 
include 'includes/partials/footer.inc.php';
?>