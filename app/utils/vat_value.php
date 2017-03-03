<?php
class VatValue {
  public static function compute($id) {
    switch ($id) {
      case 1: return 1.25;
      case 2: return 1.12;

      case 3: // Deliberate fallthrough
      case 6:
      case 9: return 1.06;

      case 4:
      case 5:
      case 8: return 1.0;
      default:
        # code...
        break;
    }
  }
}
?>
