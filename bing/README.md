[English](./README.EN.md) |  简体中文

# 每日美图 Bing

## 简介

自动返回今日[必应中国版](https://cn.bing.com/)背景美图

## 原理

1.获取日图JSON

2.从JSON中找出URL

3.302跳转到图片



## 调用方式

图片地址：

```html
http://img.lt5d.cn/bing
```

## 语言

PHP : 100%

## 贡献者

### 代码

[**insoxin**](https://github.com/insoxin)

**景蓝 - ImJingLan** 

### 接口提供

[必应中国版](https://cn.bing.com/)

## Q&A

### Q：你为什么要用中国版必应而不是国际版必应?

### A：The Background Of Chinese Bing Is Newer Than the international version. If you want to synchronize the background image with the international version of Bing, you can use 

```html
http://api.lt5d.cn/bing?day=1
```