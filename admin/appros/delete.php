<?php include '../include/session.php'; ?>
<?php
$title = "appros"; 
$id= $_GET['id'];
include '../include/connexion.php';
$req = $bd->prepare('delete from appros where id=?');
$req->execute([$id]);
header('location: /PFF/admin/appros/index.php?msg=deleted');