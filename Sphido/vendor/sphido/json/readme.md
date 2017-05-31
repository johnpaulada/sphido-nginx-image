# Sphido / Json

[![Build Status](https://travis-ci.org/sphido/json.svg?branch=master)](https://travis-ci.org/sphido/json) [![Latest Stable Version](https://poser.pugx.org/sphido/json/v/stable.svg)](https://packagist.org/packages/sphido/json) [![Total mimes](https://poser.pugx.org/sphido/json/mime.svg)](https://packagist.org/packages/sphido/json) [![Latest Unstable Version](https://poser.pugx.org/sphido/json/v/unstable.svg)](https://packagist.org/packages/sphido/json) [![License](https://poser.pugx.org/sphido/json/license.svg)](https://packagist.org/packages/sphido/json)

## json()

`json()` function is mapped directly to [`json_encode()`](http://php.net/manual/en/function.json-encode.php) function,
 process [`json_last_error()`](http://php.net/manual/en/function.json-last-error.php) and throw them as regullar Exception. 

```php
json(['some' => 'data']);
```

With options

```php
json(['some' => 'data'], JSON_PRETTY_PRINT);
```

## /json/ok()

Basic OK response:

```php
\json\ok('Custom success message');
```

will generate

```json
{"ok":true,"error":true,"message":"Custom success message"}
```

You can also generate response with custom data:

```php
\json\ok('Success message', ['data' => 123]);
```

will generate

```json
{"ok":true,"error":true,"message":"Success message","data":123}
```

## /json/error()

Basic ERROR response:

```php
\json\error('Custom error message');
```

will generate 

```json
{"error":true,"ok":true,"message":"Custom error message"}
```

You can add custom response code:

```php
\json\error('My custom error message', 404)
```

With custom response code and data

```php
\json\error('My custom error message', 404, ['abc' => true]);
```