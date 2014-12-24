openccpp
========

openccpp扩展是在opencc项目基础之上建立的一个PHP扩展项目,用于汉字繁简体互转.它使用C++编写,确保opencc在web开发中发挥最大性能.

它具有转换准确率高,速度快的特点.可说是当前汉字繁简体互转方面的佼佼者.依据opencc官方的简介,它可以支持主要华文地区(大陆,香港及台湾)普通字词,异体字词和习惯用语的相互转换.openccpp扩展是在opencc项目基础之上建立的一个PHP扩展项目.它使用C++编写,确保opencc在web开发中发挥最大性能.

openccpp工作引擎包括json配置文件和相关的.ocd扩展名的字典文件.set_config方法只需设置json文件即可,但是一般需确保.ocd文件与json文件在同一个文件夹内.

openccpp项目对工作引擎的配置有详细的说明.具体如下:

s2t.json Simplified Chinese to Traditional Chinese 簡體到繁體

t2s.json Traditional Chinese to Simplified Chinese 繁體到簡體

s2tw.json Simplified Chinese to Traditional Chinese (Taiwan Standard) 簡體到臺灣正體

tw2s.json Traditional Chinese (Taiwan Standard) to Simplified Chinese 臺灣正體到簡體

s2hk.json Simplified Chinese to Traditional Chinese (Hong Kong Standard) 簡體到香港繁體（香港小學學習字詞表標準）

hk2s.json Traditional Chinese (Hong Kong Standard) to Simplified Chinese 香港繁體（香港小學學習字詞表標準）到簡體

s2twp.json Simplified Chinese to Traditional Chinese (Taiwan Standard) with Taiwanese idiom 簡體到繁體（臺灣正體標準）並轉換爲臺灣常用詞彙

tw2sp.json Traditional Chinese (Taiwan Standard) to Simplified Chinese with Mainland Chinese idiom 繁體（臺灣正體標準）到簡體並轉換爲中國大陸常用詞彙

使用是应该根据自己的需要和上述说明来选择合适的json配置文件.

文档下载地址：http://www.wqbuyer.com/demo/blog/1.html.

64位 ubuntu 适用.
