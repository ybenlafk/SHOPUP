<?php include '../include/session.php'; ?>
<?php
$id= $_GET['id'];
include '../include/connexion.php';
$req = $bd->prepare('delete from categories where id=?');
$req->execute([$id]);
header('location: /PFF/admin/categorie/index.php?msg=deleted');