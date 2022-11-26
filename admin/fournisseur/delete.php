<?php include '../include/session.php'; ?>
<?php
$title = "fournisseur"; 
$id= $_GET['id'];
include '../include/connexion.php';
$req = $bd->prepare('delete from fournisseurs where id=?');
$req->execute([$id]);
header('location: /PFF/admin/fournisseur/index.php?msg=deleted');