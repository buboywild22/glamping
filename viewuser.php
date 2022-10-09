<?php
include 'includes/partials/head.inc.php';
require __DIR__ . '/database/users.php';

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
            <h3>View User: <b><?php echo $user['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="updateuser.php?id=<?php echo $user['id'] ?>">Update</a>
            <form style="display: inline-block" method="POST" action="deleteuser.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        <table class="table">
            <tbody>
            <tr>
                
                <?php if (isset($user['extension'])): ?>
                    <img style="width: 300px" src="<?php echo "database/userimages/${user['id']}.${user['extension']}" ?>" alt="pic of user">
                <?php endif; ?>
            </tr>
            <tr>
                <th>ID:</th>
                <td><?php echo $user['id'] ?></td>
            </tr>
            <tr>
                <th>Name:</th>
                <td><?php echo $user['name'] ?></td>
            </tr>
            <tr>
                <th>Username:</th>
                <td><?php echo  $user['username'] ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php echo $user['email'] ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?php echo $user['phone'] ?></td>
            </tr>
            <tr>
                <th>Website</th>
                <td><?php echo $user['website'] ?></td>
            </tr>
           
            </tbody>
        </table>
    </div>
</div>


<?php include 'includes/partials/footer.inc.php' ?>