<?php
/** @author Roman Ozana <ozana@omdesign.cz> */
use Tester\Assert;

require __DIR__ . '/../vendor/autoload.php';


ob_start();
download(__DIR__ . '/example.txt');
$content = ob_get_contents();
ob_clean();

Assert::same('An example file', $content);