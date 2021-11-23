<?php
    require 'conn.php';
    $idlist = $_GET['idlist'];
    $sql = "SELECT * FROM list WHERE idlist = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $idlist);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_object();
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
    <form method="post" action="kemaskini.php">
        <input type="hidden" name="idlist" value="<?php echo $row->idlist; ?>" />
        <table>
            <tr>
                <td><label for="nama">NAME</label></td>
                <td>
                    <input id="name" type="text" name="name" value="<?php echo $row->name; ?>" required />
                </td>
            </tr>
            <tr>
                <td><label for="ic">IC</label></td>
                <td>
                    <input id="ic" type="text" step="any" name="ic" value="<?php echo $row->ic; ?>" required />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">SAVE</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>