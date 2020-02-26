
<!DOCTYPE html>
<html lang="en">
<body>

<table border="1">
    <?php
    $newConnection = openConnection();
    $userSelect = 'SELECT first_name,last-name,email,preferred_language,id  FROM students';
    foreach ($newConnection->query($userSelect) as $user):
        ?>
        <tr>
            <td>
                <?php echo $user['first_name'] ?>
            </td>


            <td>
                <?php echo $user['last-name'] ?>
            </td>


            <td>
                <?php echo $user['e-mail'] ?>
            </td>

            <td>
                <img src="<?php echo 'images/' . $user['preferred_language'] . '.png' ?>" alt="flag">
            </td>

            <td><a href ="http://mysql.local/profile.php?user=<?php echo $user['id'] ?>">Profile</a></td>

        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
