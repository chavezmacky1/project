<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Bank System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Bank Account Dashboard</h1>
    <a href="create_account.php" class="btn">Create Account</a>
    <a href="deposit.php" class="btn">Deposit</a>
    <a href="withdraw.php" class="btn">Withdraw</a>
    <hr>
    <h2>All Accounts</h2>
    <?php
    $result = $conn->query("SELECT * FROM accounts");
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Balance</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>" . htmlspecialchars($row['name']) . "</td><td>\${$row['balance']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No accounts found.";
    }
    ?>
</div>
</body>
</html>
