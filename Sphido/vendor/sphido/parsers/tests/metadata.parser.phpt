<?php
/**
 * @author Roman Ozana <ozana@omdesign.cz>
 */
use parsers\MetadataParser;
use Tester\Assert;

require __DIR__ . '/../vendor/autoload.php';

\Tester\Environment::setup();

{ // empty meta
	Assert::null(MetadataParser::parse(''));
	Assert::same([], MetadataParser::parse('<!-- -->'));
}

{ // some values
	Assert::same(['t' => '5'], MetadataParser::parse('<!-- t: 5 -->')); // int
	Assert::same(['t' => 'some string with spaces'], MetadataParser::parse('<!-- t: some string with spaces -->'));
}

{ // special content
	Assert::same(['a key' => 'a value'], MetadataParser::parse('<!-- a key : a value -->'));
	Assert::same(['t' => '12:00:00'], MetadataParser::parse('<!--t: 12:00:00-->'));
}

{ // multiple values test
	Assert::same(['a' => 'b', 'b' => 'c'], MetadataParser::parse('<!-- a : b ' . PHP_EOL . ' b  :  c	-->'));
}


