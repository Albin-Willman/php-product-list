<?php
require_once('../app/models/category.php');
class XMLCategoryMapper {

  public static function get_category($category_xml) {
    $category = new Category();
    $category->Name = self::find_child($category_xml, 'name');
    $category->Id = intval(self::find_attribute($category_xml, 'id'));

    if(!$category->valid()) {
      return NULL;
    }
    return $category;
  }

  private static function find_attribute($category_xml, $attr) {
    try {
      return $category_xml->attributes()[$attr]->__toString();
    } catch(Exception $e) {
      return NULL;
    }
  }

  private static function find_child($category_xml, $path) {
    try {
      return $category_xml->xpath($path)[0]->__toString();
    } catch(Exception $e) {
      return NULL;
    }
  }
}
?>
