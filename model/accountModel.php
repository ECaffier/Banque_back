<?php

function getAccountByUser(PDO $db){
    $query = $db->query("SELECT * FROM account ");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

?>