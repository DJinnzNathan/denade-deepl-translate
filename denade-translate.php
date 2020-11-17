<?php
/**
 * Plugin Name:         Direct Link Translator
 * Plugin URI:          https://github.com/DJinnzNathan/denade-translate
 * Description:         Generates a link to the translation service 
 * Version:             0.1.6
 * Text Domain:         denade-translate
 * Author:              DeNade Media
 * Author URL:          https://denade-media.com
 * Requires at least:   5.2
 * Requires PHP:        7.2
 * License:             GPL v3 or later
 * License URI:         https://www.gnu.org/licenses/gpl-3.0.html
 */
 
//   DeepL 

 function denade_deepl_translate($atts, $content) {
    $a = shortcode_atts( array(
        'link' => 'https://www.deepl.com/en/translator#de/en/',
        'color' => '#ed9f2d',
        'sl' => 'de',
        'tl' => 'en'
        ), $atts );
        $output = '<strong><a href="https://www.deepl.com/en/translator#' . esc_attr( $sl) . '/' . esc_attr( $tl ) . '/' . esc_attr( $content ) . '" style="font-size: larger; color: ' . esc_attr( $a['color'] ) . ';" target="_blank">' . esc_attr( $content ) . " 🌐" . '</a></strong>';
        return $output;
}

add_shortcode('DeepL', 'denade_deepl_translate');


//   Google Translator 

function denade_google_translate($atts, $content) {
    $a = shortcode_atts( array(
        'link' => 'https://translate.google.com/?hl=en#view=home&op=translate&sl=auto&tl=en&text=',
        'color' => '#ed9f2d',
        'sl' => 'auto',
        'tl' => 'en'
        ), $atts );
        $output = '<strong><a href="https://translate.google.com/?hl=en#view=home&op=translate&sl=' . esc_attr( $sl) . '&tl=e' . esc_attr( $tl ) . '&text=' . esc_attr( $content ) . '" style="font-size: larger; color: ' . esc_attr( $a['color'] ) . ';" target="_blank">' . esc_attr( $content ) . " 🌐" . '</a></strong>';
        return $output;
}

add_shortcode('GTranslate', 'denade_google_translate');


//   Yandex Translate 

function denade_yandex_translate($atts, $content) {
    $a = shortcode_atts( array(
        'link' => 'https://translate.yandex.com/?lang=de-ru&text=',
        'color' => '#ed9f2d',
        'sl' => 'de',
        'tl' => 'en'
        ), $atts );
        $output = '<strong><a href="https://translate.yandex.com/?lang=' . esc_attr( $sl) . '-' . esc_attr( $tl ) . '&text=' . esc_attr( $content ) . '" style="font-size: larger; color: ' . esc_attr( $a['color'] ) . ';" target="_blank">' . esc_attr( $content ) . " 🌐" . '</a></strong>';
        return $output;
}

add_shortcode('Yandex', 'denade_yandex_translate');


//   Baidu Translator 

function denade_baidu_translate($atts, $content) {
    $a = shortcode_atts( array(
        'link' => 'https://fanyi.baidu.com/#de/zh/',
        'color' => '#ed9f2d',
        'sl' => 'de',
        'tl' => 'en'
        ), $atts );
        $output = '<strong><a href="https://fanyi.baidu.com/#' . esc_attr( $sl) . '/' . esc_attr( $tl ) . '/' . esc_attr( $content ) . '" style="font-size: larger; color: ' . esc_attr( $a['color'] ) . ';" target="_blank">' . esc_attr( $content ) . " 🌐" . '</a></strong>';
        return $output;
}

add_shortcode('Baidu', 'denade_baidu_translate');
