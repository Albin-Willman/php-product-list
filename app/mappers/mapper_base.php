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

  protected static function findChild($xml, $path) {
    try {
      return $xml->xpath($path)[0]->__toString();
    } catch(Exception $e) {
      return NULL;
    }
  }
}
?>
