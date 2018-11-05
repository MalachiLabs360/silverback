<div class="container-fluid">
  <div class="row header">
    <div class="col-md-6">
      <?php
      if (!empty($page)) {
        echo '<h1>'.ucfirst($page).'</h1>';
      }
      ?>
    </div>
    <div class="col-md-6"></div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-block">
          <h4>Services:</h4>
          <hr>
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Date</th>
                <th>Status</th>
                <th data-sortable="false">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $element) { ?>
                <tr>
                  <td>
                    <?php if (!empty($element->image)) { ?>
                    <img src="/assets/img/store/<?= $element->image ?>" class="image_table">
                    <?php } ?>
                  </td>
                  <td><?= $element->service_name ?></td>
                  <td>$<?= $element->price ?></td>
                  <td><?= $element->schedule ?></td>
                  <td><?= $element->status ?></td>
                  <td>
                    <!-- View -->
                    <button
                      data-id="<?= $element->service_id ?>"
                      data-toggle="tooltip"
                      title="View Order"
                      type="button"
                      class="btn-loading btn btn-primary btn-sm view_service">
                      <i class="fa fa-eye" aria-hidden="true"></i>
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

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-block">
          <h4>Client:</h4>
          <hr>
          <div class="row">
            <div class="col-3 label"><b>Name</b>: </div>
            <div class="col-9"><?= $client->firstname ?> <?= $client->lastname ?></div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3 label"><b>Email</b>: </div>
            <div class="col-9"><?= $client->email ?></div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3 label"><b>Phone</b>: </div>
            <div class="col-9"><?= $client->phone ?></div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3 label"><b>Address</b>: </div>
            <div class="col-9"><?= $client->street ?><br><?= $client->state ?> <?= $client->zip ?></div>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>

</div>
