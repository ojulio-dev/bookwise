<?php

$db = new PDO('sqlite:database.sqlite');

$query = $db->query("select * from livros");

dd($query->fetchAll());

$livros = $query->fetchAll();

dd($livros);
