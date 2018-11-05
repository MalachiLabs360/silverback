<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-block">
            <div class="form-group">
              <label class="control-label" for="name">Name</label>
              <input
                value="<?= !empty($data->name) ? $data->name : ''  ?>"
                type="text"
                class="form-control"
                readonly>
            </div>
            <div class="form-group">
              <label class="control-label" for="price">Price (example: 12.99)</label>
              <input
                value="<?= !empty($data->price) ? $data->price : ''  ?>"
                type="number"
                step="0.01"
                class="form-control"
                readonly>
            </div>
            <div class="form-group">
              <label class="control-label" for="description">Description</label>
              <textarea
                rows="3"
                class="form-control"
                placeholder="Description.."
                readonly><?= !empty($data->description) ? $data->description : ''  ?></textarea>
            </div>
            <div class="form-group">
              <?php
              if (!empty($data->image)) {
              ?>
                <a target="_blank" href="/assets/img/store/<?= $data->image ?>">
                  <img src="/assets/img/store/<?= $data->image ?>" class="image_upload" alt="">
                </a>
              <?php
              }
              ?>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
