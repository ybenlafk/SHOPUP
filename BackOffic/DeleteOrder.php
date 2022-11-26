<?php include 'include/cnx.php'; ?>
<?php
$id= $_GET['id'];
$req = $bd->prepare('delete from commandes where id=?');
$req->execute([$id]);
header('location: orders.php?msg=deleted');