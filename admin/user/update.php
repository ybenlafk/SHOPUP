<?php include '../include/session.php'; ?>
<?php include '../include/connexion.php'; ?>
<?php
$id= $_GET['id'];
$req = $bd->prepare('select * from users where id=:id');
$req->execute(['id' => $id]);
$data = $req->fetch();

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);
    $email = $_POST['email'];
    $role = $_POST['role'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tele = $_POST['tele'];
    $req = $bd->prepare("UPDATE users SET user=?, pass=?, email=?, role=?,nom=?,prenom=?,tele=?  WHERE  id=?");
    $req->execute([$user,$pass,$email,$role,$id,$nom,$prenom,$tele]);
    header('location: /PFF/admin/user/index.php?msg=updated');
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
      <h3>Modifier un user</h3>
      <br />
      <div class="card">
        <div class="card-body">
          <form method="post">
          <div class="form-group">
              <label for="img">image</label>
              <input type="file" name="img" id="img" class="form-control" placeholder="" aria-describedby="img">
            </div>
            <div class="form-group">
              <label for="user">user</label>
              <input value="<?= $data['user'] ?>" type="text" name="user" id="user" class="form-control" placeholder=""
                aria-describedby="user">
            </div>
            <div class="form-group">
              <label for="pass">pass</label>
              <input value="<?= md5($data['pass']) ?>" type="password" name="pass" id="pass" class="form-control"
                placeholder="" aria-describedby="pass">
            </div>
            <div class="form-group">
              <label for="email">email</label>
              <input value="<?= $data['email'] ?>" type="email" name="email" id="email" class="form-control"
                placeholder="" aria-describedby="email">
            </div>
            <div class="form-group">
              <label for="nom">nom</label>
              <input value="<?= $data['nom'] ?>" type="text" name="nom" id="nom" class="form-control" placeholder="" aria-describedby="nom">
            </div>
            <div class="form-group">
              <label for="prenom">prenom</label>
              <input value="<?= $data['prenom'] ?>" type="text" name="prenom" id="prenom" class="form-control" placeholder="" aria-describedby="prenom">
            </div>
            <div class="form-group">
              <label for="tele">tele</label>
              <input value="<?= $data['tele'] ?>" type="number" name="tele" id="tele" class="form-control" placeholder="" aria-describedby="tele">
            </div>
            <div class="form-group">
              <label for="role">role</label>
              <select name="role" id="role" class="form-control" placeholder="" aria-describedby="role">
                <option <?= ($data['role'] == "admin")?'selected':''?> value="admin">Admin</option>
                <option <?= ($data['role'] == "utilisateur")?'selected':''?> value="utilisateur">utilisateur</option>
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

      &copy; 2022 <strong>Devosoft</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>

    </footer>
  </div>


  <div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">

    <div class="chat-inner">


      <h2 class="chat-header">
        <a href="#" class="chat-close"><i class="entypo-cancel"></i></a>

        <i class="entypo-users"></i>
        Chat
        <span class="badge badge-success is-hidden">0</span>
      </h2>


      <div class="chat-group" id="group-1">
        <strong>Favorites</strong>

        <a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span
            class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
        <a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
        <a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
        <a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
        <a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
      </div>


      <div class="chat-group" id="group-2">
        <strong>Work</strong>

        <a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
        <a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span>
          <em>Daniel A. Pena</em></a>
        <a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
      </div>


      <div class="chat-group" id="group-3">
        <strong>Social</strong>

        <a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
        <a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
        <a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
        <a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
      </div>

    </div>

    <!-- conversation template -->
    <div class="chat-conversation">

      <div class="conversation-header">
        <a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>

        <span class="user-status"></span>
        <span class="display-name"></span>
        <small></small>
      </div>

      <ul class="conversation-body">
      </ul>

      <div class="chat-textarea">
        <textarea class="form-control autogrow" placeholder="Type your message"></textarea>
      </div>

    </div>

  </div>


  <!-- Chat Histories -->
  <ul class="chat-history" id="sample_history">
    <li>
      <span class="user">Art Ramadani</span>
      <p>Are you here?</p>
      <span class="time">09:00</span>
    </li>

    <li class="opponent">
      <span class="user">Catherine J. Watkins</span>
      <p>This message is pre-queued.</p>
      <span class="time">09:25</span>
    </li>

    <li class="opponent">
      <span class="user">Catherine J. Watkins</span>
      <p>Whohoo!</p>
      <span class="time">09:26</span>
    </li>

    <li class="opponent unread">
      <span class="user">Catherine J. Watkins</span>
      <p>Do you like it?</p>
      <span class="time">09:27</span>
    </li>
  </ul>




  <!-- Chat Histories -->
  <ul class="chat-history" id="sample_history_2">
    <li class="opponent unread">
      <span class="user">Daniel A. Pena</span>
      <p>I am going out.</p>
      <span class="time">08:21</span>
    </li>

    <li class="opponent unread">
      <span class="user">Daniel A. Pena</span>
      <p>Call me when you see this message.</p>
      <span class="time">08:27</span>
    </li>
  </ul>


</div>

<!-- Sample Modal (Default skin) -->
<div class="modal fade" id="sample-modal-dialog-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Widget Options - Default Modal</h4>
      </div>

      <div class="modal-body">
        <p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw.
          Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end
          marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope.
          Secure active living depend son repair day ladies now.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Sample Modal (Skin inverted) -->
<div class="modal invert fade" id="sample-modal-dialog-2">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Widget Options - Inverted Skin Modal</h4>
      </div>

      <div class="modal-body">
        <p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw.
          Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end
          marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope.
          Secure active living depend son repair day ladies now.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Sample Modal (Skin gray) -->
<div class="modal gray fade" id="sample-modal-dialog-3">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Widget Options - Gray Skin Modal</h4>
      </div>

      <div class="modal-body">
        <p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw.
          Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end
          marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope.
          Secure active living depend son repair day ladies now.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php include '../include/footer.php'; ?>