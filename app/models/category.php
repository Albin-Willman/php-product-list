<?php
class Category {
  public $Id;
  public $Name;

  public function valid() {
    return !!$this->Name;
  }
}
?>
