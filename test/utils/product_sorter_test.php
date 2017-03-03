
<?php
require_once('../app/utils/product_sorter.php');
require_once('../app/models/product.php');

class TestProductSorter extends UnitTestCase {
  function testSortbySku() {

    $input = [
      $this->createProduct('test', 2),
      $this->createProduct('testa', 1)
    ];

    $sorter = new ProductSorter('sku');
    $sorted = $sorter->sort($input);

    $this->assertEqual($sorted[0]->Name, 'testa');
    $this->assertEqual($sorted[1]->Name, 'test');
  }

  function createProduct($name, $sku) {
    $p = new Product();
    $p->Name = $name;
    $p->Sku = $sku;
    return $p;
  }

}
?>
