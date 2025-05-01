<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = $conn->query("SELECT * FROM articles WHERE id = $id");

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Article not found.";
        exit;
    }
} else {
    echo "No article ID provided.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Article</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Edit Article</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required>
        <textarea name="content" rows="5" required><?php echo htmlspecialchars($row['content']); ?></textarea>
        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>
