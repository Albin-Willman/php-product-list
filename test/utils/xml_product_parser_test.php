
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
    $this->assertEqual($products[0]->Name, 'Liten grön sprayflaska inkl spraytopp 50 ml');
    $this->assertEqual($products[1]->Name, 'Aloe Bath Gelée');
  }

  function testParseBrokenXML() {
    try {
      $parser = new XMLProductParser('../data/test_data_broken.xml');
      $this->AssertTrue(false);
    } catch (Exception $e) {
      $this->AssertTrue(true);
    }
  }
}
?>
