<?php
require_once('../app/models/product.php');
require_once('../app/mappers/xml_category_mapper.php');
require_once('../app/mappers/mapper_base.php');
class XMLProductMapper extends MapperBase {

  public static function getObject($product_xml) {
    $product = new Product();
    $product->Name = self::findChild($product_xml, 'name');
    $product->Description = self::findChild($product_xml, 'description');
    $product->Price = floatval(self::findChild($product_xml, 'price/whs'));
    $product->VatId = intval(self::findChild($product_xml, 'vat/id'));

    $product->Sku = intval(self::findAttribute($product_xml, 'sku'));
    $product->Cc = floatval(self::findAttribute($product_xml, 'cc'));
    $product->Categories = self::mapChildModels($product_xml, 'categories', XMLCategoryMapper, 'category');
    if(!$product->valid()) {
      return NULL;
    }
    return $product;
  }
}
?>
