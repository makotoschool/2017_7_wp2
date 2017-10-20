<?php

//styleを読む
function theme_scripts( ) {
	wp_enqueue_style( 'reset-css', get_template_directory_uri( ) . '/css/reset.css' );
    wp_enqueue_style( 'theme-css', get_template_directory_uri( ) . '/css/main.css');

    }

    add_action( 'wp_enqueue_scripts', 'theme_scripts' );

//カスタムメニュー機能を有効にする
register_nav_menus(array( 
'mainnavi' => 'メインナビゲーションバーの内容です',
 'utility' => 'ヘッダー上部のナビの内容です'
 ));



