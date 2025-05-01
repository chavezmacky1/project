<!DOCTYPE html>
<html>
<head>
    <title>Create Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Create New Account</h2>
    <form action="process.php" method="POST">
        <input type="hidden" name="action" value="create">
        <input type="text" name="name" placeholder="Customer Name" required>
        <button type="submit">Create</button>
    </form>
</div>
</body>
</html>
