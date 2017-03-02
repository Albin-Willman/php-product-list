<?php
require_once('../app/utils/vat_value.php');

class Product {
  public $Id;
  public $Sku;
  public $Name;
  public $Description;
  public $Price = 0;
  public $VatId;
  public $Cc;
  public $Categories = [];

  public function price_with_vat() {
    return $this->Price * VatValue::Compute($this->VatId);
  }
}
?>
