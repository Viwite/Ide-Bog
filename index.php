<!DOCTYPE html>

<html lang="da">

<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/b2cd0c4e29.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php
require "settings/init.php";

$boger = $db->sql("SELECT * FROM boger");

foreach ($boger as $bog){
    ?>
    <div class="col-3">
        <?php echo $bog->prodName; ?>
        <?php echo $bog->prodDato; ?>
        <?php echo $bog->prodForfatter; ?>

    </div>


<?php
}
?>

<script src="node_modules/bootstrap/dist/js//bootstrap.bundle.min.js"></script>
</body>
</html>
