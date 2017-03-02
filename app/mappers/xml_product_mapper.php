<?php
require_once('../app/models/product.php');
class XMLProductMapper {

  public static function get_product($product_xml) {
    $attributes = $product_xml->attributes();
    $product = new Product();
    $product->Name = self::find_child($product_xml, 'name');
    $product->Description = self::find_child($product_xml, 'description');
    $product->Price = floatval(self::find_child($product_xml, 'price/whs'));
    $product->VatId = intval(self::find_child($product_xml, 'vat/id'));

    $product->Sku = intval(self::find_attribute($product_xml, 'sku'));
    $product->Cc = floatval(self::find_attribute($product_xml, 'cc'));

    $product->Categories = self::find_categories($product_xml);
    if(!$product->valid()) {
      return NULL;
    }
    return $product;
  }

  private static function find_categories($product_xml) {
    return []; // TODO: implement this mapping
  }

  private static function find_attribute($product_xml, $attr) {
    return $product_xml->attributes()[$attr]->__toString();
  }

  private static function find_child($product_xml, $path) {
    return $product_xml->xpath($path)[0]->__toString();
  }
}
?>
