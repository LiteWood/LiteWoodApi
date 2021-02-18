[English](./README.EN.md) |  简体中文

# [**短链接 Links**](http://url.azoid.cn)

## 简介

一个简易的短链接系统

## 伪静态 

Nginx:

```nginx
rewrite ^/(.*)$ /index.php?l=$1 last;
```

Apache:

```nginx
RewriteRule ^/(.*)$ /index.php?l=$1 [L] 
```
## 使用

编辑  links.ini

## 语言

PHP : 100%

## 贡献者

### 代码

**景蓝 - ImJingLan** 