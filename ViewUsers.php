<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <title>Registration</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/table.css" />

    </head>
    <body>
    <div class=topnav>
    <a href="index.php">Register</a>
    <a href="ViewUsers.php">View Users</a>

</div>
        <div class="header">
        <h1>Users</h1>
        </div>

<?php
require_once "config/dbconn.php";

// Create a new instance of the DbConn class
$dbconn = new dbconn();
$pdo = $dbconn->getPDO();

// Rest of your PHP code
$sql = "SELECT * FROM users";
$res = $pdo->query($sql);
$u = 1;

if ($res->rowCount() > 0) {
    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
        ?>
                <table>
        <tr>
            <td><?php echo $u; $u++; ?>.</td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
        </tr>
    </table>
        <?php
    }
}
?>
