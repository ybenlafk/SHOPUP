<?php include '../include/session.php'; ?>
<?php include '../include/connexion.php'; ?>
<?php
$title = "add cmds_prods";
$id=$_GET['id'];
$rq=$bd->prepare('select * from cmds_prods where id=?');
$rq->execute([$id]);
$data=$rq->fetch();
if(isset($_POST['submit'])){
$idproduit = $_POST['idproduit'];
$idcmd = $_POST['idcmd'];
$qte = $_POST['qte'];
$req = $bd->prepare("update cmds_prods set prod_id=?,cmd_id=?,qte=? where id=?");
$req->execute([$idproduit,$idcmd,$qte,$id]);
header('location: /PFF/admin/cmds_prods/index.php?msg=updated');
}

?>
<?php include '../include/header.php'; ?>

<div class="page-container">
  <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

  <!-- Start Sidebar -->
  <?php include '../include/sidebar.php'; ?>
  <!-- End Sidebar -->
  <div class="main-content">

    <!-- Start Menu -->
    <?php include '../include/menu.php'; ?>
    <!-- End Menu -->
    <hr />


    <div class="row">
      <h3>Modifier une commande produit</h3>
      <br />
      <div class="card">
        <div class="card-body">
          <form method="post">
            <div class="form-group">
              <label for="idproduit">Produit</label>
              <select name="idproduit" id="idproduit" class="form-control" placeholder="" aria-describedby="idproduit">
                <?php $qer=$bd->query("select * from produits");
                      while($dt = $qer->fetch()):
                ?>
                <option <?= ($data['prod_id'] == $dt['id'])?'selected':''?> value="<?= $dt['id']?>"><?= $dt['libelle']?></option>
                <?php endwhile;?>
              </select>
            </div>
            <div class="form-group">
              <label for="idcmd">Commande</label>
              <select name="idcmd" id="idcmd" class="form-control" placeholder="" aria-describedby="idcmd">
                <?php $qer=$bd->query("select * from commandes");
                      while($dt = $qer->fetch()):
                ?>
                <option  <?= ($data['cmd_id'] == $dt['id'])?'selected':''?> value="<?= $dt['id']?>"><?= $dt['id']?></option>
                <?php endwhile;?>
              </select>
            </div>
            <div class="form-group">
              <label for="qte">Quantite</label>
              <input value="<?=$data['qte']?>" required type="number" name="qte" id="qte" class="form-control" placeholder="" aria-describedby="qte">
            </div>
            <div class="form-group">
              <button name="submit" class="btn btn-warning btn-block">Modifier</button>
            </div>
          </form>
        </div>
      </div>


    </div>


    <!-- Footer -->
    <footer class="main">

      &copy; 2022 <strong>SHOPUP</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>

    </footer>
  </div>



</div>


<?php include '../include/footer.php'; ?>