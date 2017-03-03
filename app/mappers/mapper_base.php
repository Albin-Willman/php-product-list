<?php

class MapperBase {

  // abstract public function getObject();

  protected static function find_attribute($xml, $attr) {
    try {
      return $xml->attributes()[$attr]->__toString();
    } catch(Exception $e) {
      return NULL;
    }
  }

  protected static function find_child($xml, $path) {
    try {
      return $xml->xpath($path)[0]->__toString();
    } catch(Exception $e) {
      return NULL;
    }
  }
}
?>
