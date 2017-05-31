<?php
/** @author Roman Ozana <ozana@omdesign.cz> */
use Tester\Assert;

require __DIR__ . '/../vendor/autoload.php';


{ // base error
	ob_start();
	\json\error('msg');
	Assert::same('{"error":true,"ok":false,"message":"msg"}', ob_get_contents());
	ob_clean();
}


{ // base error
	ob_start();
	\json\error('msg', 501, ['custom' => 'data']);
	Assert::same(
		'{"error":true,"ok":false,"message":"msg","custom":"data"}', ob_get_contents()
	);
	ob_clean();
}

{ // base error
	ob_start();
	\json\error('msg', 404);
	Assert::same('{"error":true,"ok":false,"message":"msg"}', ob_get_contents());
	ob_clean();
}

http_response_code(200); // do not failed tests on wrong response code
