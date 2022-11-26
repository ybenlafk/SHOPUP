<?php include '../include/session.php'; ?>
<?php
$title = "cmds_prods"; 
$id= $_GET['id'];
include '../include/connexion.php';
$req = $bd->prepare('delete from cmds_prods where id=?');
$req->execute([$id]);
header('location: /PFF/admin/cmds_prods/index.php?msg=deleted');