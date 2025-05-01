<!DOCTYPE html>
<html>
<head>
    <title>Deposit Money</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Deposit</h2>
    <form action="process.php" method="POST">
        <input type="hidden" name="action" value="deposit">
        <input type="number" name="id" placeholder="Account ID" required>
        <input type="number" step="0.01" name="amount" placeholder="Amount" required>
        <button type="submit">Deposit</button>
    </form>
</div>
</body>
</html>
