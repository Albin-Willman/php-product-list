<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <style>
      .description-cell .full {
        display: none;
      }
    </style>
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