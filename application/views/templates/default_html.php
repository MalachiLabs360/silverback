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

    <?php
        $class_name = $this->router->fetch_class();
    ?>

    <?php
    switch ($class_name){
        default:
            $this->view('elements_default/header',$params);
            break;

        case 'about':
            $this->view('pages/about/about-header', $params);
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
