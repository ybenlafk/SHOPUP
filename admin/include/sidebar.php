<style>
  .page-container .sidebar-menu #main-menu li.active > a {
  background-color: #9772FB;
  color: #fff;
}.page-container .sidebar-menu #main-menu li ul > li {
  border-bottom: 1px solid #fff;
}
.page-container .sidebar-menu #main-menu li ul > li > a {
  background-color: #9772FB;
  padding-left: 40px;
}
.page-container .sidebar-menu #main-menu li ul > li > a:hover {
  background-color: rgba(69, 74, 84, 0.3);
}
</style>
<div class="sidebar-menu" style=" background: #764AF1" >

  <div class="sidebar-menu-inner">

    <header class="logo-env">

      <!-- logo -->
      <div class="logo">
        <a href="index.php">
          <!-- <img src="img/logo.svg" width="150" alt="" /> -->
        </a>
      </div>

      <!-- logo collapse icon -->
      <div class="sidebar-collapse">
        <a href="#" class="sidebar-collapse-icon" style="border: 1px solid #fff;">
          <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
          <i class="entypo-menu"style="color:#fff"></i>
        </a>
      </div>


      <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
      <div class="sidebar-mobile-menu visible-xs">
        <a href="#" class="with-animation">
          <!-- add class "with-animation" to support animation -->
          <i class="entypo-menu"></i>
        </a>
      </div>

    </header>


    <ul id="main-menu" class="main-menu">
      <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
      <li class=" <?= ($title=="Home")?'active':'' ?>">
          <a href="/PFF/admin/index.php" style="color:#fff">
              <i class="entypo-home"></i>
              <span class="title">Home</span>
          </a>
      </li>
      
      <!-- Start item menu -->
      <li class="has-sub <?= ($title=="category" || $title=="add category")?'active':'' ?>">
        <a href="/PFF/admin/categorie/"style="color:#fff">
          <i class="entypo-layout"></i>
          <span class="title">categories</span>
        </a>
        <ul>
          <li class="<?= ($title=="category")?'active':'' ?>">
            <a href="/PFF/admin/categorie/"style="color:#fff">
              <i class="entypo-list"></i>
              <span class="title">Liste des categories</span>
            </a>
          </li>
          <li class="<?= ($title=="add category")?'active':'' ?>">
            <a href="/PFF/admin/categorie/add.php"style="color:#fff">
              <i class="entypo-plus-squared"></i>
              <span class="title">Ajouter une categorie</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End item menu -->
      <!-- Start item menu -->
      <li class="has-sub <?= ($title=="user" || $title=="add user")?'active':''?>">
        <a href="/PFF/admin/user/"style="color:#fff">
          <i class="entypo-user"></i>
          <span class="title">users</span>
        </a>
        <ul>
          <li class="<?= ($title=="user")?'active':'' ?>">
            <a href="/PFF/admin/user/"style="color:#fff">
              <i class="entypo-list"></i>
              <span class="title">Liste des users</span>
            </a>
          </li>
          <li class="<?= ($title=="add user")?'active':'' ?>">
            <a href="/PFF/admin/user/add.php"style="color:#fff">
              <i class="entypo-user-add"></i>
              <span class="title">Ajouter une user</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End item menu -->
      <li class="has-sub <?= ($title=="produit" || $title=="add produit")?'active':''?>">
        <a href="/PFF/admin/produit/"style="color:#fff">
          <i class="entypo-bag"></i>
          <span class="title">produit</span>
        </a>
        <ul>
          <li class="<?= ($title=="produit")?'active':'' ?>">
            <a href="/PFF/admin/produit/"style="color:#fff">
              <i class="entypo-list"></i>
              <span class="title">Liste des produits</span>
            </a>
          </li>
          <li class="<?= ($title=="add produit")?'active':'' ?>">
            <a href="/PFF/admin/produit/add.php"style="color:#fff">
              <i class="entypo-plus-squared"></i>
              <span class="title">Ajouter une produit</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="has-sub <?= ($title=="fournisseur" || $title=="add fournisseur")?'active':''?>">
        <a href="/PFF/admin/fournisseur/"style="color:#fff">
          <i class="entypo-vcard"></i>
          <span class="title">fournisseur</span>
        </a>
        <ul>
          <li class="<?= ($title=="fournisseur")?'active':'' ?>">
            <a href="/PFF/admin/fournisseur/"style="color:#fff">
              <i class="entypo-list"></i>
              <span class="title">Liste des fournisseur</span>
            </a>
          </li>
          <li class="<?= ($title=="add fournisseur")?'active':'' ?>">
            <a href="/PFF/admin/fournisseur/add.php"style="color:#fff">
              <i class="entypo-plus-squared"></i>
              <span class="title">Ajouter une fournisseur</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="has-sub <?= ($title=="commande" || $title=="add commande")?'active':''?>">
        <a href="/PFF/admin/commande/"style="color:#fff">
          <i class="entypo-basket"></i>
          <span class="title">commandes</span>
        </a>
        <ul>
          <li class="<?= ($title=="commande")?'active':'' ?>">
            <a href="/PFF/admin/commande/"style="color:#fff">
              <i class="entypo-list"></i>
              <span class="title">Liste des commandes</span>
            </a>
          </li>
          <li class="<?= ($title=="add commande")?'active':'' ?>">
            <a href="/PFF/admin/commande/add.php"style="color:#fff">
              <i class="entypo-plus-squared"></i>
              <span class="title">Ajouter une commande</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="has-sub <?= ($title=="cmds_prods" || $title=="add cmds_prods")?'active':''?>">
        <a href="/PFF/admin/cmds_prods/"style="color:#fff">
          <i class="entypo-publish"></i>
          <span class="title">commandes produit</span>
        </a>
        <ul>
          <li class="<?= ($title=="cmds_prods")?'active':'' ?>">
            <a href="/PFF/admin/cmds_prods/"style="color:#fff">
              <i class="entypo-list"></i>
              <span class="title">Liste des commandes produit</span>
            </a>
          </li>
          <li class="<?= ($title=="add cmds_prods")?'active':'' ?>">
            <a href="/PFF/admin/cmds_prods/add.php"style="color:#fff">
              <i class="entypo-plus-squared"></i>
              <span class="title">Ajouter une commande produit</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="has-sub <?= ($title=="appros" || $title=="add appros")?'active':''?>">
        <a href="/PFF/admin/appros/"style="color:#fff">
          <i class="entypo-arrows-ccw"></i>
          <span class="title">approvisionnements</span>
        </a>
        <ul>
          <li class="<?= ($title=="appros")?'active':'' ?>">
            <a href="/PFF/admin/appros/"style="color:#fff">
              <i class="entypo-list"></i>
              <span class="title">Liste des approvisionnements</span>
            </a>
          </li>
          <li class="<?= ($title=="add appros")?'active':'' ?>">
            <a href="/PFF/admin/appros/add.php"style="color:#fff">
              <i class="entypo-plus-squared"></i>
              <span class="title">Ajouter une approvisionnement</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="has-sub <?= ($title=="appros_prods" || $title=="add appros_prods")?'active':''?>">
        <a href="/PFF/admin/appros_prods/"style="color:#fff">
          <i class="entypo-clipboard"></i>
          <span class="title">approvisionnements produits</span>
        </a>
        <ul>
          <li class="<?= ($title=="appros_prods")?'active':'' ?>">
            <a href="/PFF/admin/appros_prods/"style="color:#fff">
              <i class="entypo-list"></i>
              <span class="title">Liste des approvisionnements produits</span>
            </a>
          </li>
          <li class="<?= ($title=="add appros_prods")?'active':'' ?>">
            <a href="/PFF/admin/appros_prods/add.php"style="color:#fff">
              <i class="entypo-plus-squared"></i>
              <span class="title">Ajouter une approvisionnement produit</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>

  </div>

</div>

<!--http://fontello.github.io/entypo/demo.html-->