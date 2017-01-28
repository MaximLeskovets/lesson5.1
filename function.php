<?php
function getProfiles(){
    $json = file_get_contents('phone_book.json');
    $profiles = json_decode($json, true);
    return $profiles;
}