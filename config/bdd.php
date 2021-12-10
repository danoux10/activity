<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=activity;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>