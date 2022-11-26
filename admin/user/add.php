<?php include '../include/session.php'; ?>
<?php include '../include/connexion.php'; ?>
<?php
$title = "add user"; 
if(isset($_POST['submit'])){
$image = basename($_FILES['img']['name']);
$path = '../img/'.$image;
$file = $_FILES['img']['tmp_name'];
move_uploaded_file($file,$path);
$user = $_POST['user'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$tele = $_POST['tele'];
$pass = md5($_POST['pass']);
$email = $_POST['email'];
$role = $_POST['role'];
$ville = $_POST['ville'];
$req = $bd->prepare("insert into users(user,pass,email,role,nom,prenom,tele,image,ville_id) values(?,?,?,?,?,?,?,?,?)");
$req->execute([$user,$pass,$email,$role,$nom,$prenom,$tele,$image,$ville]);
header('location: /PFF/admin/user/index.php?msg=added');
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
      <h3>Ajouter une user</h3>
      <br />
      <div class="card">
        <div class="card-body">
          <form method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label for="img">image</label>
              <input type="file" name="img" id="img" class="form-control" placeholder="" aria-describedby="img">
            </div>
            <div class="form-group">
              <label for="user">user</label>
              <input type="text" name="user" id="user" class="form-control" placeholder="" aria-describedby="user">
            </div>
            <div class="form-group">
              <label for="pass">pass</label>
              <input type="password" name="pass" id="pass" class="form-control" placeholder="" aria-describedby="pass">
            </div>
            <div class="form-group">
              <label for="email">email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="email">
            </div>
            <div class="form-group">
              <label for="nom">nom</label>
              <input type="text" name="nom" id="nom" class="form-control" placeholder="" aria-describedby="nom">
            </div>
            <div class="form-group">
              <label for="prenom">prenom</label>
              <input type="text" name="prenom" id="prenom" class="form-control" placeholder="" aria-describedby="prenom">
            </div>
            <div class="form-group">
              <label for="tele">tele</label>
              <input type="number" name="tele" id="tele" class="form-control" placeholder="" aria-describedby="tele">
            </div>
            <div class="form-group">
              <label for="role">Ville</label>
              <select name="ville" id="ville" class="form-control" placeholder="" aria-describedby="ville">
                <?php $qer=$bd->query("select * from ville");
                      while($dt = $qer->fetch()):
                ?>
                <option value="<?= $dt['id']?>"><?= $dt['nomv']?></option>
                <?php endwhile;?>
              </select>
            </div>
            <div class="form-group">
              <label for="role">role</label>
              <select name="role" id="role" class="form-control" placeholder="" aria-describedby="role">
                <option value="admin">Admin</option>
                <option value="utilisateur">utilisateur</option>
              </select>
            </div>
            <div class="form-group">
              <button name="submit" class="btn btn-primary btn-block">Ajouter</button>
            </div>
          </form>
        </div>
      </div>


    </div>


    <!-- Footer -->
    <footer class="main">

      &copy; 2022 <strong>Devosoft</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>

    </footer>
  </div>



</div>


<?php include '../include/footer.php'; ?>