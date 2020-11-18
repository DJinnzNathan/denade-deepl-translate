# Direct Link Translator Plugin

## Description
This plugin is my first project as I needed it for my work. For building an online language learning system, I needed a quick way to let the users directly translate specific words or sentences on translation services within a lection. 
Right now it translates from German to English.   

## Features
You can add the translation tags where shortcodes work. The link is larger than the surrounding text. You can add standard HTML colors (red, orange, blue) or specific one as hex (RGB not tested). For example:
`[DeepL color=#c53222] Das ist ein Beispiel [/DeepL]`. The link on the page for DeepL will look like this: [**Das ist ein Beispiel.** 🌐](https://www.deepl.com/en/translator#de/en/Das%20ist%20ein%20Beispiel.)

The Shortcodes are:

Shortcode | Translator service
------------ | -------------
`[DeepL] ... [/DeepL]` | [DeepL](https://www.deepl.com/)
`[GTranslate] ... [/GTranslate]` | [Google Translate](https://translate.google.com/)
`[Yandex] ... [/Yandex]` | [Yandex Translate](https://translate.yandex.com/)
`[Baidu] ... [/Baidu]` | [Fanyi Baidu](https://fanyi.baidu.com/)

You can also set specific parameters, that differs from the standard setup:
`[DeepL fromLang=en toLang=it color=#735686]`
- The *fromLang* parameter defines the language of the text.
- The *toLang* parameter defines the language to translate to.
- With the color parameter you can set up your own colors (text or Hex-Color-Code)

## Roadmap
- [x] Add globus emoji
- [x] Add more translation services
- [X] Add the language code of referenced text
- [X] Add destination language code
- [ ] Add a dropdown with some important languages (or all languages, as DeepL only offers a few)
- [ ] Add a standard reference language every text is translated from
