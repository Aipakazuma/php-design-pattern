<?php
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/07/19
 * Time: 12:52
 */
require_once 'Main.php';
$main = new Main();
$type = filter_input(INPUT_GET, 'type');
?>
<?= $main->main($type) ?>
