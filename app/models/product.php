<?php
require_once('../app/utils/vat_value.php');

class Product {
  public $Sku;
  public $Name;
  public $Description;
  public $Price = 0;
  public $VatId;
  public $Cc;
  public $Categories = [];

  public function valid() {
    return !!$this->Name;
  }

  public function priceWithVat() {
    return $this->Price * VatValue::compute($this->VatId);
  }
}
?>
