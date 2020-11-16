<?php
/**
 * Plugin Name: primus fremdsprachen DeepL Translator
 * Plugin URI: https://denade-media.com
 * Description: Generates a DeepL Translate link 
 * Version: 0.1.3
 * Text Domain: primus-deepl-translate
 * Author: Nathan G-Michael
 * Author URI: https://denade-media.com
 */
 
 function primus_deepl_translate($atts) {
    $a = shortcode_atts( array(
        'link' => 'https://www.deepl.com/en/translator#de/en/',
        'text' => 'Test',
        'color' => '#ed9f2d',
        'target' => '_blank'
        ), $atts );
        $output = '<strong><a href="' . esc_url( $a['link'] ) . esc_attr( ($a['text'] ); . '" style="font-size: larger; color: ' . esc_attr( $a['color'] ) . ';" target="' . esc_attr($a['target']) . '">' . esc_attr( $a['text'] ) . '</a></strong>';
        return $output;
}

add_shortcode('DeepL-word', 'primus_deepl_translate');
 