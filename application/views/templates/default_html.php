<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $page['title'] ?></title>
    <?php
    $params = array();
    $this->view('elements_default/_css',$params);
    ?>
  </head>

  <body data-spy="scroll" data-offset="80">
      
    <?php $this->view('elements_default/header',$params) ?>

    <?php
        $class_name = $this->router->fetch_class();

        switch ($class_name) {
            case 'main':
                //$this->view('elements_default/banner');
                break;
        }
    ?>
    
    <div class="main-content">
      <?= $page['content'] ?>
    </div>
    
    <?php $this->view('elements_default/footer',$params) ?>
    <?php $this->view('elements_default/_js',$params) ?>

  </body>

</html>
