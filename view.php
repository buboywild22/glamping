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

?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View Product: <b><?php echo $user['prodName'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?id=<?php echo $user['id'] ?>">Update</a>
            <form style="display: inline-block" method="POST" action="delete.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        <table class="table">
            <tbody>
            <tr>
                
                <?php if (isset($user['extension'])): ?>
                    <img style="width: 600px" src="<?php echo "database/images/${user['id']}.${user['extension']}" ?>" alt="pic of user">
                <?php endif; ?>
            </tr>
            <tr>
                <th>Product Name:</th>
                <td><?php echo $user['prodName'] ?></td>
            </tr>
            <tr>
                <th>Price:</th>
                <td><?php echo  $user['price'] ?></td>
            </tr>
            <tr>
                <th>Discount:</th>
                <td><?php echo $user['discount'] ?></td>
            </tr>
            <tr>
                <th>Items Sold</th>
                <td><?php echo $user['sold'] ?></td>
            </tr>
           
            </tbody>
        </table>
    </div>
</div>


<?php include 'includes/partials/footer.inc.php' ?>