<?php

/**
 * CONTROLEUR FRONTAL
 */

// lancement d'une session (PHPSESSID)
session_start();

// chargement des dépendances
require_once "../config.php";

// chargement du router
require_once BASE_URL."/controller/routerController.php";