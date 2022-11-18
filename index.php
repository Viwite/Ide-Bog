<!DOCTYPE html>

<html lang="da">

<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.scss" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/b2cd0c4e29.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="container">

        <div class="boger">
            <div class="filter p-5">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <input type="search" class="form-control nameSearch" placeholder="Søg og du skal finde">
                    </div>
                </div>
            </div>
        </div>

        <div class="items">
            <!--Produkterne-->
            <p>hej</p>
        </div>

    </div>

    <?php
    require "settings/init.php";

    $boger = $db->sql("SELECT * FROM boger");

    foreach ($boger as $bog){
        ?>

            <div class="flex-container-1"
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $bog->prodNavn; ?></h5>
                                <p class="card-text"><?php echo $bog->prodBeskrivelse; ?></p>
                                <p class="card-text"><?php echo $bog->prodForfatter; ?></p>
                                <p class="card-text"><?php echo $bog->prodTag; ?></p>
                                <p class="card-text"><?php echo $bog->prodForlag; ?></p>
                                <p class="card-text"><?php echo $bog->prodPris; ?></p>
                                <p class="card-text"><?php echo $bog->prodType; ?></p>
                                <p class="card-text"><small class="text-muted"><?php echo $bog->prodDato; ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }
    ?>




<script src="node_modules/bootstrap/dist/js//bootstrap.bundle.min.js"></script>
<script type="module">
    import Boger from "./js/boger.js";

    const boger = new Boger();
    boger.init();
</script>
</body>
</html>
