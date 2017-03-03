<?php
require_once('../app/models/product.php');
require_once('../app/mappers/xml_category_mapper.php');
class XMLProductMapper {

  public static function get_product($product_xml) {
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
    try {
      $ret = [];
      $categories_xml = $product_xml->xpath('categories')[0];

      foreach($categories_xml->children() as $category_xml) {
        $ret[] = XMLCategoryMapper::get_category($category_xml);
      }
      return $ret;
    } catch(Exception $e) {
      return [];
    }
  }

  private static function find_attribute($product_xml, $attr) {
    try {
      return $product_xml->attributes()[$attr]->__toString();
    } catch(Exception $e) {
      return NULL;
    }
  }

  private static function find_child($product_xml, $path) {
    try {
      return $product_xml->xpath($path)[0]->__toString();
    } catch(Exception $e) {
      return NULL;
    }
  }
}
?>
