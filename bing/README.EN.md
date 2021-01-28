English  |  [简体中文](./README.md)
# [**Hitokoto**](https://hitokoto.cn/)

## Introduction

RETURN TODAY'S Bing Background

## Requirements

1.Get Background JSON

2.Get The URL From JSON

3.Redirect To The Picture



## Usage

Picture URL

```html
http://img.lt5d.cn/bing
```
## Var

| Var Name | Introduction | Usage |
| :----: | :--: | :----: |
| day | Get  before $day Days 's photo <br />Default : day=0 | Today:day=0<br />Yesterday:day=1<br />The Day Before Yesterday:day=2<br />Tomorrow:day=-1<br />（Valid only after 16:00 on the same day） |


## Use Language

PHP : 100%

## Authors and acknowledgment

### Code

[**insoxin**](https://github.com/insoxin)

**ImJingLan**

### API
[Bing China](https://cn.bing.com/)

## Q&A

### Q：Why do you use the Chinese Bing instead of the international version?

### A：The Background Of Chinese Bing Is Newer Than the international version. If you want to synchronize the background image with the international version of Bing, you can use 

```html
http://api.lt5d.cn/bing?day=1
```

