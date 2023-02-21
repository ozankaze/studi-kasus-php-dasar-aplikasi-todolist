<?php

function input(string $info) {
    echo "$info";
    $restult = fgets(STDIN);
    return trim($restult);
}