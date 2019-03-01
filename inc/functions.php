<?php
function dbName() {
    global $dbh;
    $sql = "SELECT DATABASE()";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute();
        $dbName = $sth->fetch(PDO::FETCH_NUM);
    } catch (Exception $e) {
        throw $e;
    }
    return $dbName[0];
}