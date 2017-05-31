<?php
/**
 * @author Roman Ozana <ozana@omdesign.cz>
 */
use Tester\Assert;
use \parsers\PlainText;

require __DIR__ . '/../vendor/autoload.php';
\Tester\Environment::setup();

// Transform content to plain text
Assert::same('', PlainText::parse('<html>'));
Assert::same('This will be plain text', PlainText::parse('This will be plain text'));
Assert::same('This will be plain text', PlainText::parse('This ## will **be** plain *text*'));
Assert::same('This will be plain', PlainText::parse('This <h2>will</h2> <strong>be</strong> plain'));