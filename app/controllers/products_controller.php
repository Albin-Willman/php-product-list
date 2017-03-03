<?php
require_once('../app/utils/xml_product_parser.php');
require_once('../app/views/products/index.php');
require_once('../app/utils/product_sorter.php');

define('DATA_PATH', '../data/products.xml');

class ProductsController {
  public function index() {
    $parser = new XMLProductParser(DATA_PATH);
    $products = $parser->productList();

    $sorter = new ProductSorter($_GET['sortby']);
    $sorted = $sorter->sort($products);

    return new ProductIndexView($sorted);
  }

}
?>
