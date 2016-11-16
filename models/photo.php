<?php

require_once __DIR__ . '/../functions/sql.php';

function Photo_getAll()
{
    $sql = "SELECT * FROM images";
    return Sql_querry($sql);
}

function Photo_insert($data)
{
    $sql = "INSERT INTO images
        (title,path)
        VALUES
        ('" . $data['title'] . "','" . $data['image'] . "')";

    Sql_exec($sql);
}