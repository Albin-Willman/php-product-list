<?php
require_once('../app/utils/xml_product_parser.php');
require_once('../app/views/products/index.php');
define('DATA_PATH', '../data/products.xml');

class ProductsController {
  public function index() {
    $parser = new XMLProductParser(DATA_PATH);
    $products = $parser->product_list();

    // TODO: Sort products;

    return new ProductIndexView($products);
  }

}
?>
