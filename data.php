<?php
include 'config.php';

$sql = "SELECT * FROM articles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='articles'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='article'>";
        echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
        echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
        echo "<a class='btn' href='edit.php?id=" . $row['id'] . "'>Edit</a> ";
        echo "<a class='btn delete' href='delete.php?id=" . $row['id'] . "' onclick=\"return confirm('Delete this article?');\">Delete</a>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "No articles found.";
}

$conn->close();
?>
