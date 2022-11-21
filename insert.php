<?php
require "settings/init.php";

if(!empty($_POST["data"])){
    $data = $_POST["data"];
    $file = $_FILES;

    if(!empty($file["prodBillede"]["tmp_name"])){
        move_uploaded_file($file["prodBillede"]["tmp_name"], "uploads/" . basename($file["prodBillede"]["name"]));
    }


    $sql = "INSERT INTO boger (prodNavn, prodBeskrivelse, prodPris, prodBillede, prodForfatter, prodType, prodTag, prodForlag) VALUES(:prodNavn, :prodBeskrivelse, :prodPris, :prodBillede,:prodForfatter, :prodType, :prodTag, :prodForlag)";
    $bind = [
            ":prodNavn" => $data["prodNavn"],
            ":prodBeskrivelse" => $data["prodBeskrivelse"],
            ":prodPris" => $data["prodPris"],
            ":prodBillede" => (!empty($file["prodBillede"]["tmp_name"])) ? $file["prodBillede"]["name"] : NULL,
            ":prodForfatter" => $data["prodForfatter"],
            ":prodType" => $data["prodType"],
            ":prodTag" => $data["prodTag"],
            ":prodForlag" => $data["prodForlag"]
    ];

    $db->sql($sql, $bind,false );

    echo "<h2 class='headline' style='text-align: center; padding-top: 50px; font-family: Marco, serif;font-style: normal;font-weight: 400;'>Produktet er nu indsat. 
          <a href='insert.php'>Indsæt et produkt mere</h2></a>
          <img class='img-fluid' style='width: 10%; margin-left: 50%' src='uploads/thumbs-up.png'>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Indsæt til database</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/z3vgqdatingc5w71ak5n5edpy5z6wdmn75hojqa0vbw6yzot/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>

<form method="post" action="insert.php" enctype="multipart/form-data">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="prodNavn">Produkt navn</label>
                <input class="form-control" type="text" name="data[prodNavn]" id="prodNavn" placeholder="Produkt navn" value="" >
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="prodPris">Produkt pris</label>
                <input class="form-control" type="number" step="0.1" name="data[prodPris]" id="prodPris" placeholder="Produkt pris" value="" >
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="prodForfatter">Bogens Forfatter</label>
                <input class="form-control" type="text" name="data[prodForfatter]" id="prodForfatter" placeholder="Bogens Forfatter" value="" >
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="prodForlag">Bogens Forlag</label>
                <input class="form-control" type="text" name="data[prodForlag]" id="prodForlag" placeholder="Bogens Forlag" value="" >
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="prodTag">Bogens tags</label>
                <input class="form-control" type="text" name="data[prodTag]" id="prodTag" placeholder="Bogens tags" value="" >
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="prodType">Bogens type</label>
                <input class="form-control" type="text" name="data[prodType]" id="prodType" placeholder="Bogens type" value="" >
            </div>
        </div>

        <div class="col-12">
            <label class="form-label" for="prodBillede">Produkt billede</label>
            <input type="file" class="form-control" id="prodBillede" name="prodBillede">
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="prodBeskrivelse">Produkt beskrivelse</label>
                <textarea class="form-control" name="data[prodBeskrivelse]" id="prodBeskrivelse"></textarea>
            </div>
        </div>

        <div class="col-12 col-md-6 offset-md-6">
            <button class="form-control btn btn-primary" type="submit" id="btnSubmit">Opret produkt</button>
        </div>
    </div>
</form>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ]
    });
</script>
</body>
</html>