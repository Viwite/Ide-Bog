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
<?php include "includes/navigation.php"; ?>

<div class="container-fluid" style="background: #f2e1be">

    <div class="boger">
        <div class="filter p-5">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <input type="search" class="form-control nameSearch" placeholder="Søg og du skal finde">
                </div>
            </div>
        </div>

    </div>
</div>


    <?php
    foreach ($boger as $bog){
        ?>
        <div class="container-fluid h-auto " style="background: #f2e1be; padding-bottom: 80px;">
            <div class="card col-12 mx-auto mb-3 w-75 border-dark shadow-lg" style="text-align: left; max-width: 100%;">
                <div class="row g-0" style="background: #f2e1be">
                    <div class="col-md-4 cover">

                        <img class="w-75 align-self-auto" src="uploads/harry%20potter%20and%20the%20order%20og%20the%20phoenix.jpg" alt="billed">

                    </div>
                    <div class="col-md-8">
                        <div class="card-body" >
                            <h5 class="card-title">
                                <?php
                                echo $bog->prodNavn
                                ?>
                            </h5>
                            <p class="class-text">
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
        </div>
        <?php
    }
    ?>
<?php include "includes/footer.php"; ?>

    <script src="node_modules/bootstrap/dist/js//bootstrap.bundle.min.js"></script>
</body>
</html>





