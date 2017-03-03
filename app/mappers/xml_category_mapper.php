<?php
require_once('../app/models/category.php');
require_once('../app/mappers/mapper_base.php');
class XMLCategoryMapper extends MapperBase {

  public static function get_category($category_xml) {
    $category = new Category();
    $category->Name = self::find_child($category_xml, 'name');
    $category->Id = intval(self::find_attribute($category_xml, 'id'));

    if(!$category->valid()) {
      return NULL;
    }
    return $category;
  }
}
?>
