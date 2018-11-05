<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-block">
          <div class="form-group">
            <label class="control-label"><b>Date</b>: </label>
            <input
              value="<?= !empty($data['order']->date) ? $data['order']->date : ''  ?>"
              type="text"
              class="form-control"
              readonly>
          </div>
          <div class="form-group">
            <label class="control-label" for="status"><b>Status</b>: </label>
            <input
              value="<?= $data['order']->status ?>"
              type="text"
              class="form-control"
              readonly>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-block">
          <h4>Products:</h4>
          <hr>
          <?php
          foreach ($data['products'] as $product) {
          ?>
            <table class="table2">
              <tbody>
                <tr>
                  <td width="30%"><?= $product->name ?></td>
                  <td width="70%">$<?= $product->price ?></td>
                </tr>
                <tr>
                  <td width="30%">
                    <?php if (!empty($product->image)) { ?>
                      <img src="/assets/img/store/<?= $product->image ?>" class="image_table">
                    <?php } ?>
                  </td>
                  <td width="70%"><?= $product->description ?></td>
                </tr>
              </tbody>
            </table>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

</div>
