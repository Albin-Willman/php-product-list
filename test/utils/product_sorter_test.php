
<?php
require_once('../app/utils/product_sorter.php');
require_once('../app/models/product.php');

class TestProductSorter extends UnitTestCase {
  function testSortbySku() {

    $input = [
      $this->createProduct('all', 2),
      $this->createProduct('bar', 1)
    ];

    $sorter = new ProductSorter('sku');
    $sorted = $sorter->sort($input);

    $this->assertEqual($sorted[0]->Name, 'bar');
    $this->assertEqual($sorted[1]->Name, 'all');
  }

  function testSortbyName() {

    $input = [
      $this->createProduct('bar', 1),
      $this->createProduct('all', 2)
    ];

    $sorter = new ProductSorter('name');
    $sorted = $sorter->sort($input);

    $this->assertEqual($sorted[0]->Name, 'all');
    $this->assertEqual($sorted[1]->Name, 'bar');
  }

  function createProduct($name, $sku) {
    $p = new Product();
    $p->Name = $name;
    $p->Sku = $sku;
    return $p;
  }

}
?>
