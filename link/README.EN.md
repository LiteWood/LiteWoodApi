English  |  [简体中文](./README.md)
# [**Links**](http://url.azoid.cn)

## Introduction

A Simple Short Link

## URL Rewrite

Nginx:

```nginx
rewrite ^/(.*)$ /index.php?l=$1 last;
```

Apache:

```nginx
RewriteRule ^/(.*)$ /index.php?l=$1 [L] 
```

## Usage

Edit **links.ini**

## Use Language

PHP : 100%

## Authors and acknowledgment

### Code

**ImJingLan**