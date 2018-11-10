<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $page['title'] ?></title>
    <?php
    $params = array();
    $this->view('elements_default/_css',$params);
    ?>
  </head>

  <body data-spy="scroll" data-offset="80">

    <?php $this->view('elements_default/header',$params); ?>

    <div class="main-content">
      <?= $page['content'] ?>
    </div>
    
    <?php $this->view('elements_default/footer',$params) ?>
    <?php $this->view('elements_default/_js',$params) ?>

  </body>

</html>
