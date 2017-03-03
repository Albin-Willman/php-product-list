<?php
class ProductSorter {
  private $field;
  public function __construct($field) {
    $this->field = $field;
  }

  public function sort($products) {
    usort($products, array($this, "cmp"));
    return $products;
  }

  private function cmp($a, $b) {
      return strcmp($a->Sku, $b->Sku);
  }
}
?>
