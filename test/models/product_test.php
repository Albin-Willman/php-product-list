<?php
require_once('../app/models/product.php');

class TestProduct extends UnitTestCase {
  function test_priceWithVat() {
    $product = new Product();
    $product->Price = 2;
    $product->VatId = 1;
    $this->assertEqual($product->priceWithVat(), 2.5);
  }

  function test_initial_price() {
    $product = new Product();
    $this->assertEqual($product->price, 0);
  }

  function test_initial_categories() {
    $product = new Product();
    $this->assertEqual($product->categories, []);
  }
}
?>
