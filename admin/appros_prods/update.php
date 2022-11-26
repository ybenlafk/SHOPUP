<?php include '../include/session.php'; ?>
<?php include '../include/connexion.php'; ?>
<?php
$title = "add appros_prods"; 
$id=$_GET['id'];
$rq=$bd->prepare("select * from appros_prods where id=?");
$rq->execute([$id]);
$data = $rq->fetch();
if(isset($_POST['submit'])){
$prod = $_POST['prod'];
$appro = $_POST['appro'];
$qte = $_POST['qte'];
$req = $bd->prepare("update appros_prods set prod_id=?,appro_id=?,qte=? where id=?");
$req->execute([$prod,$appro,$qte,$id]);
header('location: /PFF/admin/appros_prods/index.php?msg=updated');
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
      <h3>Modifier une approvisionnement produit</h3>
      <br />
      <div class="card">
        <div class="card-body">
          <form method="post">
          <div class="form-group">
              <label for="prod">Produit</label>
              <select name="prod" id="prod" class="form-control" placeholder="" aria-describedby="prod">
                <?php $qer=$bd->query("select * from produits");
                      while($dt = $qer->fetch()):
                ?>
                <option <?=($data['prod_id']==$dt['id'])?'selected':''?> value="<?= $dt['id']?>"><?= $dt['libelle']?></option>
                <?php endwhile;?>
              </select>
            </div>
            <div class="form-group">
              <label for="appro">approvisionnement</label>
              <select name="appro" id="appro" class="form-control" placeholder="" aria-describedby="appro">
                <?php $qer=$bd->query("select * from appros");
                      while($dt = $qer->fetch()):
                ?>
                <option  <?=($data['appro_id']==$dt['id'])?'selected':''?>value="<?= $dt['id']?>"><?= $dt['num']?></option>
                <?php endwhile;?>
              </select>
            </div>
            <div class="form-group">
              <label for="qte">Quantite</label>
              <input value="<?=$data['qte']?>" type="number" name="qte" id="qte" class="form-control" placeholder="" aria-describedby="qte">
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