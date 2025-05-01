<?php
include 'config.php';

$action = $_POST['action'];

if ($action == 'create') {
    $name = $conn->real_escape_string($_POST['name']);
    $conn->query("INSERT INTO accounts (name, balance) VALUES ('$name', 0.00)");
}
elseif ($action == 'deposit') {
    $id = intval($_POST['id']);
    $amount = floatval($_POST['amount']);
    $conn->query("UPDATE accounts SET balance = balance + $amount WHERE id = $id");
}
elseif ($action == 'withdraw') {
    $id = intval($_POST['id']);
    $amount = floatval($_POST['amount']);
    $result = $conn->query("SELECT balance FROM accounts WHERE id = $id");
    if ($row = $result->fetch_assoc()) {
        if ($row['balance'] >= $amount) {
            $conn->query("UPDATE accounts SET balance = balance - $amount WHERE id = $id");
        } else {
            echo "Insufficient funds.";
            exit;
        }
    }
}

header("Location: index.php");
?>
