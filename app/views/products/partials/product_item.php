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
      '<td class="description-cell">' . $this->descriptionCell() . '</td>' .
      '<td>' . $this->product->Price . '</td>' .
      '<td>' . $this->product->priceWithVat() . '</td>' .
      '<td>' . $this->product->Cc . '</td>' .
      '<td>' . $this->categories() . '</td>' .
      '</tr>';
  }

  private function categories() {
    $category_names = [];
    foreach($this->product->Categories as $category) {
      $category_names[] = $category->Name;
    }
    return implode(', ', $category_names);
  }

  private function descriptionCell() {
    $short = substr($this->product->Description, 0, 100);
    return sprintf("<span class=\"short\">%s...</span><span class=\"full\">%s</span>
      <button class=\"btn btn-xs btn-primary\"><span class=\"short\">Read more</span><span class=\"full\">Read less</span></button>", $short, $this->product->Description);
  }

}
?>