<?php
/**
 * File Upload Handler
 * 
 * PHP version 5
 *
 * @category File_Io
 * @package  Rovercode
 * @author   Brady L. Hurlburt <bradyhurlburt@gmail.com>
 * @license  http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html GPL v2
 * @link     https://github.com/aninternetof/rover-code
 */

$bds = glob('saved-bds/*.xml');

foreach ($bds as $bd) {
    $xml=simplexml_load_file($bd) or die("Error: Bad BD xml file.");
    if ((string)$xml->designName == $_GET["designName"]) {
        echo (string)$xml->bd;
        break;
    }
}



?>
