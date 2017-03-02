<?php

require_once('../app/views/products/partials/product_item.php');

class ProductIndexView {
  private $products;

  public function __construct($products) {
    $this->products = $products;
  }

  public function render() {
    $ret = '';
    foreach($this->products as $p) {
      $partial = new ProductItemPartial($p);
      $ret .= $partial->render();
    }
    return $ret;
  }

}
?>