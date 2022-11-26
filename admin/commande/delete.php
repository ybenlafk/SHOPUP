<?php include '../include/session.php'; ?>
<?php
$title = "commande"; 
$id= $_GET['id'];
include '../include/connexion.php';
$req = $bd->prepare('delete from commandes where id=?');
$req->execute([$id]);
header('location: /PFF/admin/commande/index.php?msg=deleted');