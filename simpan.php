<?php
require 'conn.php';

$name = $_POST['name'];
$ic = $_POST['ic'];

$sql = "INSERT INTO list (name, ic) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $name, $ic);
$stmt->execute();

if ($conn->error) {
    ?>
    <script>
        alert('SORRY! NAME WAS EXIST');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}