<div class="container-fluid">
  <div class="row header">
    <div class="col-md-6">
      <?php
      if (!empty($page)) {
        echo '<h1>'.ucfirst($page).'</h1>';
      }
      ?>
    </div>
    <div class="col-md-6">
      <button data-toggle="tooltip" data-original-title="Add User" class="btn-loading btn btn-primary pull-right add">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Add User
      </button>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card" id="content">
        <div class="card-block">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th data-sortable="false">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $element) { ?>
                <tr>
                  <td><?= $element->firstname ?></td>
                  <td><?= $element->lastname ?></td>
                  <td><?= $element->email ?></td>
                  <td><?= $element->phone ?></td>
                  <td>
                    <!-- Services -->
                    <button
                      data-id="<?= $element->id ?>"
                      data-toggle="tooltip"
                      title="Services"
                      type="button"
                      class="btn-loading btn btn-primary btn-sm services">
                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    </button>
                    <!-- Orders -->
                    <button
                      data-id="<?= $element->id ?>"
                      data-toggle="tooltip"
                      title="Orders"
                      type="button"
                      class="btn-loading btn btn-primary btn-sm orders">
                      <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </button>
                    <!-- Edit -->
                    <button
                      data-id="<?= $element->id ?>"
                      data-toggle="tooltip"
                      title="Edit"
                      type="button"
                      class="btn-loading btn btn-warning btn-sm edit">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                    </button>
                    <!-- Delete -->
                    <button
                      data-title="<?= $element->firstname ?> <?= $element->lastname ?>"
                      data-id="<?= $element->id ?>"
                      data-toggle="tooltip"
                      title="Delete"
                      type="button"
                      class="btn-loading btn btn-danger btn-sm delete"
                      data-content="Name: <?= $element->firstname ?> <?= $element->lastname ?>">
                      <i class="fa fa-remove" aria-hidden="true"></i>
                    </button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
