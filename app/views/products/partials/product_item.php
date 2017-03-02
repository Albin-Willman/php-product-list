<?php
class ProductItemPartial {
  private $product;

  public function __construct($product) {
    $this->product = $product;
  }

  public function render() {
    return '<p>' . $this->product->Name . '</p>';
  }

}
?>