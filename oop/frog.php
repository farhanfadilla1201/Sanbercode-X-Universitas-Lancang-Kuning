
<?php
require_once('animal.php');

class frog extends animal
{
    public $legs = 4;
    public $cold_blooded = "no";

    public function jump() {
        echo " jump : hop hop<br>";
    }
}
?>
