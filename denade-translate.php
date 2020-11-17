<?php
/**
 * Plugin Name:         Direct Link Translator
 * Plugin URI:          https://github.com/DJinnzNathan/denade-deepl-translate
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
 
 function denade_deepl_translate($atts, $content) {
    $a = shortcode_atts( array(
        'link' => 'https://www.deepl.com/en/translator#de/en/',
        'color' => '#ed9f2d'
        ), $atts );
        $output = '<strong><a href="' . esc_url( $a['link'] ) . esc_attr( $content ) . '" style="font-size: larger; color: ' . esc_attr( $a['color'] ) . ';" target="_blank">' . esc_attr( $content ) . " 🌐" . '</a></strong>';
        return $output;
}

add_shortcode('DeepL', 'denade_deepl_translate');


 
