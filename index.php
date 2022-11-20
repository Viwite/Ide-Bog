<!DOCTYPE html>

<html lang="da">

<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.scss" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/b2cd0c4e29.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include "includes/navigation.php"; ?>

<div class="container-fluid" style="background: #ded9d1;">

    <div class="boger">
        <div class="filter p-5">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <input type="search" class="form-control nameSearch" placeholder="Søg og du skal finde">
                </div>
            </div>
        </div>

        <div class="items">
            <!--Produkterne-->
        </div>
    </div>

</div>

<?php include "includes/footer.php"; ?>



<?php
require "settings/init.php";

$boger = $db->sql("SELECT * FROM boger");


?>
<?php
?>


<script src="node_modules/bootstrap/dist/js//bootstrap.bundle.min.js"></script>
<script type="module">
    import Boger from "./js/boger.js";

    const boger = new Boger();
    boger.init();
</script>
</body>
</html>
