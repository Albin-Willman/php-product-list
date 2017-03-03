<?php
require_once('../app/mappers/xml_category_mapper.php');

class TestXMLCategoryMapper extends UnitTestCase {
  function testBasic() {
    $xml = simplexml_load_file('../data/test_data.xml');
    $categoryXML = $xml->children()[0]->xpath('categories')[0]->children()[0];
    $category = XMLCategoryMapper::get_category($categoryXML);

    $this->assertEqual('Övrigt profilmaterial', $category->Name);
    $this->assertEqual(80, $category->Id);
  }
}
?>

