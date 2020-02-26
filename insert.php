<!DOCTYPE html>
<html lang="en">
<body>

<table border="1">
    <?php
    $newConnection = openConnection();
    $userSelect = 'SELECT firstName, lastName, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author, id FROM student';
    foreach ($newConnection->query($userSelect) as $user):
        ?>
        <tr>
            <td>
                <?php echo $user['firstName'] ?>
            </td>


            <td>
                <?php echo $user['lastName'] ?>
            </td>


            <td>
                <?php echo $user['username'] ?>
            </td>

            <td>
                <?php echo $user['linkedin'] ?>
            </td>

            <td>
                <?php echo $user['github'] ?>
            </td>

            <td>
                <?php echo $user['email']?>
            </td>

            <td>
                <?php echo $user['preferred_language']?>
            </td>

            <td>
                <?php echo $user['avatar']?>
            </td>

            <td>
                <?php echo $user['video']?>
            </td>

            <td>
                <?php echo $user['quote']?>
            </td>

            <td>
                <?php echo $user['quote_author']?>
            </td>


            <td><a href ="http://mysql.local/profile.php?user=<?php echo $user['id'] ?>">Profile</a></td>

        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
