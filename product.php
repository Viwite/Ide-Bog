<?php
require "settings/init.php";

$boger = $db->sql("SELECT * FROM boger WHERE prodNavn = 'Harry Potter and the Order of the Phoenix'");
?>

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
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Ide&Bog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <br>

<div class="container-fluid">

    <div class="boger">
        <div class="filter p-5">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <input type="search" class="form-control nameSearch" placeholder="Søg og du skal finde">
                </div>
            </div>
        </div>

</div>

    <br>

    <?php
    foreach ($boger as $bog){
        ?>
        <div class="card mx-auto mb-3" style="text-align: left; max-width: 90%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <?php
                    echo $bog->prodBillede
                    ?>
                </div>
                <div class="col-md-8">
                    <div class="card-body ">
                        <h5 class="card-title">
                            <?php
                            echo $bog->prodNavn
                            ?>
                        </h5>
                        <p class="class-header">
                            <?php
                            echo $bog->prodBeskrivelse
                            ?>
                        </p>
                        <p class="hashtags">
                            <?php
                            echo $bog->prodTags
                            ?>
                        </p>
                        <p class="class-header">
                            <?php
                            echo $bog->prodForlag
                            ?>
                        </p>
                        <p class="class-header">
                            <?php
                            echo number_format($bog->prodPris, 2, ",", ".");
                            ?>
                        </p>
                        <p class="class-header">
                            <?php
                            echo $bog->prodType
                            ?>
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
<br>
    <footer class="container-fluid bg-light">

        <div class="footer row">
            <div class="col-12 col-lg mb-5">
                <a class="navbar-brand" href="index.php">Ide&Bog</a>
            </div>
            <div class="footer-text col-12 col-lg text-center mt-5 mb-5" style="color: #4a2700">
                <p>Shopping</p>
                <p>Gifts</p>
                <p>Events</p>
                <p>Special Edition</p>
                <p>Creations</p>
                <p>Discovery box</p>
                <p>Mix N' Match</p>
                <p>Boxes</p>
                <p>Birthdays</p>
            </div>
            <div class="footer-text col-12 col-lg text-center mt-5 mb-5" style="color: #4a2700">
                <p>Our Chocolate</p>
                <p>Contact Us</p>
                <p>Returns</p>
                <p>FAQ</p>
                <p>Terms of privacy</p>
                <p>Get help</p>
            </div>
        </div>

    </footer>
    <script src="node_modules/bootstrap/dist/js//bootstrap.bundle.min.js"></script>
</body>
</html>





