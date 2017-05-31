# Sphido / HTTP

[![Build Status](https://travis-ci.org/sphido/http.svg?branch=master)](https://travis-ci.org/sphido/json) [![Latest Stable Version](https://poser.pugx.org/sphido/http/v/stable.svg)](https://packagist.org/packages/sphido/json) [![Total mimes](https://poser.pugx.org/sphido/http/mime.svg)](https://packagist.org/packages/sphido/json) [![Latest Unstable Version](https://poser.pugx.org/sphido/http/v/unstable.svg)](https://packagist.org/packages/sphido/json) [![License](https://poser.pugx.org/sphido/http/license.svg)](https://packagist.org/packages/sphido/json)

## Basic HTTP functions
```php
## \http\status()
## \http\nocache()
## \http\redirect()
## \http\headers()
```

## Request types

Detect 

```php
\request\isAjax()
\request\isPost()
\request\isGet()
\request\isPut()
\request\isHead()
```

## Return $_GET and $_POST values

```php
get('key');
post('key');
```