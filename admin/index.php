<?php include 'include/session.php'; ?>
<?php include 'include/header3.php'; ?>
<?php include 'include/connexion.php'; ?>
<?php $title = "Home"; 
$A=$bd->query("SELECT count(*) FROM users");
$dt=$A->fetch();
$B=$bd->query("SELECT count(*) FROM produits");
$dt1=$B->fetch();
$C=$bd->query("SELECT count(*) FROM cmds_prods");
$dt2=$C->fetch();
$D=$bd->query("SELECT count(*) FROM appros_prods");
$dt3=$D->fetch();
?>

<div class="page-container">
  <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

  <!-- Start Sidebar -->
  <?php include 'include/sidebar.php'; ?>
  <!-- End Sidebar -->
  <div class="main-content">

    <!-- Start Menu -->
    <?php include 'include/menu.php'; ?>
    <!-- End Menu -->
    <hr />




    <div class="row">
      <div class="col-sm-3 col-xs-6">

        <div class="tile-stats tile-red">
          <div class="icon"><i class="entypo-users"></i></div>
          <div class="num" data-start="0" data-end="<?=$dt[0]?>" data-postfix="" data-duration="500" data-delay="0">0</div>

          <h3>Registered users</h3>
        </div>

      </div>

      <div class="col-sm-3 col-xs-6">

        <div class="tile-stats tile-green">
          <div class="icon"><i class="entypo-chart-bar"></i></div>
          <div class="num" data-start="0" data-end="<?=$dt1[0]?>" data-postfix="" data-duration="500" data-delay="200">0</div>

          <h3>Products</h3>
        </div>

      </div>

      <div class="clear visible-xs"></div>

      <div class="col-sm-3 col-xs-6">

        <div class="tile-stats tile-aqua">
          <div class="icon"><i class="entypo-mail"></i></div>
          <div class="num" data-start="0" data-end="<?=$dt2[0]?>" data-postfix="" data-duration="500" data-delay="200">0</div>

          <h3>Orders</h3>
        </div>

      </div>

      <div class="col-sm-3 col-xs-6">

        <div class="tile-stats tile-blue">
          <div class="icon"><i class="entypo-rss"></i></div>
          <div class="num" data-start="0" data-end="<?=$dt3[0]?>" data-postfix="" data-duration="500" data-delay="200">0</div>

          <h3>Supplies</h3>
        </div>

      </div>
    </div>

    <br />


    <!-- Footer -->
    <footer class="main">

      &copy; 2022 <strong>SHOPUP</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>

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
        <p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing
          for
          ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness
          furniture
          set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day
          ladies now.</p>
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
        <p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing
          for
          ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness
          furniture
          set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day
          ladies now.</p>
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
        <p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing
          for
          ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness
          furniture
          set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day
          ladies now.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php include 'include/footer2.php'; ?>