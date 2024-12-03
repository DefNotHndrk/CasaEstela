<?php 
    include 'db.php';
    $sql = "SELECT * FROM feedback"; 
    $query = $connection->query($sql);

    if ($query) {
        echo $query->num_rows;
    } else {
        echo "Error: " . $connection->error;
    }
?>
