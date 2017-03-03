<?php
require_once('../app/mappers/xml_product_mapper.php');

class XMLProductParser {
  private $xml;

  public function __construct($file_path) {
    libxml_use_internal_errors(true);
    $this->xml = simplexml_load_file($file_path);
    if(!$this->xml) {
      throw new Exception();
    }
  }

  public function product_list() {
    $res = [];
    foreach($this->xml->children() as $product_xml) {
      $res[] = XMLProductMapper::get_product($product_xml);;
    }
    return $res;
  }
}
?>
