<?php
$sql = "SELECT * FROM menu_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="menu-item">';
        echo '<img src="' . $row["image"] . '" alt="' . $row["name"] . '">';
        echo '<h2>' . $row["name"] . '</h2>';
        echo '<p>₱' . $row["price"] . '</p>';
        echo '<form method="post" action="cart.php">';
        echo '<input type="hidden" name="item_id" value="' . $row["id"] . '">';
        echo '<input type="number" name="quantity" min="1" value="1">';
        echo '<button type="submit">Add to Cart</button>';
        echo '</form>';
        echo '</div>';
    }
} else {
    echo "No menu items found.";
}
$conn->close();
?>