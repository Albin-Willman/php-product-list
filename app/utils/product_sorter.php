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
    switch($this->field) {
      case 'name': return strcmp($a->Name, $b->Name);
      case 'sku': return $a->Sku - $b->Sku;
      case 'price': return $a->Price - $b->Price;
      case 'priceWithVat': return $a->priceWithVat - $b->priceWithVat;

      default: return $a->Sku - $b->Sku;
    }
  }
}
?>
