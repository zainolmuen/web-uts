<?php
require "config_global.php"

koneksi(hostname, username, password, database);

function koneksi ($host, $user, $password, $db){
    $koneksi = new mysqli($host, $user, $pasword, $db,);
    return $konesi;
}