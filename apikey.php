<?php

function getKey() {
    return ["1811", "lock1", "yourapikey"];
}

function isValid($input) {
    $apikey = $input["api_key"];
    if (in_array($apikey, getKey())) {
        return true;
    } else {
        return false;
    }
}

function jsonOut($status, $message, $data) {
    $respon = ["status" => $status, "message" => $message, "data" => $data];

    header("Content-type: application/json");
    echo json_encode($respon);
}

function getFilm() {
    $film = [
        ["title" => "Kungfu Panda1", "konten" => "film ini film Kungfu Panda 1"],
        ["title" => "Kungfu Panda2", "konten" => "film ini Kungfu Panda 2"],
        ["title" => "Kungfu Panda3", "konten" => "film ini film Kungfu Panda 3"]
    ];
    return $film;
}

if (isValid($_GET)) {
    jsonOut("berhasil", "apikey diterima", getFilm());
} else {
    jsonOut("gagal", "apikey salah!!!", null);
}

?>