<?php
function co()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=Efrei', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $bdd;
}