<?php
require 'conn.php';

$idlist = $_POST['idlist'];
$name = $_POST['name'];
$ic = $_POST['ic'];

$sql = "UPDATE list SET name = ?, ic = ? WHERE idlist = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $name, $ic, $idlist);
$stmt->execute();

if ($mysqli->error) {
    ?>
    <script>
        alert('SORRY , NAME WAS EXIST');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}