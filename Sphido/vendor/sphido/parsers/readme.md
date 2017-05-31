# Sphido / Parsers

[Sphido CMS](https://www.sphido.org) extractors and parsers

## MetadataParser

Metadata parser parse follow HTML comments:

```php
MetadataParser::parse('<!--
title: a page title
param one: content
param two: another content
-->');
```

To structured PHP arrays:

```php
array (
  'title' => 'a page title',
  'param one' => 'content',
  'param two' => 'another content',
);
```

## TitleParser

Extract title from markdown or HTML

```php
TitleParser::parse('<h1>This is title</h1> this is text'); // => This is title
```

## PlainText

Extract plain text from HTML od Markdown code:

```php
PlainText::parse('<h1>This is text</h1>'); // => This is text
PlainText::parse('# This is text'); // => This is text
```