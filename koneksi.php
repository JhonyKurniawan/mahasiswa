<?php

function getConnection()
{
    return
        new PDO("mysql:host=localhost;dbname=mahasiswa", "jhony", "123", [PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
}
