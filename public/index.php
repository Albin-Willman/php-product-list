<?php
  // TODO: Add some kind of routing

  require_once('../app/controllers/products_controller.php');

  $controller = new ProductsController();

  echo $controller->index()->render();
?>