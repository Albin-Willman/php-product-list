
<?php
require_once('../app/utils/xml_product_parser.php');

class TestXMLProductParser extends UnitTestCase {
  function testParseBasic() {
    $parser = new XMLProductParser('../data/test_data.xml');
    $products = $parser->product_list();

    $this->assertEqual(count($products), 2);
    foreach($products as $p) {
      $this->assertTrue(is_a($p, 'Product'));
    }
  }
}
?>
