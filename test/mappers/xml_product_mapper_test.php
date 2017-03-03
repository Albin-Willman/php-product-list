<?php
require_once('../app/mappers/xml_product_mapper.php');

class TestXMLProductMapper extends UnitTestCase {
  function testBasic() {
    $xml = simplexml_load_file('../data/test_data.xml');
    $productXML = $xml->children()[0];
    $product = XMLProductMapper::get_product($productXML);

    $this->assertEqual('Liten grön sprayflaska inkl spraytopp 50 ml', $product->Name);
    $this->assertEqual(0.77, $product->Price);

    $this->assertEqual('Nå finnes den nye sprayflasken. Den har fått Forevers nye grønne, skjønne farge og bærer den nye logoen i form av en ørn.', $product->Description);
    $this->assertEqual(1, $product->VatId);

    $this->assertEqual(1384, $product->Sku);
    $this->assertEqual(0, $product->Cc);
    $this->assertEqual(3, count($product->Categories));
  }
}
?>

