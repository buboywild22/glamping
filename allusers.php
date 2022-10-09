<?php require 'database/users.php';

$users = getUsers();
include 'includes/partials/head.inc.php'
?> 

<?php include "includes/partials/navBar.include.php" ?>

<div class="container">
    <p><a class="btn btn-success" href="createuser.php">Create new User</a></p>
    <?php include "includes/partials/tableusers.inc.php" ?>
</div>

<?php include 'includes/partials/footer.inc.php' ?>

