<?php
require_once('../app/models/category.php');
require_once('../app/mappers/mapper_base.php');
class XMLCategoryMapper extends MapperBase {

  public static function getObject($category_xml) {
    $category = new Category();
    $category->Name = self::findChild($category_xml, 'name');
    $category->Id = intval(self::findAttribute($category_xml, 'id'));

    if(!$category->valid()) {
      return NULL;
    }
    return $category;
  }
}
?>
