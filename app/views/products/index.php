<?php

require_once('../app/views/products/partials/product_item.php');

class ProductIndexView {
  private $products;

  public function __construct($products) {
    $this->products = $products;
  }

  public function render() {
    $ret = '<table>';
    foreach($this->products as $p) {
      $partial = new ProductItemPartial($p);
      $ret .= $partial->render();
    }
    return '<table class="table table-striped">'.$this->renderTableHead().$this->renderTableBody().'</table>';
  }

  private function renderTableBody() {
    $ret = '<tbody>';
    foreach($this->products as $p) {
      $partial = new ProductItemPartial($p);
      $ret .= $partial->render();
    }
    return $ret.'</tbody>';
  }


  private function renderTableHead() {
    return '<thead>
            <tr>
              <th class="sortable-column" data-sortby="sku">Sku</th>
              <th class="sortable-column" data-sortby="name">Name</th>
              <th>Description</th>
              <th class="sortable-column" data-sortby="price">Price (whs)</th>
              <th class="sortable-column" data-sortby="priceWithVat">Price (inc VAT)</th>
              <th>CC</th>
              <th>Categories</th>
            <tr/>
          </thead>';
  }

}
?>