<?php
/**
 * Plugin Name:         Direct Link Translator
 * Plugin URI:          https://github.com/DJinnzNathan/denade-translate
 * Description:         Generates a link to the translation service 
 * Version:             0.1.8-beta
 * Text Domain:         denade-translate
 * Author:              DeNade Media
 * Author URI:          https://denade-media.com
 * Requires at least:   5.2
 * Requires PHP:        7.2
 * License:             GPL v3 or later
 * License URI:         https://www.gnu.org/licenses/gpl-3.0.html
 */
 
//   DeepL 
 function denade_deepl_translate($atts, $content) {
    $a = shortcode_atts( array(
        'color' => '#ed9f2d',
        'fromLang' => 'de',
        'toLang' => 'en'
        ), $atts );
        $output = '<strong><a href="https://www.deepl.com/en/translator#' . esc_attr( $a['fromLang'] ) . '/' . esc_attr( $a['toLang'] ) . '/' . esc_attr( $content ) . '" style="font-size: larger; color: ' . esc_attr( $a['color'] ) . ';" target="_blank" title="' . _e( 'Translate with DeepL', 'denade-translate' ) . '">' . esc_attr( $content ) . " 🌐" . '</a></strong>';
        return $output;
}

add_shortcode('DeepL', 'denade_deepl_translate');


//   Google Translator 
function denade_google_translate($atts, $content) {
    $a = shortcode_atts( array(
        'color' => '#ed9f2d',
        'fromLang' => 'auto',
        'toLang' => 'en'
        ), $atts );
        $output = '<strong><a href="https://translate.google.com/?hl=en#view=home&op=translate&sl=' . esc_attr( $a['fromLang']) . '&tl=' . esc_attr( $a['toLang'] ) . '&text=' . esc_attr( $content ) . '" style="font-size: larger; color: ' . esc_attr( $a['color'] ) . ';" target="_blank" title="' . _e( 'Translate with Google Translator', 'denade-translate' ) . '">' . esc_attr( $content ) . " 🌐" . '</a></strong>';
        return $output;
}

add_shortcode('GTranslate', 'denade_google_translate');


//   Yandex Translate 
function denade_yandex_translate($atts, $content) {
    $a = shortcode_atts( array(
        'color' => '#ed9f2d',
        'fromLang' => 'de',
        'toLang' => 'en'
        ), $atts );
        $output = '<strong><a href="https://translate.yandex.com/?lang=' . esc_attr( $a['fromLang']) . '-' . esc_attr( $a['toLang'] ) . '&text=' . esc_attr( $content ) . '" style="font-size: larger; color: ' . esc_attr( $a['color'] ) . ';" target="_blank" title="' . _e( 'Translate with Yandex.Translate', 'denade-translate' ) . '">' . esc_attr( $content ) . " 🌐" . '</a></strong>';
        return $output;
}

add_shortcode('Yandex', 'denade_yandex_translate');


//   Baidu Translator 
function denade_baidu_translate($atts, $content) {
    $a = shortcode_atts( array(
        'color' => '#ed9f2d',
        'fromLang' => 'de',
        'toLang' => 'en'
        ), $atts );
        $output = '<strong><a href="https://fanyi.baidu.com/#' . esc_attr( $a['fromLang']) . '/' . esc_attr( $a['toLang'] ) . '/' . esc_attr( $content ) . '" style="font-size: larger; color: ' . esc_attr( $a['color'] ) . ';" target="_blank" title="' . _e( 'Translate with Baidu', 'denade-translate' ) . '">' . esc_attr( $content ) . " 🌐" . '</a></strong>';
        return $output;
}

add_shortcode('Baidu', 'denade_baidu_translate');
