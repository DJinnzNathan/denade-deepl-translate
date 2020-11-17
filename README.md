# Direct Link Translator Plugin

## Description
This plugin is my first project as I needed it for my work. For building an online language learning system, I needed a quick way to let the users directly translate specific words or sentences on translation services within a lection. 
Right now it translates from German to English.   

## Features
You can add the translation tags where shortcodes work. The link is larger than the surrounding text. You can add standard colors or a specific ones as hex or RGB. For example:
`[DeepL color=#c53222] Das ist ein Beispiel [/DeepL]`. The link on the page for DeepL will look like this: [**Das ist ein Beispiel.** 🌐](https://www.deepl.com/en/translator#de/en/Das%20ist%20ein%20Beispiel.)

The Shortcodes are:

Shortcode | Translator service
------------ | -------------
`[DeepL]` | [DeepL](https://www.deepl.com/)
`[GTranslate]` | [Google Translate](https://translate.google.com/)
`[Yandex]` | [Yandex Translate](https://translate.yandex.com/)
`[Baidu]` | [Fanyi Baidu](https://fanyi.baidu.com/)

## Roadmap
- [x] Add globus emoji
- [x] Add more translation services
- [ ] Add the language code of referenced text
- [ ] Add destination language code
- [ ] Add a dropdown with some important languages (or all languages, as DeepL only offers a few)
