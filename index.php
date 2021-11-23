<?php
require 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
<a href="tambah.php">ADD NEW</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="palevioletred;">
            <th>ID</th>
            <th>NAME</th>
            <th>IC</th>
            <th>ACTION</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM list";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $bil++; ?></td>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->ic; ?></td>
                    <td>
                        <a href="update.php?idlist=<?php echo $row->idlist; ?>">EDIT</a>
                        |
                        <a href="padam.php?idlist=<?php echo $row->idlist; ?>" onclick="return confirm('ARE YOU SURE WANT TO DELETE?');">DELETE</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>