<?php include '../include/session.php'; ?>
<?php include '../include/connexion.php'; ?>
<?php include '../include/header.php'; ?>
<?php $title = "user"; ?>


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
      <div class="col-md-12">
        <?php if(isset($_GET['msg']) && $_GET['msg']=='added'): ?>
        <div class="alert alert-success">Ajouter avec succes
          <span data-dismiss="alert" class="close">&times;</span>
        </div>
        <?php endif; ?>
        <?php if(isset($_GET['msg']) && $_GET['msg']=='deleted'): ?>
        <div class="alert alert-danger">Supprimer avec succes
          <span data-dismiss="alert" class="close">&times;</span>
        </div>
        <?php endif; ?>
        <?php if(isset($_GET['msg']) && $_GET['msg']=='updated'): ?>
        <div class="alert alert-warning">modifier avec succes
          <span data-dismiss="alert" class="close">&times;</span>
        </div>
        <?php endif; ?>

      </div>
    </div>
    <div class="row">
      <h3>Liste des users</h3>
      <br />

      <script type="text/javascript">
      jQuery(document).ready(function($) {
        var $table3 = jQuery("#table-3");

        var table3 = $table3.DataTable({
          "aLengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
          ]
        });

        // Initalize Select Dropdown after DataTables is created
        $table3.closest('.dataTables_wrapper').find('select').select2({
          minimumResultsForSearch: -1
        });

        // Setup - add a text input to each footer cell
        $('#table-3 tfoot th').each(function() {
          var title = $('#table-3 thead th').eq($(this).index()).text();
          $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
        });

        // Apply the search
        table3.columns().every(function() {
          var that = this;

          $('input', this.footer()).on('keyup change', function() {
            if (that.search() !== this.value) {
              that
                .search(this.value)
                .draw();
            }
          });
        });
      });
      </script>

      <table class="table table-bordered datatable" id="table-3">
        <thead>
          <tr class="replace-inputs">
            <th>#</th>
            <th>User</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
					$req =  $bd->query("select * from users");
					while($data = $req->fetch()):
				?>
          <tr class="gradeA">
            <td><?= $data['id'] ?></td>
            <td><?= $data['user'] ?></td>
            <td><?= $data['email'] ?></td>
            <td><?= $data['role'] ?></td>
            <td>
              <a href="/PFF/admin/user/update.php?id=<?= $data['id'] ?>"
                class="btn btn-default btn-sm btn-icon icon-left">
                <i class="entypo-pencil"></i>
                Edit
              </a>

              <a href="/PFF/admin/user/delete.php?id=<?= $data['id'] ?>"
                class="btn btn-danger btn-sm btn-icon icon-left">
                <i class="entypo-cancel"></i>
                Delete
              </a>

              <a href=""
                class="btn btn-info btn-sm btn-icon icon-left">
                <i class="entypo-info"></i>
                Profile
              </a>
            </td>
          </tr>
          <?php
					endwhile;
				?>
        </tbody>
        <tfoot>
          <tr>
            <th>#</th>
            <th>User</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>


<?php include '../include/footer.php'; ?>