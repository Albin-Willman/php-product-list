<?php
require_once('../app/utils/xml_product_parser.php');
require_once('../app/views/products/index.php');
define('DATA_PATH', '../data/test_data.xml');

class ProductsController {
  public function index() {
    $parser = new XMLProductParser('../data/test_data.xml');
    $products = $parser->product_list();

    // TODO: Sort products;

    return new ProductIndexView($products);
  }

}
?>
