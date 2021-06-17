<?php

function getKey() {
    return ["1811", "lock1", "yourapikey"];
}

function isValid($input) {
    // $apikey = $input["api_key"];
    if (in_array($input, getKey())) {
        return true;
    } else {
        return false;
    }
}

if (isValid($_GET["api_key"])) {
    echo "apikey valid ".$_GET["menu"];
} else {
    echo "apikey salah!!! ". $_GET["menu"];
}

?>