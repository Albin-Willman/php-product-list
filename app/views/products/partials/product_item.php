<?php
class ProductItemPartial {
  private $product;

  public function __construct($product) {
    $this->product = $product;
  }

  public function render() {
    return '<tr>' .
      '<td>' . $this->product->Sku . '</td>' .
      '<td>' . $this->product->Name . '</td>' .
      '<td class="description-cell">' . $this->description_cell() . '</td>' .
      '<td>' . $this->product->Price . '</td>' .
      '<td>' . $this->product->price_with_vat() . '</td>' .
      '<td>' . $this->product->Cc . '</td>' .
      '<td>' . $this->categories() . '</td>' .
      '</tr>';
  }

  private function categories() {
    // TODO: implement this function
    return 'Cats';
  }

  private function description_cell() {
    $short = substr($this->product->Description, 0, 100);
    return sprintf("<span class=\"short\">%s</span><span class=\"full\">%s</span>", $short, $this->product->Description);
  }

}
?>