<?php
require_once('../app/models/product.php');

class TestProduct extends UnitTestCase {
  function test_price_with_vat() {
    $product = new Product();
    $product->price = 2;
    $product->vatId = 1;
    $this->assertEqual($product->price_with_vat(), 2.5);
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
