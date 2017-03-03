<?php
require_once('../app/mappers/xml_category_mapper.php');

class TestXMLCategoryMapper extends UnitTestCase {
  function testBasic() {
    $xml = simplexml_load_file('../data/test_data.xml');
    $categories_xml = $xml->children()[0]->xpath('categories')[0]->children()[0];
    $category = XMLCategoryMapper::get_category($categories_xml);

    $this->assertEqual('Övrigt profilmaterial', $category->Name);
    $this->assertEqual(80, $category->Id);
  }
}
?>
