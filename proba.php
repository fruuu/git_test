<?php

$conn = new mysqli("localhost", "root", "") or die($conn->error);

$sql = "create database if not EXISTS sastanci";
$sql .= "create `table` if not exists sastanci.tip_korisnika(tip_id INT(10) UNSIGNED NOT NULL,
                                                  naziv varchar(10) null not null,
                                                  primary key (tip_id)) engine=INNODB;";

$query = $conn->query($sql) or die($conn->error);

if(!($query))
    echo "neuspjeli upit";

