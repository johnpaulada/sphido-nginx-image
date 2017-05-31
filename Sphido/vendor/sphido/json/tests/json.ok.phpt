<?php
/** @author Roman Ozana <ozana@omdesign.cz> */
use Tester\Assert;

require __DIR__ . '/../vendor/autoload.php';


{ // ok
	ob_start();
	\json\ok('msg');
	Assert::same('{"ok":true,"error":false,"message":"msg"}', ob_get_contents());
	ob_clean();
}

{ // custom data test
	ob_start();
	\json\ok('msg', ['custom' => 'data']);
	Assert::same('{"ok":true,"error":false,"message":"msg","custom":"data"}', ob_get_contents());
	ob_clean();
}
