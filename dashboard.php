
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php session_start();
        echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p>click on this link to Scan the<a href="index1.php">QR Code</a></p>
    </div>
</body>
</html>