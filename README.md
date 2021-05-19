# Laravel Link Tracking History

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shadercloud/linktrackinghistory.svg?style=flat-square)](https://packagist.org/packages/shadercloud/linktrackinghistory)
[![Total Downloads](https://img.shields.io/packagist/dt/shadercloud/linktrackinghistory.svg?style=flat-square)](https://packagist.org/packages/shadercloud/linktrackinghistory)
![GitHub Actions](https://github.com/shadercloud/linktrackinghistory/actions/workflows/main.yml/badge.svg)

This is a very simple package that allows you to track which pages users have previously been to.

For example if you need to send the user "back 4 pages" you can use this package to do it.

## Installation

You can install the package via composer:

```bash
composer require shadercloud/linktrackinghistory
```

## Usage

```php
$two_pages_ago = LinkTrackingHistory::linkHistory(2);
echo 'You previously visited: '.$two_pages_ago;
```


The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
