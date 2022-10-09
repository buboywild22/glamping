<?php
include 'includes/partials/head.inc.php';
require __DIR__ . '/database/products.php';

$user = [
    'id' => '',
    'prodName' => '',
    'price' => '',
    'discount' => '',
    'sold' => '',
];

$errors = [
    'prodName' => "",
    'price' => "",
    'discount' => "",
    'sold' => ""
];
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = createUser($_POST);
        uploadImage($_FILES['picture'], $user);
        header("Location: allItems.php");
    }
}

?>

<?php 
include "includes/partials/form.inc.php";
include "includes/partials/footer.inc.php";
?>