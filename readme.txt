=== Direct Link Translator ===
Contributors: djinnznathan
Tags: translate, deepl, google, yandex, baidu
Requires at least: 5.2
Tested up to: 5.6
Stable tag: 0.1.8.1
Requires PHP: 7.2
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

A simple shortcode-plugin for WordPress, that generates a link to DeepL with the translation of the string.

== Description ==

This plugin is my first project as I needed it for my work. For building an online language learning system, I needed a quick way to let the users directly translate specific words or sentences on DeepL within a lection. Right now it translates from German to English.

You can add the translation tags where shortcodes work. To generate a link, surround the text with the specific tag of the used translation service. You can add standard colors or a specific ones as hex or RGB.

== Installation ==

 - Go to Plugins - Add New.
 - Search for Direct Link Translator.
 - Select the plugin from DeNade Media.
 - Click on Install Now button, then activate it.

== Frequently Asked Questions ==

= Which languages are supported? =

Theoretically all languages that the translation services offers, are supported. When fully setup, the user clicks on the link, which opens the translation page of the service. After that, the user can change the destination language. 

= Can I change the reference language? =

Yes, you can add the parameter **fromLang**.

= What are the standard languages used when not adding parameters? =

The reference language is **German** and the translation is set to **English**.

== Legal Notices ==

This plugin uses third party services by offering a direct link to their website. I am not responsible for any errors happening on their website and can not guarantee the plugin to work at all times.

I am not associated with any of these services. The used services are listed below:

= DeepL =
[DeepL](https://deepl.com) is an online translator service. On their website, you can find their [Terms and Conditions](https://www.deepl.com/pro-license#free) and their [Privacy Policy](https://www.deepl.com/privacy/).
= Google Translate =
[Google Translate](https://translate.google.com/) is an online translator service from Alphabet Inc.. On their website, you can find their [Terms and Conditions and Policies](https://policies.google.com/).
= Yandex.Translate =
[Yandex.Translate](https://translate.yandex.com/) is an online translator service offered by YANDEX LLC. On their website, you can find their [Terms of Use](https://yandex.com/legal/translate_termsofuse/).
= Fanyi Baidu =
[Fanyi Baidu](https://fanyi.baidu.com/) is an online translator service offered by the chinese search engine Baidu.com. On their website, you can find their [Terms and Conditions](http://www.baidu.com/duty/).

== Changelog ==

= 0.1.8.1 =
* Released: 22.10.2020
* Fixed wrong title tag
