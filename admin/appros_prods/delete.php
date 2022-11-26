<?php include '../include/session.php'; ?>
<?php
$title = "appros_prods"; 
$id= $_GET['id'];
include '../include/connexion.php';
$req = $bd->prepare('delete from appros_prods where id=?');
$req->execute([$id]);
header('location: /PFF/admin/appros_prods/index.php?msg=deleted');