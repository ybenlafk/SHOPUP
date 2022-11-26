<?php include '../include/session.php'; ?>
<?php include '../include/connexion.php'; ?>
<?php
$title = "commande"; 
$id=$_GET['id'];
$rq=$bd->prepare("select * from commandes where id=?");
$rq->execute([$id]);
$data = $rq->fetch();
if(isset($_POST['submit'])){
$date = $_POST['date'];
$user = $_POST['user'];
$req = $bd->prepare("update commandes set date=?,iduser=? where id=?");
$req->execute([$date,$user,$id]);
header('location: /PFF/admin/commande/index.php?msg=updated');
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
      <h3>Modifier une commande</h3>
      <br />
      <div class="card">
        <div class="card-body">
          <form method="post">
            <div class="form-group">
              <label for="date">Date</label>
              <input value="<?=$data['date']?>" type="date" name="date" id="date" class="form-control" placeholder="" aria-describedby="date">
            </div>
            <div class="form-group">
              <label for="user">User</label>
              <select name="user" id="user" class="form-control" placeholder="" aria-describedby="user">
                <?php $qer=$bd->query("select * from users");
                      while($dt = $qer->fetch()):
                ?>
                <option <?=($dt['id'] == $data['iduser'])?'selected':''?> value="<?= $dt['id']?>"><?= $dt['user']?></option>
                <?php endwhile;?>
              </select>
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