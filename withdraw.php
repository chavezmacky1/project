<!DOCTYPE html>
<html>
<head>
    <title>Withdraw Money</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Withdraw</h2>
    <form action="process.php" method="POST">
        <input type="hidden" name="action" value="withdraw">
        <input type="number" name="id" placeholder="Account ID" required>
        <input type="number" step="0.01" name="amount" placeholder="Amount" required>
        <button type="submit">Withdraw</button>
    </form>
</div>
</body>
</html>
