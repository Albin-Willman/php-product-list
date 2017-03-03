<?php

abstract class MapperBase {

  abstract static public function getObject($xml);

  protected static function findAttribute($xml, $attr) {
    try {
      return $xml->attributes()[$attr]->__toString();
    } catch(Exception $e) {
      return NULL;
    }
  }

  protected static function mapChildModels($xml, $path, $MapperClass, $childType) {
    try {
      $ret = [];
      $children_xml = $xml->xpath($path)[0];
      if(!$children_xml) {
        return [];
      }

      foreach($children_xml->children() as $child_xml) {
        if($child_xml->getName() == $childType){
          $ret[] = $MapperClass::getObject($child_xml);;
        }
      }
      return $ret;
    } catch(Exception $e) {
      return [];
    }
  }

  protected static function findChild($xml, $path) {
    try {
      return $xml->xpath($path)[0]->__toString();
    } catch(Exception $e) {
      return NULL;
    }
  }
}
?>
