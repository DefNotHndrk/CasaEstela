<?php 
    include './db.php';
    $sql = "SELECT * FROM reservation";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>