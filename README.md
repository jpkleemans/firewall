# Firewall

[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](LICENSE.md)

Easy access control for PHP

> This library is currently under development. Things will change. Things will break.

## Install

Via Composer

``` bash
$ composer require jpkleemans/firewall:dev-master
```

## Usage

``` php
use Firewall\Adapter\HtaccessAdapter;
use Firewall\Host\IP;

// Create an instance of an adapter that implements the Firewall interface.
$firewall = new HtaccessAdapter('path/to/.htaccess');

// Create an instance of a class that implements the Host interface.
$host = IP::fromString('123.0.0.1');

// Block the host
$firewall->deny($host);
```

## Planned Adapters

- Htaccess
- NGINX
- IIS
- HHVM
- lighttpd
- PSR-7 Middleware

## Testing

``` bash
$ phpspec run
```
