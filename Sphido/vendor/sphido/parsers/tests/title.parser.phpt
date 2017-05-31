<?php
/**
 * @author Roman Ozana <ozana@omdesign.cz>
 */
use Tester\Assert;
use \parsers\TitleParser;

require __DIR__ . '/../vendor/autoload.php';
\Tester\Environment::setup();

// Transform content to plain text
Assert::same('This is title', TitleParser::parse('<h1>This is title</h1>'));
Assert::same('This is title', TitleParser::parse("something before something extra long \n# This is title"));
Assert::same('This is title', TitleParser::parse("something before something extra long <h1>This is title</h1>"));
