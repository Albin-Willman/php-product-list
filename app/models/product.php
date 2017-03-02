<?php
require_once('../app/utils/vat_value.php');

class Product {
  public $id;
  public $sku;
  public $name;
  public $description;
  public $price = 0;
  public $vatId;
  public $cc;
  public $categories = [];

  public function price_with_vat() {
    return $this->price * VatValue::Compute($this->VatId);
  }
}
?>
