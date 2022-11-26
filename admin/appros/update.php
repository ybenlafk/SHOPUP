<?php include '../include/session.php'; ?>
<?php include '../include/connexion.php'; ?>
<?php
$title = "appros"; 
$id=$_GET['id'];
$rq=$bd->prepare("select * from appros where id=?");
$rq->execute([$id]);
$data = $rq->fetch();
if(isset($_POST['submit'])){
$num = $_POST['num'];
$date = $_POST['date'];
$four = $_POST['four'];
$req = $bd->prepare("update appros set num=?,date=?,four_id=? where id=?");
$req->execute([$num,$date,$four,$id]);
header('location: /PFF/admin/appros/index.php?msg=updated');
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
      <h3>Modifier une approvisionnements</h3>
      <br />
      <div class="card">
        <div class="card-body">
          <form method="post">
            <div class="form-group">
              <label for="num">Num</label>
              <input value="<?=$data['num']?>" required type="number" name="num" id="num" class="form-control" placeholder="" aria-describedby="num">
            </div>
            <div class="form-group">
              <label for="date">Date de approvisionnement </label>
              <input value="<?=$data['date']?>" required type="date" name="date" id="date" class="form-control" placeholder="" aria-describedby="date">
            </div>
            <div class="form-group">
              <label for="four">Fournisseur</label>
              <select name="four" id="four" class="form-control" placeholder="" aria-describedby="four">
                <?php $qer=$bd->query("select * from fournisseurs");
                      while($dt = $qer->fetch()):
                ?>
                <option <?=($data['four_id']==$dt['id'])?'selected':''?> value="<?= $dt['id']?>"><?= $dt['nomf']?></option>
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