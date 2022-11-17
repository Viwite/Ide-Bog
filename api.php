<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'),true);

header('Content-Type: application/json; charset=utf-8');

if (isset($data["password"]) && $data["password"] == 'Fantasy') {
    $sql = "SELECT * FROM boger WHERE 1=1";
    $bind = [];

    if (!empty($data["nameSearch"])) {
        $sql .= " AND prodNavn = :prodNavn ";
        $bind[":prodNavn"] = $data["nameSearch"];

    }

    $boger = $db->sql($sql, $bind);
    header("HTTP/1.1 200 OK");

    echo json_encode($boger);

} else {
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Dit kodeord var forkert";
    echo json_encode($error);
}