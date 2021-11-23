<?php
require 'conn.php';

$idlist = $_GET['idlist'];

$sql = "DELETE FROM list WHERE idlist = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idlist);
$stmt->execute();

header('location: index.php');