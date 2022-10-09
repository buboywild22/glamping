<?php include "classes/itemRecord.class.php"?>
<?php include "classes/sellerRecord.class.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style><?php include 'public/css/style.css'?></style>
    <title>Document</title>
</head>
<body>
    <?php include "includes/partials/navBar.include.php" ?>
    <div class="bg-dark d-flex flex-column p-3">
        <div class="BOOT justify-content-evenly text-center p-lg-4 d-lg-flex d-lg-row w-100">
            <?php include "includes/addItemRecord.inc.php";
            ?></div>
        <div class="BOOT justify-content-evenly text-center p-lg-4 d-lg-flex d-lg-row w-100">
            <?php include "includes/addItemRecord2.inc.php";
            ?></div>
        <div class="BOOT justify-content-evenly text-center p-lg-4 d-lg-flex d-lg-row w-100">
            <?php include "includes/addItemRecord3.inc.php";
            ?></div>
        <div class="BOOT justify-content-evenly text-center p-lg-4 d-lg-flex d-lg-row w-100">
            <?php include "includes/addItemRecord4.inc.php";
            ?></div>
        <div class="BOOT justify-content-evenly text-center p-lg-4 d-lg-flex d-lg-row w-100">
            <?php include "includes/addItemRecord5.inc.php";
            ?></div>
      
    </div>
    <?php include "includes/partials/footer.include.php";
    ?>
    
</body>
</html>