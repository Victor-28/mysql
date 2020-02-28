<?php
declare(strict_types = 1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<body>
<form action="index.php" method="post">
    <p><strong>id:</strong> <?php echo $user['id']?></p>
    <p><strong>first name:</strong> <?php echo $user['firstName']?></p>
    <p><strong>last name:</strong> <?php echo $user['lastName']?></p>
</body>
</html>