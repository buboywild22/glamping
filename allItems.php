<?php require 'database/products.php';
$users = getUsers();
include 'includes/partials/head.inc.php'
?> 

<?php include "includes/partials/navBar.include.php" ?>

<div class="container">
    <p><a class="btn btn-success" href="create.php">Create new Product</a></p>
    <?php include "includes/partials/table.inc.php" ?>
</div>

<?php include 'includes/partials/footer.inc.php' ?>

