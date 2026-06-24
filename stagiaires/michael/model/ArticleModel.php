<?php


/**
 * Ce modèle contient toutes les requêtes
 * dont la table `Article` est le parent 
 */

/**
 * Récupérationderniers articles par ordre de date DESC avec l'auteur
 * 
 */

function selectAllArticleHomepage(PDO $db): array 
{
    $sql = "SELECT 
	a.`id`, a.`title`,a.`date`, LEFT(a.`content`,250) AS `content` ,
    u.`id` AS `iduser`, u.`username`
	FROM `article` a
    INNER JOIN `user` u
		ON u.`id` = a.`user_id`
    ORDER BY a.`date` DESC    
;";
    $stmt = $db->query($sql);
    $datas = $stmt->fetchAll();
    $stmt->closeCursor();
    return $datas;
}