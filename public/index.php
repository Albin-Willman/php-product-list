<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <style>
      .description-cell .full {
        display: none;
      }
    </style>
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/app.css"/>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/app.js"></script>
  </head>
  <body>
    <?php
      // TODO: Add some kind of routing

      require_once('../app/controllers/products_controller.php');

      $controller = new ProductsController();

      echo $controller->index()->render();
    ?>
  </body>
</html>