
<?php
require_once('../app/utils/vat_value.php');

class TestVatValue extends UnitTestCase {
  function testCompute() {
    // $cases = [
    //   [1, 1.25],
    //   [2, 1.12],
    //   [3, 1.06],
    //   [4, 1.0],
    //   [5, 1.0],
    //   [6, 1.06],
    //   [8, 1.0],
    //   [9, 1.06],
    // ]

    $this->assertEqual(VatValue::Compute(1), 1.25);
  }

  function testComputePossibilities() {
    
  }
}
?>